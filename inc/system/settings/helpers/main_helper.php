<?php


if (!function_exists("getEncrypter")) {

    function getEncrypter(): \Illuminate\Encryption\Encrypter
    {


        return new \Illuminate\Encryption\Encrypter(base64_decode(ENCRYPTION_KEY_BASE64), 'AES-256-CBC');


    }

}


if (!function_exists("registerLead")) {

    function registerLead($data, $checkEmail = false, $verifyEmail = false, $lead_activity = "registerNotMember")
    {
        $leadData = [
            'email' => $data['email'] ?? '',
            'name' => $data['name'] ?? '',
            'phone' => $data['phone'] ?? '',
            'lead_activity' => $lead_activity,
            'project_slug' => 'stickyposts',
            'language' => getCurrentLangIdiom(),
            'mrkt_data' => $data['mrkt_data'] ?? '',
            'formdata'=>$data['formdata']??''
        ];

        $verifyEmail == true ? $leadData['verifyEmail'] = true : null;



        $response = callAPI("https://crmmrkt.com/Crm/api/v1/leadregister", "POST", $leadData);
        //$response = callAPI("http://127.0.0.1:8000/api/v1/leadregister", "POST", $leadData);

        if ($checkEmail == true)
            return json_decode($response, true)['verifiedEmail'];
        else

            return json_decode($response, true);

    }
}


if (!function_exists("sendEmail")) {
    /**
     * @param $email_to
     * @param string $newsletter_slug
     * @param $template_data
     * @return bool
     */
    function sendEmail($email_to, $template_data, $newsletter_slug = "sticky-activation"): bool
    {

        $data = [
            'project_slug' => 'stickyposts',
            'newsletter_slug' => $newsletter_slug,
            'email_to' => $email_to,
            'language' => getCurrentLangIdiom(),
            'template_data' => $template_data
        ];


        return json_decode(callAPI("https://crmmrkt.com/Emailing/email/send", "POST", $data), true) == 'done';

    }
}


if (!function_exists("callAPI")) {
    function callAPI($call_uri, $method, $data)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $call_uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
            CURLOPT_POSTFIELDS => json_encode($data),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
if (!function_exists("getVisitorIpAddress")) {
    function getVisitorIpAddress()
    {

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } else {
            if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                return $_SERVER['REMOTE_ADDR'];
            }
        }
    }
}


if (!function_exists("getVisitorCountry")) {
    function getVisitorCountry()
    {
        try {
            require_once 'getCountryFromIP_helper.php';
            $country_code = getCountryFromIP(getVisitorIpAddress());
            switch ($country_code ?? 'EG') {
                case 'EG':
                    $ipdata['geoplugin_countryName'] = 'Egypt';
                    break;
                case 'AE':
                    $ipdata['geoplugin_countryName'] = 'United Arab Emirates';
                    break;
                case 'SA':
                    $ipdata['geoplugin_countryName'] = 'Saudi Arabia';
                    break;
                case 'US':
                    $ipdata['geoplugin_countryName'] = 'United States of America';
                    break;
                default:
                    $ipdata['geoplugin_countryName'] = 'Egypt';
                    break;
            }
            return $ipdata;

        } catch (Exception $e) {
            return array('geoplugin_countryName' => 'Egypt');
        }
    }
}


