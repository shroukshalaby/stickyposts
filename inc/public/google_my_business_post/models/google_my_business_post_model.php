<?php
class google_my_business_post_model extends MY_Model {
	public $tb_account_manager = "sp_account_manager";

	public function __construct(){
		parent::__construct();
		$module_path = get_module_directory(__DIR__);
		include $module_path.'libraries/vendor/autoload.php';

		//
		$this->module_name = get_module_config( $module_path, 'name' );
		$this->module_icon = get_module_config( $module_path, 'icon' );
		$this->module_color = get_module_config( $module_path, 'color' );
		//
		
		$client_id = get_option('google_gmb_client_id', '');
        $client_secret = get_option('google_gmb_api_secret', '');
        $api_key = get_option('google_gmb_api_key', '');

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

	public function block_permissions($path = ""){
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'position' => 8100,
			'name' => $this->module_name,
			'color' => $this->module_color,
			'icon' => $this->module_icon, 
			'id' => str_replace("_model", "", get_class($this)),
			'html' => view( $dir.'pages/block_permissions', ['path' => $path], true, $this ),
		];
	}

	public function block_report($path = ""){
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'tab' => 'google_my_business',
			'position' => 1000,
			'name' => $this->module_name,
			'color' => $this->module_color,
			'icon' => $this->module_icon, 
			'id' => str_replace("_model", "", get_class($this)),
			'html' => view( $dir.'pages/block_report', ['path' => $path], true, $this ),
		];
	}

	public function block_post_preview($path = ""){
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'position' => 1500,
			'name' => $this->module_name,
			'color' => $this->module_color,
			'icon' => $this->module_icon, 
			'id' => str_replace("_model", "", get_class($this)),
			'preview' => view( $dir.'pages/preview', ['path' => $path], true, $this ),
		];
	}

	public function post_validator($data){
		$errors = array();

		switch ($data['post_type']) {
			
			case 'link':
				if(empty($data['medias'])){
					$errors[] = __("Google my business requires an image");
				}
				break;

			case 'video':
				$errors[] = __("Google my business API not support post video");
				break;
		}

		return $errors;
	}

	public function post( $data ){
		$post_type = $data["post_type"];
		$account = $data["account"];
		$medias = $data["medias"];
		$link = $data["link"];
		$advance = $data["advance"];
		$caption = spintax( $data["caption"] );
		$is_schedule = $data["is_schedule"];

		if($is_schedule)
		{	
			return [
            	"status" => "success",
            	"message" => __('Success'),
            	"type" => $post_type
            ];
		}
		
		$this->client->setAccessToken($account->token);
        $this->gmb = new Google_Service_MyBusiness($this->client);

		try {
			$posts = $this->gmb->accounts_locations_localPosts;
			$post = new \Google_Service_MyBusiness_LocalPost();
		 	$post->setLanguageCode("en");
            $post->setName($caption);
            $post->setSummary($caption);

			switch ($post_type)
			{
				case 'photo':
					$medias[0] = watermark($medias[0], $account->team_id, $account->id);
	                $MediaItem = new \Google_Service_MyBusiness_MediaItem();
                    $MediaItem->setMediaFormat('PHOTO');
                    $MediaItem->setSourceUrl($medias[0]);
                    $post->setMedia($MediaItem);
					break;

				case 'link':
					$medias[0] = watermark($medias[0], $account->team_id, $account->id);
	                $MediaItem = new \Google_Service_MyBusiness_MediaItem();
                    $MediaItem->setMediaFormat('PHOTO');
                    $MediaItem->setSourceUrl($medias[0]);
                    $post->setMedia($MediaItem);
					break;

				case 'text':
					//Action Text
					break;
			}

			if(isset($advance['link']) && $advance['link'] != "" && isset($advance['call_to_action']) && $advance['call_to_action'] != ""){
                $call = new \Google_Service_MyBusiness_CallToAction();
                $call->setActionType($advance['call_to_action']);
                $call->setUrl($advance['link']);
                $post->setCallToAction($call);
            }

		 	$response = $posts->create($account->pid, $post);
		 	unlink_watermark($medias);

			return [
            	"status" => "success",
            	"message" => __('Success'),
            	"id" => $response->getName(),
            	"url" => $response->getSearchUrl(),
            	"type" => $post_type
            ]; 

		} catch (Exception $e) {
			$error = $e->getMessage();
			$error = json_decode($error, true);
			unlink_watermark($medias);
			return [
            	"status" => "error",
            	"message" => __( $error['error']['details'][0]['errorDetails'][0]['message'] ),
            	"type" => $post_type
            ];
		}
	}
}
