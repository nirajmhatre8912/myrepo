<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_Right extends MY_Controller
{

    public function __construct()
	{
		parent::__construct();
        log_message('debug', 'User_Right constructer got called..');
        $session_uid=$this->session->userdata('uid');

            if (!$this->is_logged_in())
            {
                // User is logged in.  Do something.
                $this->session->set_flashdata('error','session has been expired...');
                //$this->load->view('public\Auth\login');
                $message= "Invalid Session";
                $status_code = 501;
                show_error($message, $status_code, $heading = 'An Error Was Encountered');
            }
	}


    public function index()
    {


        $this->load->view("public\User\userRights");
        return;

    }




}
?>