if (!function_exists('get_country_currency')) {
    /**
     * get_country_currency.
     *
     * 237 countries.
     * Two-letter country code (ISO 3166-1 alpha-2) => Three-letter currency code (ISO 4217).
     */
    function get_country_currency(string $countryCode): string
    {

        $countries = [
            'AF' => 'AFN',
            'AL' => 'ALL',
            'DZ' => 'DZD',
            'AS' => 'USD',
            'AD' => 'EUR',
            'AO' => 'AOA',
            'AI' => 'XCD',
            'AQ' => 'XCD',
            'AG' => 'XCD',
            'AR' => 'ARS',
            'AM' => 'AMD',
            'AW' => 'AWG',
            'AU' => 'AUD',
            'AT' => 'EUR',
            'AZ' => 'AZN',
            'BS' => 'BSD',
            'BH' => 'BHD',
            'BD' => 'BDT',
            'BB' => 'BBD',
            'BY' => 'BYR',
            'BE' => 'EUR',
            'BZ' => 'BZD',
            'BJ' => 'XOF',
            'BM' => 'BMD',
            'BT' => 'BTN',
            'BO' => 'BOB',
            'BA' => 'BAM',
            'BW' => 'BWP',
            'BV' => 'NOK',
            'BR' => 'BRL',
            'IO' => 'USD',
            'BN' => 'BND',
            'BG' => 'BGN',
            'BF' => 'XOF',
            'BI' => 'BIF',
            'KH' => 'KHR',
            'CM' => 'XAF',
            'CA' => 'CAD',
            'CV' => 'CVE',
            'KY' => 'KYD',
            'CF' => 'XAF',
            'TD' => 'XAF',
            'CL' => 'CLP',
            'CN' => 'CNY',
            'HK' => 'HKD',
            'CX' => 'AUD',
            'CC' => 'AUD',
            'CO' => 'COP',
            'KM' => 'KMF',
            'CG' => 'XAF',
            'CD' => 'CDF',
            'CK' => 'NZD',
            'CR' => 'CRC',
            'HR' => 'HRK',
            'CU' => 'CUP',
            'CY' => 'EUR',
            'CZ' => 'CZK',
            'DK' => 'DKK',
            'DJ' => 'DJF',
            'DM' => 'XCD',
            'DO' => 'DOP',
            'EC' => 'ECS',
            'EG' => 'EGP',
            'SV' => 'SVC',
            'GQ' => 'XAF',
            'ER' => 'ERN',
            'EE' => 'EUR',
            'ET' => 'ETB',
            'FK' => 'FKP',
            'FO' => 'DKK',
            'FJ' => 'FJD',
            'FI' => 'EUR',
            'FR' => 'EUR',
            'GF' => 'EUR',
            'TF' => 'EUR',
            'GA' => 'XAF',
            'GM' => 'GMD',
            'GE' => 'GEL',
            'DE' => 'EUR',
            'GH' => 'GHS',
            'GI' => 'GIP',
            'GR' => 'EUR',
            'GL' => 'DKK',
            'GD' => 'XCD',
            'GP' => 'EUR',
            'GU' => 'USD',
            'GT' => 'QTQ',
            'GG' => 'GGP',
            'GN' => 'GNF',
            'GW' => 'GWP',
            'GY' => 'GYD',
            'HT' => 'HTG',
            'HM' => 'AUD',
            'HN' => 'HNL',
            'HU' => 'HUF',
            'IS' => 'ISK',
            'IN' => 'INR',
            'ID' => 'IDR',
            'IR' => 'IRR',
            'IQ' => 'IQD',
            'IE' => 'EUR',
            'IM' => 'GBP',
            'IL' => 'ILS',
            'IT' => 'EUR',
            'JM' => 'JMD',
            'JP' => 'JPY',
            'JE' => 'GBP',
            'JO' => 'JOD',
            'KZ' => 'KZT',
            'KE' => 'KES',
            'KI' => 'AUD',
            'KP' => 'KPW',
            'KR' => 'KRW',
            'KW' => 'KWD',
            'KG' => 'KGS',
            'LA' => 'LAK',
            'LV' => 'EUR',
            'LB' => 'LBP',
            'LS' => 'LSL',
            'LR' => 'LRD',
            'LY' => 'LYD',
            'LI' => 'CHF',
            'LT' => 'EUR',
            'LU' => 'EUR',
            'MK' => 'MKD',
            'MG' => 'MGF',
            'MW' => 'MWK',
            'MY' => 'MYR',
            'MV' => 'MVR',
            'ML' => 'XOF',
            'MT' => 'EUR',
            'MH' => 'USD',
            'MQ' => 'EUR',
            'MR' => 'MRO',
            'MU' => 'MUR',
            'YT' => 'EUR',
            'MX' => 'MXN',
            'FM' => 'USD',
            'MD' => 'MDL',
            'MC' => 'EUR',
            'MN' => 'MNT',
            'ME' => 'EUR',
            'MS' => 'XCD',
            'MA' => 'MAD',
            'MZ' => 'MZN',
            'MM' => 'MMK',
            'NA' => 'NAD',
            'NR' => 'AUD',
            'NP' => 'NPR',
            'NL' => 'EUR',
            'AN' => 'ANG',
            'NC' => 'XPF',
            'NZ' => 'NZD',
            'NI' => 'NIO',
            'NE' => 'XOF',
            'NG' => 'NGN',
            'NU' => 'NZD',
            'NF' => 'AUD',
            'MP' => 'USD',
            'NO' => 'NOK',
            'OM' => 'OMR',
            'PK' => 'PKR',
            'PW' => 'USD',
            'PA' => 'PAB',
            'PG' => 'PGK',
            'PY' => 'PYG',
            'PE' => 'PEN',
            'PH' => 'PHP',
            'PN' => 'NZD',
            'PL' => 'PLN',
            'PT' => 'EUR',
            'PR' => 'USD',
            'QA' => 'QAR',
            'RE' => 'EUR',
            'RO' => 'RON',
            'RU' => 'RUB',
            'RW' => 'RWF',
            'SH' => 'SHP',
            'KN' => 'XCD',
            'LC' => 'XCD',
            'PM' => 'EUR',
            'VC' => 'XCD',
            'WS' => 'WST',
            'SM' => 'EUR',
            'ST' => 'STD',
            'SA' => 'SAR',
            'SN' => 'XOF',
            'RS' => 'RSD',
            'SC' => 'SCR',
            'SL' => 'SLL',
            'SG' => 'SGD',
            'SK' => 'EUR',
            'SI' => 'EUR',
            'SB' => 'SBD',
            'SO' => 'SOS',
            'ZA' => 'ZAR',
            'GS' => 'GBP',
            'SS' => 'SSP',
            'ES' => 'EUR',
            'LK' => 'LKR',
            'SD' => 'SDG',
            'SR' => 'SRD',
            'SJ' => 'NOK',
            'SZ' => 'SZL',
            'SE' => 'SEK',
            'CH' => 'CHF',
            'SY' => 'SYP',
            'TW' => 'TWD',
            'TJ' => 'TJS',
            'TZ' => 'TZS',
            'TH' => 'THB',
            'TG' => 'XOF',
            'TK' => 'NZD',
            'TO' => 'TOP',
            'TT' => 'TTD',
            'TN' => 'TND',
            'TR' => 'TRY',
            'TM' => 'TMT',
            'TC' => 'USD',
            'TV' => 'AUD',
            'UG' => 'UGX',
            'UA' => 'UAH',
            'AE' => 'AED',
            'GB' => 'GBP',
            'US' => 'USD',
            'UM' => 'USD',
            'UY' => 'UYU',
            'UZ' => 'UZS',
            'VU' => 'VUV',
            'VE' => 'VEF',
            'VN' => 'VND',
            'VI' => 'USD',
            'WF' => 'XPF',
            'EH' => 'MAD',
            'YE' => 'YER',
            'ZM' => 'ZMW',
            'ZW' => 'ZWD',
        ];

        return $countries[$countryCode];
    }
}


