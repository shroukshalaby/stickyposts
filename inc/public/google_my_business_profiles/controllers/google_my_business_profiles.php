<?php
class google_my_business_profiles extends MY_Controller {
	
	public $tb_account_manager = "sp_account_manager";
	public $module_name;

	public function __construct(){
		parent::__construct();
        _permission("account_manager_enable");
		$this->load->model(get_class($this).'_model', 'model');
        include get_module_path($this, 'libraries/vendor/autoload.php', true);

		//
		$this->module_name = get_module_config( $this, 'name' );
		$this->module_icon = get_module_config( $this, 'icon' );
		$this->module_color = get_module_config( $this, 'color' );

        $client_id = get_option('google_gmb_client_id', '');
        $client_secret = get_option('google_gmb_api_secret', '');
        $api_key = get_option('google_gmb_api_key', '');

        if($client_id == "" || $client_secret == "" || $api_key == ""){
            redirect( get_url("social_network_configuration/index/google_my_business") );
        }

        //
        $this->client = new Google_Client();
        $this->client->setAccessType("offline");
        $this->client->setApprovalPrompt("force");
        $this->client->setApplicationName($this->module_name);
        $this->client->setClientId( $client_id );
        $this->client->setClientSecret( $client_secret );
        $this->client->setRedirectUri(get_module_url());
        $this->client->setDeveloperKey( $api_key );
        $this->client->setScopes(
            [
                'https://www.googleapis.com/auth/plus.business.manage',
                'https://www.googleapis.com/auth/business.manage',
                'https://www.googleapis.com/auth/userinfo.email'
            ]
        );
	}

	public function index($page = "", $ids = "")
	{
		//
        try {
            if( !_s("gmb_access_token") ){
                $this->client->authenticate( post("code") );
                $oauth2 = new Google_Service_Oauth2($this->client);
                $access_token = $this->client->getAccessToken();
                _ss("gmb_access_token", $access_token);
            }else{
                $access_token = _s("gmb_access_token");
            }
            
            $this->client->setAccessToken($access_token);
            $this->gmb = new Google_Service_MyBusiness($this->client);

            $locations = [];
            $accountsList = $this->gmb->accounts->listAccounts()->getAccounts();
            if ( $accountsList ) {
                $location_list = $this->gmb->accounts_locations->listAccountsLocations($accountsList[0]->name)->getLocations(); 
                if ($location_list) {
                    $locations = $location_list;
                }
            }

            $result = [];
            $count_location = 0;
            if(!empty($locations))
            {
                foreach ($locations as $key => $row)
                {
                    //pr($row->getMetaData()->getMapsUrl(),1);
                    if($row->getLocationState()->getIsVerified() == 1)
                    {
                        $result[] = (object)[
                            'id' => $row->getName(),
                            'name' => $row->getLocationName(),
                            'avatar' => "https://ui-avatars.com/api?name=".$row->getLocationName()."&size=128&background=4b88ef&color=fff",
                            'desc' => $row->getLocationName()
                        ];

                        $count_location++;
                    }
                }

                $data = [
                    "status" => "success",
                    "result" => $result
                ];
            }

            if($count_location == 0){
                $data = [
                    "status" => "error",
                    "message" => __('No profile to add')
                ];
            }
        } catch (Exception $e) {
            $data = [
                "status" => "error",
                "message" => $e->getMessage()
            ];
        }

        $data['module_name'] = $this->module_name;
        $data['module_icon'] = $this->module_icon;
        $data['module_color'] = $this->module_color;

		$views = [
			"subheader" => view( 'main/subheader', [ 'module_name' => $this->module_name, 'module_icon' => $this->module_icon, 'module_color' => $this->module_color ], true ),
			"column_one" => page($this, "pages", "general", $page, $data), 
		];
		
		views( [
			"title" => $this->module_name,
			"fragment" => "fragment_one",
			"views" => $views
		] );
	}

	public function oauth()
	{
        _us("gmb_access_token");
        $url = $this->client->createAuthUrl();
        redirect($url);
	}

	public function save()
	{
        try {
            $ids = post('id');
            $team_id = _t("id");

            validate('empty', __('Please select a profile to add'), $ids);

            $access_token = _s("gmb_access_token");
            $this->client->setAccessToken($access_token);
            $this->gmb = new Google_Service_MyBusiness($this->client);

            $locations = [];
            $accountsList = $this->gmb->accounts->listAccounts()->getAccounts();
            if ( $accountsList ) {
                $location_list = $this->gmb->accounts_locations->listAccountsLocations($accountsList[0]->name)->getLocations(); 
                if ($location_list) {
                    $locations = $location_list;
                }
            }

            $result = [];
            if(!empty($locations))
            {
                foreach ($locations as $key => $row)
                {
                    //pr($row->getMetaData()->getMapsUrl(),1);
                    if($row->getLocationState()->getIsVerified() == 1)
                    {
                        if(in_array($row->getName(), $ids))
                        {
                            $avatar = "https://ui-avatars.com/api?name=".$row->getLocationName()."&size=128&background=4b88ef&color=fff";
                            $avatar = save_img( $avatar, TMP_PATH.'avatar/' );

                            $item = $this->model->get('*', $this->tb_account_manager, "social_network = 'google_my_business' AND team_id = '{$team_id}' AND pid = '{$row->getName()}'");

                            if(!$item){
                                $data = [
                                    'ids' => ids(),
                                    'social_network' => 'google_my_business',
                                    'category' => 'profile',
                                    'login_type' => 1,
                                    'can_post' => 1,
                                    'team_id' => $team_id,
                                    'pid' => $row->getName(),
                                    'name' => $row->getLocationName(),
                                    'username' => $row->getName(),
                                    'token' => json_encode($access_token),
                                    'avatar' => $avatar,
                                    'url' => $row->getMetaData()->getMapsUrl(),
                                    'data' => NULL,
                                    'status' => 1,
                                    'changed' => now(),
                                    'created' => now()
                                ];

                                check_number_account("google_my_business", "profile");

                                $this->model->insert($this->tb_account_manager, $data);
                            }else{
                                @unlink($item->avatar);

                                $data = [
                                    'social_network' => 'google_my_business',
                                    'category' => 'profile',
                                    'login_type' => 1,
                                    'can_post' => 1,
                                    'team_id' => $team_id,
                                    'pid' => $row->getName(),
                                    'name' => $row->getLocationName(),
                                    'username' => $row->getName(),
                                    'token' => json_encode($access_token),
                                    'avatar' => $avatar,
                                    'url' => $row->getMetaData()->getMapsUrl(),
                                    'status' => 1,
                                    'changed' => now(),
                                ];

                                $this->model->update($this->tb_account_manager, $data, ['id' => $item->id]);
                            }
                        }
                    }
                }
                _us('gmb_access_token');

                ms([
                    "status" => "success",
                    "message" => __("Success")
                ]);
            }else{
                ms([
                    "status" => "error",
                    "message" => __('No profile to add')
                ]);
            }
        } catch (Exception $e) {
            ms([
                "status" => "error",
                "message" => $e->getMessage()
            ]);
        }
	}
}