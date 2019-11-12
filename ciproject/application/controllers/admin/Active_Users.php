<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Active_Users extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		log_message('debug','Active user constructer called..');
			if(! $this->session->userdata('adid'))
			{
			log_message('debug','Active_Users sessions not found...');
			redirect('admin/login');
			}
	}
	


	function index()
	{
		log_message('debug','Active_Users index method called...');
		log_message('debug','Active_Sessions Modem loaded..');
		$this->load->model('Active_Session');
		log_message('debug','calling get_user_active()');
		$result=$this->Active_Session->get_user_active();

				/* New code */
	    					log_message('debug','loading configurable model');
							$this->load->model('Configarable_Login');
							$role="ADMIN";
							log_message('debug','calling configurable login for role admin');	
							$result1=$this->Configarable_Login->countlastsevendays($role);
							$var_result=print_r($result1,TRUE);
							log_message('debug','result='.$var_result);							
							
							
				/* New code */
		log_message('debug','calling admin/activeusers');
		$this->load->view('admin/activeusers',['userdetails'=>$result,'pagelist'=>$result1]);
	}

} 
?>