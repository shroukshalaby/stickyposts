<?php

use libphonenumber\PhoneNumberUtil;

class ajax extends MX_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->lang->load(getCurrentLangIdiom(), getCurrentLangIdiom());
    }


    public function inbondLead()
    {

        header('Content-Type: application/json');


        $formdata = array();
        parse_str(post('form_data'), $formdata);
        $type = post('type');


        validate("email", "Enter Valid Email", $formdata['email'] ?? '', '', 'error',
            ['message' => '<h5> ' . __('valid_validEmail') . '</h5>', 'type' => 'error'], 'email');


        if ($type == 'newsletterSubscription' || $type == 'event')
            goto  skipValidation;


        try {
            $phoneNumberUtil = PhoneNumberUtil::getInstance();
            $phoneNumber = $phoneNumberUtil->parse($formdata['phone'], $formdata['country'], null, true);
            $validNumberForRegion = $phoneNumberUtil->isValidNumberForRegion($phoneNumber, $formdata['country']);
            if (!$validNumberForRegion) {
                ms([
                    "status" => 'error',
                    "message" => 'Wrong Phone Number For This Country',
                    "sweetConfig" => ['message' => '<h5>' . __('valid_wrongPhoneForCountry') . '</h5>', 'type' => 'error'],
                    "filedName" => 'phone',
                ]);
            }
        } catch (Exception $e) {
            ms([
                "status" => 'error',
                "message" => 'Wrong Phone Number',
                "sweetConfig" => ['message' => '<h5>' . __('valid_wrongPhone') . '</h5>', 'type' => 'error'],
                "filedName" => 'phone',
            ]);
        }

        validate("null", 'Name  Is Required', $formdata['name'] ?? '', '', 'error',
            ['message' => '<h5>' . __('valid_nameReq') . '</h5>', 'type' => 'error'], 'name');


        switch ($type) {

            case 'developers' :
            case 'training' :
            case 'enterprise_package':
                {

                    if ($type == 'training') {
                        validate("null", "", $formdata['topic'] ?? '', '', 'error',
                            ['message' => '<h5>' . 'Topic Is Required' . '</h5>', 'type' => 'error'], 'topic');

                        validate("null", "", $formdata['date'] ?? '', '', 'error',
                            ['message' => '<h5>' . 'Date Is Required' . '</h5>', 'type' => 'error'], 'date');
                    }

                    if ($formdata['type'] ?? '' != 'company')
                        goto skipValidation;

                    validate("null", "", $formdata['company'] ?? '', '', 'error',
                        ['message' => '<h5>' . __('valid_companyName') . '</h5>', 'type' => 'error'], 'company');


                    validate("not_company_email", "", $formdata['email'] ?? '', '', 'error',
                        ['message' => '<h5>' . __('valid_companyEmail') . '</h5>', 'type' => 'error'], 'email');

                    if ($type == 'enterprise_package') {

                        validate("null", "", $formdata['function'] ?? '', '', 'error',
                            ['message' => '<h5>' . __('valid_jobFun') . '</h5>', 'type' => 'error'], 'function');

                        validate("null", "", $formdata['numEmps'] ?? '', '', 'error',
                            ['message' => '<h5> ' . __('valid_numOfEmp') . '</h5>', 'type' => 'error'], 'numEmps');


                    }


                }

                break;
            case 'contactUs':
            case 'brandGuideLine':
                {

                    if ($type == 'contactUs') {
                        $selectTab = $formdata['type'] ?? '';
                        if ($selectTab == 'sticky')
                            $type = 'contactUs';
                        else
                            $type = 'contactUsFamily';

                    }
                    validate("null", "message", $formdata['message'] ?? '', '', 'error',
                        ['message' => '<h5> ' . __('valid_enterMsg') . '</h5>', 'type' => 'error'], 'message');

                }

                break;
            case 'instructor':
                {

                    validate("null", "category", $formdata['category'] ?? '', '', 'error',
                        ['message' => '<h5> ' . __('valid_selectCat') . '</h5>', 'type' => 'error'], 'category');

                    validate("null", "position", $formdata['position'] ?? '', '', 'error',
                        ['message' => '<h5> ' . __('valid_selectPos') . '</h5>', 'type' => 'error'], 'position');


                }
                break;

        }

        skipValidation:
        /* If User Registered and Not Activated His Email */
        ci::$APP->load->model('Stack/User', 'StackUser');
        $user = $this->StackUser->query()->where('email', $formdata['email'])->first();
        if ($user && $user->status < 2)
            ms([
                "status" => "question",
                "sweetConfig" => [
                    'message' => '<h5>' . __('valid_alreadyRegister') . '</h5>',
                    'type' => 'question',
                    'mutation' => 'resendVerification',
                    'confirmButtonText' => __('yes'),
                    'cancelButtonText' => __('cancel'),
                    'data' => ['email' => $formdata['email'], 'type' => $type]]
            ]);
        elseif ($user && $user->status >= 2)

            ms([
                "status" => "success",
                "sweetConfig" => [
                    'message' => '<h5>' . __('valid_receiveReq') . '</h5>',
                    'type' => 'success',

                ]]);

        $formdata['formdata'] = $formdata;
        $formdata['formdata']['type'] = $type;
        $formdata['formdata']['href'] = post('herf') ?? '';
        $leadResponse = registerLead($formdata);


        if ($leadResponse['message'] == 'Lead Successfully Created') {
            $data = [
                'email' => $formdata['email'],
                'type' => $type ?? '',
                'redirectUrl' => post('href') ?? null
            ];
            $key = getEncrypter()->encrypt($data, true);
            sendEmail($formdata['email'], ['activation_link' => get_url("activation/" . $key)]);
            ms([
                "status" => "success",
                "sweetConfig" => [
                    'message' => '<h5>' . __('valid_sentActive') . '</h5>',
                    'type' => 'success',

                ]]);

        } elseif ($leadResponse['verifiedEmail'] == false)

            ms([
                "status" => "question",
                "sweetConfig" => [
                    'message' => '<h5>' . __('valid_alreadyRegister') . '</h5>',
                    'type' => 'question',
                    'mutation' => 'resendVerification',
                    'confirmButtonText' => __('yes'),
                    'cancelButtonText' => __('cancel'),
                    'data' => ['email' => $formdata['email'], 'type' => $type]]
            ]);


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

            sendEmail($formdata['email'], ['dummy' => 1], $TypeCorrespondingNewsletterTemplate[$type]);


        ms([
            "status" => "success",
            "sweetConfig" => [
                'message' => '<h5>' . __('valid_receiveReq') . '</h5>',
                'type' => 'success',

            ]]);


        /* If User Registered and Not Activated His Email */


        return true;

    }

    public function resendactivation()
    {

        validate("null", __("Email is required"), post('email'));
        validate("null", 'Type is required', post('type'));
        header('Content-Type: application/json');

        ci::$APP->load->model('Stack/User', 'StackUser');
        $user = $this->StackUser->query()->where('email', post('email'))->first();


        if ($user)
            $link = get_activation_link($user->ids);
        else {

            $data = [
                'email' => post('email'),
                'type' => post('type') ?? '',
                'redirectUrl' => post('href') ?? null

            ];
            $key = getEncrypter()->encrypt($data, true);
            $link = get_url("activation/" . $key);
        }


        sendEmail(post('email'), ['activation_link' => $link]

        );

        ms([
            "status" => "success",
            "sweetConfig" => ['message' => '<h5>' . __('valid_emailSent') . '</h5>', 'type' => 'success']
        ]);


        return true;

    }


    public
    function pay()
    {

        /**@var Package $PackageModel */
        ci::$APP->load->model('Stack/Package', 'PackageModel');
        $package = $this->PackageModel::query()
            ->where('slug', '!=', 'free')
            ->where('slug', post("slug"))->firstOrFail();

        $total = post('period') == "yearly" ? $package->price_annually : $package->price_monthly;
        $total = number_format((float)$total, 2, '.', '');


        $info = [
            'customer' => [
                'customerName' => 'ahmed',
                'customerMobile' => '01127677496',
                'customerEmail' => 'ahmed@amen.com'
            ],
            'interaction' => [
                'cancelUrl' => 'http://cancelUrl.com',
                'returnUrl' => 'http://returnUrl.com',
                'timeoutUrl' => 'http://timeoutUrl.com'
            ],
            'invoice' => [
                'items' => [
                    [
                        "itemId" => $package->id,
                        "name" => $package->description,
                        "description" => $package->name,
                        "quantity" => "1",
                        "price" => $total,
                        "total" => $total
                    ]
                ],
                "total" => $total,
            ],
            'currency' => 'EGP',
            'currencySymbol' => 'EGP'
        ];


        header('Content-Type: application/json');
        echo callAPI("https://accept.elsaraf.com/api/init", "POST", $info);


        return true;

    }


}