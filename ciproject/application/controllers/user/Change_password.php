<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Change_password extends CI_Controller {
function __construct(){
parent::__construct();
log_message('debug','calling constructor page Change_password');
log_message('debug','validating session page Change_password');
if(! $this->session->userdata('uid')){
log_message('debug','invalidating session page Change_password');
redirect('user/login');
}
}

public function index(){
	log_message('debug','index page Change_password');
$this->form_validation->set_rules('currentpassword','Current Password','required|min_length[6]');	
$this->form_validation->set_rules('password','Password','required|min_length[6]');
$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
if($this->form_validation->run()){
$cpassword=$this->input->post('currentpassword');
$newpassword=$this->input->post('password');
$userid = $this->session->userdata('uid');
log_message('debug','loading Change_password model...');	
$this->load->model('User_Changepassword_Model');
log_message('debug','loading User_Changepassword_Model getcurrentpassword()...');
$cpass=$this->User_Changepassword_Model->getcurrentpassword($userid);
echo $dbpass=$cpass->userPassword;

 if($dbpass==$cpassword){
if($this->User_Changepassword_Model->updatepassword($userid,$newpassword))
{
	log_message('debug','password change successfully User_Changepassword_Model ');
$this->session->set_flashdata('success', 'Password chnaged successfully');
	redirect('user/change_password');
}

} else {
	log_message('debug','Wrong password User_Changepassword_Model ');

	$this->session->set_flashdata('error', 'Current password is wrong. Error!!');
	redirect('user/change_password');	
} 
} else {

/* new code dynamic page */
log_message('debug','loading Configarable_Login model...');
		$this->load->model('Configarable_Login');
		
		$role="USER";
		log_message('debug','calling countlastsevendays() method for role='.$role);
		$result=$this->Configarable_Login->countlastsevendays($role);
		$var_result=print_r($result,TRUE);
		log_message('debug','loading configurable menu with result='.$var_result);
/* new code dynamic page */
log_message('debug','calling view user/change_password');
$this->load->view('user/change_password', ['pagelist'=>$result]);
}
}




}