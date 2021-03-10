<?php

use \Illuminate\Database\Eloquent\Model as Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class User extends Model
{
    protected $cacheFor = 180;
    protected $table = 'sp_users';
    protected $fillable = ['ids', 'pid', 'role', 'fullname', 'email', 'password', 'package', 'expiration_date', 'timezone', 'login_type', 'data', 'status', 'changed', 'created', 'notification_token', 'register_by', 'admin', 'expiration_date_autoactivity', 'permission', 'settings', 'activation_key', 'reset_key', 'history_ip', 'invited_by', 'sticky_last_login', 'contract_id', 'frequency', 'package_name', 'phone', 'leads', 'company', 'country', 'employee_num', 'industry', 'job_title', 'category', 'extra_package', 'trailer', 'analyzer_id', 'late_extra', 'extra_contract_id', 'language', 'free', 'promo_code', 'promo_code_autoactivity', 'payment_state', 'phone_auto', 'set_lang', 'register_from', 'selected_package', 'account_status', 'source', 'assigned_employee', 'assigned_b2b_id', 'assigned_b2b_source', 'activity_source', 'task_source', 'platform_source', 'landing_page', 'landing_category', 'affiliate_status', 'affiliate_suspended', 'affiliate_short_link', 'affiliate_last_login', 'affiliate_alarm_suspend', 'affiliate_10_users_sent', 'affiliate_50_users_sent', 'affiliate_min_with_draw_sent', 'account_type', 'affiliate_created_at', 'enterprise_account', 'enterprise_package', 'enterprise_data', 'register_source', 'updated_at', 'created_at',];

    public function signup(array $data)
    {
        validate("min_length", __("Fullname"), $data['fullname'], 3);
        validate("min_length", 'lastname', $data['lastname'], 3);
        validate("null", __("Email is required"), $data['email']);
        validate("email", "", $data['email']);
        if (!empty($this->newQuery()->where('email', $data['email'])->first()))
            ms(["status" => "error", "message" => __("This email already exists")]);
        validate("min_length", "Password", $data['password'], 5);
        validate("null", __("You must agree to our terms of services"), $data['terms']);

        $this->fill($data);
        $this->ids = ids();
        $this->role = 0;
        $this->status = 0;
        $this->password = password_hash($data['password'], PASSWORD_BCRYPT);


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crmmrkt.com/Crm/api/v1/leadregister',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_HTTPHEADER=>'Content-Type: application/json',
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                json_encode(
            [
                'email' => $this->email,
                'name' => $this->fullname,
                'phone' => $this->phone,
                'lead_activity' => 'scheduling-service',
                'language' => getCurrentLangIdiom(),
                "mrkt_data" => $data['mrkt_data']
            ]
                )]
        ));
        $response = curl_exec($curl);
        curl_close($curl);


        $this->save();
        ms([
            "status"  => "success",
            "message" => __('Thank you')
        ]);



    }


}
