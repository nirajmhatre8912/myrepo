<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller {


public function index(){
log_message('debug','index method Login');
log_message('debug','checking request type form or redirect');


	     $this->form_validation->set_rules('username','Username','required');
	     $this->form_validation->set_rules('password','Password','required');

			//$a=$this->form_validation->run();
			//log_message('debug','form ='.$a);

		if($this->form_validation->run())
		{
		$username=$this->input->post('username');
		$password=$this->input->post('password');	

		log_message('debug','form post method');
		log_message('debug','loading model Admin_Login_Model');

			$this->load->model('Admin_Login_Model');
			log_message('debug','calling validatelogin()');
				$validate=$this->Admin_Login_Model->validatelogin($username,$password);
					if($validate)
					{
						log_message('debug','validate login successfully.... loading admin/dashboard');
						$this->session->set_userdata('adid',$validate);
						return redirect('admin/Dashboard');
						//return redirect('Test/testDemo');
						//$this->load->view('admin/Dashboard');
					} else{
						log_message('debug','invalidate login.... loading admin/login');
						$this->session->set_flashdata('error', 'Invalid details. Please try again with valid details');
						redirect('admin/login');

					}

		} else {
			log_message('debug','admin login view loaded...');
			$this->load->view('admin/login');
			
		}	
}

//function for logout
public function logout(){
	log_message('debug','logout() called form login controller.... loading admin/login');	
$this->session->unset_userdata('adid');
$this->session->sess_destroy();
return redirect('admin/login');
}

}