/*Settings*/
if (!function_exists("get_option")) {
    function get_option($key, $value = "")
    {
        $CI = &get_instance();


        $option = $CI->main_model->get("value", "sp_options", "name = '{$key}'");
        if (empty($option)) {
            $CI->db->insert("sp_options", array("name" => $key, "value" => $value));
            return $value;
        } else {
            return $option->value;
        }
    }
}

if (!function_exists("update_option")) {
    function update_option($key, $value)
    {
        $CI = &get_instance();
        $option = $CI->main_model->get("value", "sp_options", "name = '{$key}'");
        if (empty($option)) {
            $CI->db->insert("sp_options", array("name" => $key, "value" => $value));
        } else {
            $CI->db->update("sp_options", array("value" => $value), array("name" => $key));
        }
    }
}

/*Themes*/
if (!function_exists('get_theme_backend_url')) {
    function get_theme_backend_url($path = '')
    {
        return BASE . '' . THEME_PATH . 'backend/' . THEME_BACKEND . '/' . $path;
    }
}

if (!function_exists('get_theme_backend_path')) {
    function get_theme_backend_path($path = '', $full_path = true)
    {
        return ($full_path ? FCPATH : '') . '' . THEME_PATH . 'backend/' . THEME_BACKEND . '/' . $path;
    }
}

if (!function_exists('get_theme_frontend_url')) {
    function get_theme_frontend_url($path = '')
    {
        return BASE . '' . THEME_PATH . 'frontend/' . THEME_FRONTEND . '/' . $path;
    }
}

