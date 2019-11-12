<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Change_password extends CI_Controller {

	function __construct()
	{
	parent::__construct();
		log_message('debug','calling constructor page Change_password');
		log_message('debug','validating session page Change_password');
		if(! $this->session->userdata('adid')){
		log_message('debug','invalidating session page Change_password');
		redirect('admin/login');	
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
		$adminid = $this->session->userdata('adid');
		log_message('debug','loading model Admin_Changepassword_Model');
		$this->load->model('Admin_Changepassword_Model');
		log_message('debug','calling getcurrentpassword() from Admin_Changepassword_Model');
		$cpass=$this->Admin_Changepassword_Model->getcurrentpassword($adminid);
		$dbpass=$cpass->password;
		log_message('debug','got password from Admin_Changepassword_Model');
		log_message('debug','comparing both password');
				if($dbpass==$cpassword){
						if($this->Admin_Changepassword_Model->updatepassword($adminid,$newpassword))
						{
							log_message('debug','old password match changing new password successfully');
							$this->session->set_flashdata('success', 'Password chnaged successfully');
							redirect('admin/change_password');
						}else{
							log_message('debug','password update failed...');
						}

				} else {
				$this->session->set_flashdata('error', 'Current password is wrong. Error!!');
				log_message('debug','wrong password');
				redirect('admin/change_password');	
				} 
		} else {
		log_message('debug','loading view admin/change_password');	
				/* New code */
						log_message('debug','loading Configarable_Login model...');
						$this->load->model('Configarable_Login');
						$role="ADMIN";
						log_message('debug','calling countlastsevendays() method for role='.$role);
						$result1=$this->Configarable_Login->countlastsevendays($role);
						$var_result=print_r($result1,TRUE);
						log_message('debug','loading configurable menu with result='.$var_result);							
						
				
				/* New code */

			$this->load->view('admin/change_password',['pagelist'=>$result1]);
		}
}


public function updatebyadminprofile(){

	log_message('debug','updatebyadminprofile() got called..');

		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last  Name','required|alpha');
		$this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');

		if($this->form_validation->run())
		{
				$fname=$this->input->post('firstname');
				$lname=$this->input->post('lastname');
				$mnumber=$this->input->post('mobilenumber');
				$userid = $this->input->post('uid');
		log_message('debug','loading modem User_Profile_Model');
		$this->load->model('User_Profile_Model');
		$this->User_Profile_Model->update_profile($fname,$lname,$mnumber,$userid);
		$this->session->set_flashdata('success','Profile updated successfull.');
		log_message('debug','update_profile got called successfully...');
		return redirect("admin/Manage_Users"); 

		} else {
	
			$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
			redirect("admin/Manage_Users");
		}

}

}