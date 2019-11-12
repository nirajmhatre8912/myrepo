<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller {


public function index(){
	log_message('debug','index method called... Login ');	
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('password','Password','required');
log_message('debug','validation for User login completed...');
if($this->form_validation->run()){
	log_message('debug','Login form submited...');
$emailid=$this->input->post('emailid');
$password=$this->input->post('password');
$status=1;	
log_message('debug','User_Login_Model model loaded..');
$this->load->model('User_Login_Model');
log_message('debug','calling validatelogin() ');
$validate=$this->User_Login_Model->validatelogin($emailid,$password,$status);
log_message('debug','validation result='.$validate);
if($validate)
{
	log_message('debug','validation success');
		$REMOTE=$_SERVER['REMOTE_ADDR'];
		$session=session_id();	
		$Role=$this->User_Login_Model->get_role($emailid);
		$Role=$Role->role_name;
		$status = 'A';
		log_message('debug','loading model Active_Session');
		$this->load->model('Active_Session');
		log_message('debug','calling insert_active_session()');
		$this->Active_Session->insert_active_session($emailid,$validate,$REMOTE,$session,$Role,$status);
		$this->session->set_userdata('uid',$validate);


		$_SESSION['session_id'] = $session;
		$_SESSION['email'] =  $emailid;
		log_message('debug','loading view user/dashboard');
		return redirect('user/dashboard');
} else{
	log_message('debug','validation Error');
$this->session->set_flashdata('error', 'Invalid details. Please try again with valid details');
redirect('user/login');

}

} else {

log_message('debug', 'Some variable did not contain a value.'); 	
$this->load->view('user/login');
}	
}

//function for logout
public function logout(){	
	log_message('debug','logout() called');	
	$sessionUser=$_SESSION['email'];
	$session_id=$_SESSION['session_id'];
	log_message('debug','loading model Active_Session');	
	$this->load->model('Active_Session');
	log_message('debug','calling remove_active_session()');
	$this->Active_Session->remove_active_session($session_id,$sessionUser);

	unset(
        $_SESSION['email'],
        $_SESSION['session_id']
		);

		$this->session->unset_userdata('sid');
		$this->session->sess_destroy();

		log_message('debug','loading user/login');
	return redirect('user/login');
}

}