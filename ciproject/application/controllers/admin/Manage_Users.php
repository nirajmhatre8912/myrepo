<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Users extends CI_Controller {
function __construct(){
parent::__construct();
log_message('debug','calling constructor page Manage_Users');
log_message('debug','validating session page Manage_Users');
if(! $this->session->userdata('adid')){
log_message('debug','invalidating session page Manage_Users');
redirect('admin/login');
}
}

public function index(){
log_message('debug','index page Manage_Users');
log_message('debug','loading model ManageUsers_Model');
$this->load->model('ManageUsers_Model');

$user=$this->ManageUsers_Model->getusersdetails();
log_message('debug','calling getusersdetails()');
					/* New code */
					log_message('debug','loading Configarable_Login model...');
							$this->load->model('Configarable_Login');
							$role="ADMIN";
							log_message('debug','calling countlastsevendays() method for role='.$role);
							$result=$this->Configarable_Login->countlastsevendays($role);
							$var_result=print_r($result,TRUE);
							log_message('debug','loading configurable menu with result='.$var_result);							
							
							
					/* New code */
					log_message('debug','calling view admin/manage_users');
$this->load->view('admin/manage_users',['userdetails'=>$user,'pagelist'=>$result]);
}

// For particular Record
public function getuserdetail($uid)
{


					/* New code */
					log_message('debug','loading Configarable_Login model...');
							$this->load->model('Configarable_Login');
							$role="ADMIN";
							log_message('debug','calling countlastsevendays() method for role='.$role);
							$result=$this->Configarable_Login->countlastsevendays($role);
							log_message('debug','loading configurable menu with result='.$result);
																					
					/* New code */
					log_message('debug','loading ManageUsers_Model model...');
$this->load->model('ManageUsers_Model');
log_message('debug','calling getuserdetail()');
$udetail=$this->ManageUsers_Model->getuserdetail($uid);
log_message('debug','calling view admin/getuserdetails');
$this->load->view('admin/getuserdetails',['ud'=>$udetail,'pagelist'=>$result]);
}

public function deleteuser($uid)
{
	log_message('debug','loading ManageUsers_Model model...');
$this->load->model('ManageUsers_Model');
$this->ManageUsers_Model->deleteuser($uid);
log_message('debug','calling deleteuser()');
$this->session->set_flashdata('success', 'User data deleted');
redirect('admin/manage_users');
}


}