<?php

trait FrontendTrait
{
//Here's All Front Urls
    public function payment()
    {
        /*
        [
            'title' => __('professional'),
            'slug' => 'professional',
            'freeTrail' => '',
            'extraFees' => 0,
            'currency' => 'EGP',
            'features' =>
                [
                    __('analyzer1') . '200' . __('analyzerAcc'),
                    __('analyzer2'),
                    __('analyzer3'),
                    __('analyzer4'),
                    __('analyzer5'),
                ],
        ],
                [
                    'title' => __('special'),
                    'slug' => 'special',
                    'freeTrail' => '',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('analyzer1') . '100' . __('analyzerAcc'),
                            __('analyzer2'),
                            __('analyzer3'),
                            __('analyzer4'),
                            __('analyzer5'),
                        ],
                ],
              [
                    'title' => __('economical'),
                    'slug' => 'economical',
                    'freeTrail' => '',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('analyzer1') . '50' . __('analyzerAcc'),
                            __('analyzer2'),
                            __('analyzer3'),
                            __('analyzer4'),
                            __('analyzer5'),
                        ],
                ],
         */
        $priceTable =
            [
                'family' => [
                    'title' => 'Family',
                    'freeTrail' => '3',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('rep-man-up') . ' 28 ' . __('fam-pages only'),
                            __('rep-unlim'),
                            __('rep-up-to-50'),
                            __('fam-Posts Generator'),
                            __('eco-copy'),
                            __('rep-reports'),
                            __('rep-auto-a'),
                            __('fam-Competitors'),
                            __('rep-adding-mult') . __('extra'),

                        ],
                ],
                'super-professional' => [
                    'title' => __('s_professional'),
                    'freeTrail' => '3',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('fam-You can manage') . ' 70 ' . __('fam-pages only'),
                            __('fam-Unlimited team members'),
                            __('pro-des'),
                            __('fam-Up to 50 Megabyte available storage'),
                            __('fam-Copyright protection'),
                            __('fam-Reports'),
                            __('rep-auto-a'),
                            __('fam-Competitors'),
                            __('pro-add-prev'),
                            __('pro-free-tab'),
                            __('sup-add-int'),
                            __('pro-don-tas'),
                            __('pro-land-pag'),

                        ],
                ],
                'professional' => [
                    'title' => __('professional'),
                    'freeTrail' => '3',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('fam-You can manage') . '35' . __('fam-pages only'),
                            __('fam-Unlimited team members'),
                            __('pro-des'),
                            __('fam-Up to 50 Megabyte available storage'),
                            __('fam-Copyright protection'),
                            __('fam-Reports'),
                            __('rep-auto-a'),
                            __('pro-add-prev'),
                            __('pro-free-tab'),
                            __('pro-don-tas'),
                            __('pro-land-pag'),

                        ],
                ],
                'special' => [
                    'title' => __('special'),
                    'freeTrail' => '3',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('fam-You can manage') . '14' . __('fam-pages only'),
                            __('fam-Unlimited team members'),
                            __('fam-Up to 50 Megabyte available storage'),
                            __('fam-Copyright protection'),
                            __('fam-Reports'),
                            __('rep-auto-a') . __('extra'),
                            __('fam-Availability') . __('extra'),

                        ],
                ],
                'econimcal' => [
                    'title' => __('economical'),
                    'freeTrail' => '3',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('fam-You can manage') . ' 7 ' . __('fam-pages only'),
                            __('fam-Unlimited team members'),
                            __('fam-Up to 50 Megabyte available storage'),
                            __('fam-Copyright protection'),
                            __('fam-Reports'),
                            __('rep-auto-a') . __('extra'),

                        ],
                ],
                'special-autoactivity' => [
                    'title' => __('special'),
                    'freeTrail' => '3',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('fam-You can manage') . ' 7 ' . __('fam-pages only'),
                            __('fam-Unlimited team members'),
                            __('fam-Up to 50 Megabyte available storage'),
                            __('fam-Copyright protection'),
                            __('fam-Reports'),
                            __('rep-auto-a') . __('extra'),

                        ],
                ],
                'econimcal-autoactivity' => [
                    'title' => __('economical'),
                    'freeTrail' => '3',
                    'extraFees' => 0,
                    'currency' => 'EGP',
                    'features' =>
                        [
                            __('fam-You can manage') . ' 7 ' . __('fam-pages only'),
                            __('fam-Unlimited team members'),
                            __('fam-Up to 50 Megabyte available storage'),
                            __('fam-Copyright protection'),
                            __('fam-Reports'),
                            __('rep-auto-a') . __('extra'),

                        ],
                ],



            ];

        /**@var Package $PackageModel */
        ci::$APP->load->model('Stack/Package', 'PackageModel');

        $packages = $this->PackageModel::query()
            ->select(['id', 'name', 'description', 'price_monthly', 'price_annually', 'trial_day', 'slug'])
            ->where('slug', '!=', 'free')
            ->where('status', 1)
            ->get()->collect()->map(function ($package) use($priceTable){

                $package->info = $priceTable[$package->slug] ?? '';
                return $package;
            });



        return $this->blade('sticky.pages.payment', ['priceTable' => $priceTable, 'packages' => $packages]);

    }

    public function pre_order()
    {
        return $this->blade('sticky.backToBusiness.pre_order');

    }

    public function b2b_register()
    {
        return $this->blade('sticky.backToBusiness.register');

    }

    public function register()
    {

        if (_u()) {
            redirect(get_url('dashboard'));
        }
        return $this->blade('sticky.pages.register', ['CI' => getci()]);

    }

    public function thanks()
    {

        return $this->blade('sticky.pages.thanks');

    }

    public function back_to_business()
    {

        return $this->blade('sticky.pages.back_to_business');

    }

    public function installment()
    {

        return $this->blade('sticky.pages.installment');

    }

    public function teaser()
    {

        return $this->blade('sticky.pages.teaser');

    }

    public function pricing()
    {
        $ipdat = getVisitorCountry();


        return $this->blade('sticky.mobile.payment', ['ipData' => $ipdat]);


    }

    public function professional()
    {

        return $this->blade('sticky.mobile.professional');

    }

    public function special()
    {

        return $this->blade('sticky.mobile.special');

    }

    public function super_professional()
    {

        return $this->blade('sticky.mobile.super_professional', ['ipData' => getVisitorCountry()]);


    }

    public function economical()
    {

        return $this->blade('sticky.mobile.economical');

    }

    public function reports()
    {

        return $this->blade('sticky.pages.reports');

    }

    public function brand_guideline()
    {

        return $this->blade('sticky.pages.brand_guideline');

    }

    public function contact_us()
    {

        return $this->blade('sticky.pages.contact_us', ['ipData' => getVisitorCountry()]);

    }

    public function enterprise_package()
    {
        ci::$APP->load->model('sticky/Post', 'post');
        return $this->blade('sticky.pages.enterprise_package', ['posts' => $this->post->query()->take(3)->get()]);

    }

    public function careers()
    {
        return $this->blade('sticky.pages.careers', ['ipData' => getVisitorCountry()]);

    }

    public function learn_more()
    {
        $ipdat = getVisitorCountry();


        ci::$APP->load->model('sticky/sticky_service_provider');
        ci::$APP->load->model('sticky/sticky_compare');
        $view_data = array(
            'sticky_service_providers' => $this->sticky_service_provider->query()->where('id', '!=', 1)->get(),
            'sticky_compare' => $this->sticky_compare->query()->where('id', '!=', 1)->get()

        );

        return $this->bladeWithShare('sticky.pages.learn_more', $view_data, 'ipData', $ipdat);

    }
    public function invoice()
    {
        return $this->bladeWithShare('sticky.pages.invoice', ['ipData' => getVisitorCountry()]);

    }

    public function more_benefits()
    {
        return $this->blade('sticky.pages.more_benefits', ['ipData' => getVisitorCountry()]);

    }

    public function stickyposts_affiliate()
    {


        return $this->blade('sticky.pages.stickyposts_affiliate', ['ipData' => getVisitorCountry()]);


    }

    public function auto_activity()
    {


        return $this->blade('sticky.pages.auto_activity', ['ipData' => getVisitorCountry()]);


    }

    public function developers()
    {

        return $this->blade('sticky.pages.developers', ['ipData' => getVisitorCountry()]);

    }

    public function family()
    {

        return $this->blade('sticky.pages.family', ['ipData' => getVisitorCountry()]);

    }

    public function businessregister()
    {
        return $this->blade('sticky.pages.businessregister');

    }

    public function posts_generator()
    {

        return $this->blade('sticky.pages.posts_generator', ['ipData' => getVisitorCountry()]);

    }

    public function training()
    {


        return $this->blade('sticky.pages.training');

    }

    public function instructor()
    {

        return $this->blade('sticky.pages.instructor');

    }

    public function templates()
    {


        return $this->blade('sticky.pages.templates');

    }

    public function privacy_policy()
    {
        $data = array();
        view('privacy_policy', $data);
    }

    public function terms_and_policies()
    {
        $data = array();
        view('terms_and_policies', $data);
    }

    public function terms()
    {
        return $this->blade('sticky.pages.terms');
    }

    public function privacy()
    {
        return $this->blade('sticky.pages.privacy');
    }

    public function login()
    {
        return $this->blade('sticky.pages.sginin', ['CI' => getci(), 'loader' => $this->load]);
    }

    public function signup()
    {
        if (!get_option("signup_status", 1)) {
            redirect(get_url("login"));
        }
        $data = array();
        view('signup', $data);
    }

    public function social_login()
    {
        $type = segment(2);
        switch ($type) {
            case 'facebook':
                $this->user_manager_model->social_login($type);
                break;

            case 'google':
                $this->user_manager_model->social_login($type);
                break;

            case 'twitter':
                $this->user_manager_model->social_login($type);
                break;
            default:
                redirect(get_url("login"));
                break;
        }
    }

    public function forgot_password()
    {
        $data = array();
        view('forgot_password', $data);
    }

    public function recovery_password()
    {
        $this->user_manager_model->verify_recovery_password(segment(2));

        $data = array();
        view('recovery_password', $data);
    }


}