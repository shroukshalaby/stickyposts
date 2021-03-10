<?php
trait AjaxTrait
{

    public function ajax_login()
    {

        $email = post("email");
        $password = post("password");
        $remember = post("remember");
        $this->user_manager_model->login($email, $password, $remember);
    }
    public function ajax_register()
    {
        ci::$APP->load->model('Stack/User', 'StackUser');
        $this->StackUser->signup($this->input->post());
    }
    public function ajax_signup()
    {
        $fullname = post("fullname");
        $email = post("email");
        $password = post("password");
        $timezone = post("timezone");
        $confirm_password = post("confirm_password");
        $terms = post("terms");

        $this->user_manager_model->signup($fullname, $email, $password, $confirm_password, $timezone, $terms);
    }
    public function ajax_forgot_password()
    {
        $email = post("email");
        $this->user_manager_model->forgot_password($email);
    }
    public function ajax_recovery_password()
    {
        $password = post("password");
        $confirm_password = post("confirm_password");
        $recovery_key = post("recovery_key");
        $this->user_manager_model->recovery_password($recovery_key, $password, $confirm_password);
    }

}