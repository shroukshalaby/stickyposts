<?php


require FRONTEND_PATH . 'pure/traits/FrontendTrait.php';
require FRONTEND_PATH . 'pure/traits/AjaxTrait.php';

class pure extends MY_Controller
{
    use FrontendTrait;
    use AjaxTrait;


    public function __construct()
    {
        parent::__construct();
        $this->tb_language_category = "sp_language_category";
        $this->load->model(get_class($this) . '_model', 'model');
        $this->load->model('user_manager/user_manager_model', 'user_manager_model');
        if (!(_s('language'))) {
            switchlang('en');
        }
        $this->lang->load(getCurrentLangIdiom(), getCurrentLangIdiom());
    }

    public function index()
    {


        $ipdat = getVisitorCountry();


        ci::$APP->load->model('sticky/sticky_service_provider');
        ci::$APP->load->model('sticky/sticky_compare');
        $view_data = array(
            'sticky_service_providers' => $this->sticky_service_provider->query()->where('id', '!=', 1)->get(),
            'sticky_compare' => $this->sticky_compare->query()->where('id', '!=', 1)->get()

        );

        return $this->bladeWithShare('sticky.home', $view_data, 'ipData', $ipdat);

    }

    public function lang($lang = 'en')
    {
        switchlang($lang);
        $var = $_SERVER['HTTP_REFERER'];
        echo '<script>window.location.href="' . $var . '"</script>';
    }


    public function compare()
    {

        $formdata = array();
        parse_str(post('form_data'), $formdata);


        $formdata['providerName'] ?? exit(0);
        $formdata['packageName'] ?? exit(0);


        $provider = $formdata['providerName'];
        $package = $formdata['packageName'];

        ci::$APP->load->model('sticky/sticky_service_provider');
        ci::$APP->load->model('sticky/sticky_compare');


        $sticky = $this->sticky_compare->query()->with(['provider'])->where('service_provider', 1)
            ->where('package_value', $package)->first();


        $competitor = $this->sticky_compare->query()->with(['provider'])->where('service_provider', $provider)
            ->where('package_value', $package)->first();


        $view_data = array(
            'sticky' => $sticky,
            'competitor' => $competitor

        );

        $this->blade('sticky.layout.partials.common.compareBody', $view_data);


    }


    public function activation()
    {
        try {
            $data = getEncrypter()->decrypt(segment(2), true);

            registerLead($data, false, true);


            // Type = > Crm Newsletter Template Slug
            $TypeCorrespondingNewsletterTemplate =
                [
                    'brandGuideLine' => 'brand-guideline',
                    'contactUs' => 'contact-us',
                    'contactUsFamily' => 'contact-us-family',
                    'enterprise_package' => 'enterprise',
                    'instructor' => 'instructor',
                    'training' => 'training',
                    'developers' => 'developers',
                    'newsletterSubscription' => 'newsletter-subscription',
                    'event' => 'event'
                ];


            //dummy It's Not Important Just For Testing
            sendEmail($data['email'], ['dummy' => 1], $TypeCorrespondingNewsletterTemplate[$data['type']]);

            _ss('sweetMessage',

                json_encode([
                    'message' => '<h5>' . __('valid_thanksReguest') . '</h5>',
                    'type' => 'success',
                ]));
            redirect($data['redirectUrl'] ?? get_url("login"));

        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {


            $activation_key = explode("_", segment(2));
            if (count($activation_key) != 2) {
                redirect(get_url("login"));
            }


            ci::$APP->load->model('Stack/User', 'StackUser');
            $user = $this->StackUser->where('ids', $activation_key[0] ?? '');

            if (!$user) {
                redirect(get_url("login"));
            }

            if (md5($user->id . $user->email . $user->created) != $activation_key[1]) {
                redirect(get_url("login"));
            }

            $user->update(["status" => 2, "changed" => now()], ["id" => $user->id]);


            _ss('sweetMessage',
                json_encode([
                    'message' => '<h5>' . __('valid_thanks') . '</h5>',
                    'type' => 'success',
                ])


            );

            $data = array();
            view('activation', $data);
        }
    }

    public function timezone()
    {
        $timezone = post("timezone");
        _ss("timezone", $timezone);
        ms(["timezone" => $timezone]);
    }

    public function set($ids = "")
    {
        $language = $this->model->get('*', $this->tb_language_category, "ids = '{$ids}'");
        if ($language) {
            _ss('language',
                json_encode(
                    [
                        "name" => $language->name,
                        "icon" => $language->icon,
                        "code" => $language->code
                    ]
                )
            );
        }

        ms(['status' => 'success']);
    }
}
