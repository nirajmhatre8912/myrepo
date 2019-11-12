<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends CI_Controller {
function __construct(){
parent::__construct();
log_message('debug','calling constructor page Dashboard');
log_message('debug','validating session page Dashboard');
if(! $this->session->userdata('uid')){
	//log_message('error', 'uid not found session terminate...'); 
	log_message('debug','invalidating session page Dashboard');
	redirect('user/login');
	}
}
public function index(){
	log_message('debug','index page Dashboard');
	$userid = $this->session->userdata('uid');
	log_message('debug','loading User_Profile_Model model...');
	$this->load->model('User_Profile_Model');
	$profiledetails=$this->User_Profile_Model->getprofile($userid);
	//log_message('info','loading user data...'); 

/* new code dynamic page */
		log_message('debug','loading Configarable_Login model...');
		$this->load->model('Configarable_Login');
		$role="USER";
		log_message('debug','calling countlastsevendays() method for role='.$role);
		$result=$this->Configarable_Login->countlastsevendays($role);
		$var_result=print_r($result,TRUE);
		log_message('debug','loading configurable menu with result='.$var_result);
		//log_message('info', 'loading user Configarable sidemenu...'); 

/* new code dynamic page */

log_message('debug','calling view user/dashboard');
	$this->load->view('user/dashboard',['profile'=>$profiledetails, 'pagelist'=>$result]);

}

}
