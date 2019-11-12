<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Configurable_Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		log_message('debug','calling constructor page Configurable_Login');
		log_message('debug','validating session page Configurable_Login');
		if(! $this->session->userdata('uid')){
		log_message('debug','invalidating session page Configurable_Login');
		redirect('user/login');
		}
		}
	
	function index()
	{
		log_message('debug','loading Configarable_Login model...');
		$this->load->model('Configarable_Login');
		$role="USER";
		log_message('debug','calling countlastsevendays() method for role='.$role);
		$result=$this->Configarable_Login->countlastsevendays($role);
		log_message('debug','loading configurable menu with result='.$result);
		$this->load->view('sidebarconfigarable',['pagelist'=>$result]);

	}
}


?>