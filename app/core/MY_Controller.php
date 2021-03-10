<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/* load the MX_Router class */
require APPPATH."third_party/MX/Controller.php";

use duncan3dc\Laravel\BladeInstance;

class MY_Controller extends MX_Controller
{
    private $_blade;

    function __construct()
    {
        parent::__construct();
        $this->_hmvc_fixes();
        $this->_blade = new BladeInstance(FCPATH.'inc/themes/frontend/pure/views',
            APPPATH."cache/views");
    }

    function _hmvc_fixes()
    {
        //fix callback form_validation
        //https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

    public function blade(string $view, array $data=[])
    {
        echo (string) $this->_blade-> render($view,$data);
        return true;
    }
    public function bladeWithShare(string $view, array $data , string $shareKey , $shareValue)
    {
        echo (string) $this->_blade->share($shareKey,$shareValue)->render($view,$data);
        return true;
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
