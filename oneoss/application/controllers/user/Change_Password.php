<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Change_password extends MY_Controller {

	function __construct()
	{
	    parent::__construct();
		log_message('debug','calling constructor page Change_password');
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
			
			
				/****** Accessing user session *****/

		
				$user_group = $this->session->userdata('user_group');
				log_message('debug','calling user access block = '.$user_group);
				
				/****  checking access type  ****/

				$this->load->library('permission');			
				//var_dump($this->permission->get_user_permissions($user_group),TRUE);
				if (!$this->permissions = $this->permission->get_user_permissions($user_group))
				{
					show_error('You do not have any permissions!');
								
				}
				
				



	}

public function index()
{
	
	log_message('debug','index page Change_password');
		$this->form_validation->set_rules('currentpassword','Current Password','required|min_length[6]');	
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
	
		if($this->form_validation->run()){

				/* Validatin write access */			
				$access_type = 'WRITE';
				
				if (!in_array($access_type, $this->permissions))
				{
					show_error('You do not have ' .$access_type.' access to this page!');
				}
				

		$cpassword=$this->input->post('currentpassword');
		$newpassword=$this->input->post('password');
		$uid = $this->session->userdata('uid');
		log_message('debug','loading model User_Login_Model'.$uid);
		$this->load->model('User_Login_Model');
		log_message('debug','calling getcurrentpassword() from User_Login_Model');
		$cpass=$this->User_Login_Model->getcurrentpassword($uid);
		$dbpass=$cpass->userPassword;
		log_message('debug','got password from User_Login_Model = '.$dbpass);
		log_message('debug','comparing both user password = '.print_r($cpass,TRUE));

		/* if($dbpass==$cpassword) */
				if(password_verify($cpassword,$dbpass)){
						if($this->User_Login_Model->updatepassword($uid,$newpassword))
						{
							log_message('debug','old password match changing new password successfully');
							$this->session->set_flashdata('success', 'Password changed successfully');
							$this->session->set_flashdata('error', '');
							$this->load->view('public/User/change_password');
						}else{
							log_message('debug','password update failed...');
						}

				} else {

				$this->session->set_flashdata('success', '');	
				$this->session->set_flashdata('error', 'Current password is wrong. Error!!');
				log_message('debug','wrong password');
				$this->load->view('public/User/change_password');	
				} 
		} else {
				
			
			log_message('debug','public/User/change_password');	
			$this->load->view('public/User/change_password');
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