if (!function_exists('get_theme_frontend_path')) {
    function get_theme_frontend_path($path = '')
    {
        return FCPATH . '' . THEME_PATH . 'frontend/' . THEME_FRONTEND . '/' . $path;
    }
}

if (!function_exists('page')) {
    function page($controller, $folder = '', $default = '', $page = '', $data = [], $type = true)
    {

        $dir = $controller->load->get_package_paths();

        if (count($dir) == 3) {
            $dir = $dir[1];
        } else {
            $dir = $dir[0];
        }

        $file = $dir . 'views/' . $folder . '/' . $page . '.php';

        if ($page != '' && file_exists($file)) {
            $content = view($folder . '/' . $page, $data, $type);
        } else {
            $content = view($folder . '/' . $default, $data, $type);
        }

        return $content;
    }
}

if (!function_exists('views')) {
    function views($data = array())
    {
        $CI =& get_instance();

        if (isset($data['title'])) {
            $CI->template->title($data['title']);
        }

        $CI->template->build('../../../../' . THEME_PATH . 'backend/default/views/fragments/' . $data['fragment'],
            $data['views']);
    }
}

if (!function_exists('load_files')) {
    function load_files($type)
    {
        $CI =& get_instance();
        $configs = array();
        $folders = array(
            SYSTEM_PATH,
            PUBLIC_PATH,
            PLUGIN_PATH,
        );

        /*
         * GET CONFIGS
         */
        foreach ($folders as $folder) {
            $directories = glob($folder . '*');
            if (!empty($directories)) {
                foreach ($directories as $directory) {
                    $config = $directory . '/config.php';
                    if (file_exists($directory . '/config.php')) {
                        $config_tmp = include $config;
                        if (is_array($config_tmp)) {
                            $config_tmp['path'] = $directory . '/';
                            $config_tmp['url'] = BASE . $directory . '/';
                            $configs[] = $config_tmp;
                        }

                    } else {
                        $sub_directories = glob($directory . '*');
                        if (!empty($sub_directories)) {
                            foreach ($sub_directories as $sub_directory) {
                                $config = $sub_directory . '/config.php';
                                if (file_exists($config)) {
                                    $config_tmp = include $config;
                                    if (is_array($config_tmp)) {
                                        $config_tmp['path'] = $sub_directory . '/';
                                        $config_tmp['url'] = BASE . $sub_directory . '/';
                                        $configs[] = $config_tmp;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $have_permission = false;
        $module_paths = get_module_paths();
        $package_permission_data = array();
        $general = "";
        if (!empty($module_paths)) {
            foreach ($module_paths as $module_path) {

                $models = $module_path . '/models/*.php';
                $models = glob($models);

                if (empty($models)) {
                    continue;
                }

                foreach ($models as $model) {
                    //Get Directory
                    $dir = str_replace(DIR_ROOT, "", $model);
                    $dir = explode("/", $dir);
                    $dir = $dir[0] . "/";

                    //Get file name
                    $file_tmp = str_replace(".php", "", $model);
                    $file_tmp = explode("/", $file_tmp);
                    $file_name = end($file_tmp);

                    //Get folder name
                    $folder_name = str_replace("_model", "", $file_name);

                    $model_content = file_get_contents($model);
                    if (preg_match("/block_permissions/i", $model_content)) {
                        $have_permission[] = $folder_name;
                    }
                }
            }
        }

        /*
         * LOAD FILES ON CONFIGS
         */
        $files = [];


        if (!empty($configs)) {
            foreach ($configs as $key => $config) {
                if (isset($config[$type]) && !empty($config[$type])) {
                    foreach ($config[$type] as $file) {
                        if (isset($config['id'])) {
                            if ((in_array($config['id'], $have_permission,
                                        true) && _p($config['id'] . '_enable')) || !in_array($config['id'],
                                    $have_permission, true) || $config['id'] == "file_manager") {
                                if ($type == 'css') {
                                    echo "<link rel='stylesheet' type='text/css' href='" . $config["url"] . $file . "'>\n";
                                } else {
                                    $files[] = $config["path"] . $file;
                                }
                            }
                        } else {
                            if ($type == 'css') {
                                echo "<link rel='stylesheet' type='text/css' href='" . $config["url"] . $file . "'>\n";
                            } else {
                                $files[] = $config["path"] . $file;
                            }
                        }

                    }
                }
            }
        }

        if ($type == 'js') {
            return $files;
        }
    }
}
