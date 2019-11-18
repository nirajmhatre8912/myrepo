<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends CI_Controller {
function __construct(){
parent::__construct();
log_message('debug','calling constructor page Dashboard');
log_message('debug','validating session page Dashboard');

if(! $this->session->userdata('adid')){
log_message('debug','invalidating session page Dashboard');
redirect('admin/login');
}

}
	
public function index(){

		log_message('debug','index page Dashboard');
				$this->load->model('Admin_Dashboard_Model');
					log_message('debug','loading Admin_Dashboard_Model model...');			
				$totalcount=$this->Admin_Dashboard_Model->totalcount();
				log_message('debug','Admin_Dashboard_Model totalcount='.$totalcount);
				$sevendayscount=$this->Admin_Dashboard_Model->countlastsevendays();
				log_message('debug','Admin_Dashboard_Model sevendayscount='.$sevendayscount);
				$thirtydayscount=$this->Admin_Dashboard_Model->countthirtydays();
				log_message('debug','Admin_Dashboard_Model thirtydayscount='.$thirtydayscount);
				$total_active_sessions=$this->Admin_Dashboard_Model->total_active_sessions();
				log_message('debug','Admin_Dashboard_Model total_active_sessions='.$total_active_sessions);
				
				$total_dups=$this->Admin_Dashboard_Model->total_duplicates_username();
				$total_dups_number=array_search("total",$total_dups);
				log_message('debug','Admin_Dashboard_Model total_dups='.$total_dups_number);

				//var_dump($totalcount,$sevendayscount,$thirtydayscount);
					/* New code */
						log_message('debug','loading Configarable_Login model...');
						$this->load->model('Configarable_Login');
						$role="ADMIN";
						log_message('debug','calling countlastsevendays() method for role='.$role);
						$result=$this->Configarable_Login->countlastsevendays($role);
						$this->session->set_userdata('config_menu',$result);											
							
							
					/* New code */
		log_message('debug','calling view admin/dashboard');
$this->load->view('admin/dashboard',['tcount'=>$totalcount,'tsevencount'=>$sevendayscount,'tthirycount'=>$thirtydayscount,'pagelist'=>$result,'total_dups'=>$total_dups,'total_active_sessions'=>$total_active_sessions,'total_dups_number'=>$total_dups_number]);	

}

}