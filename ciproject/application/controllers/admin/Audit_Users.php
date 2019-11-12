<?php
Class Audit_Users extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	
		log_message('debug','calling constructor page Audit_Users');
		log_message('debug','validating session page Audit_Users');
	
		if(! $this->session->userdata('adid'))
		{
					log_message('debug','invalidating session page Audit_Users');
					redirect('admin/login');
		}

	}


		function index()
		{
			log_message('debug','index page Audit_Users');
			$this->load->model('Audit_Trail');
		
			log_message('debug','loading Audit_Trail model...');
			$result=$this->Audit_Trail->getAuditTrail();
			log_message('debug','loading getAuditTrail()...');
		
			/* New code */
							log_message('debug','loading Configarable_Login model...');
							$this->load->model('Configarable_Login');
							$role="ADMIN";
							log_message('debug','calling countlastsevendays() method for role='.$role);
							$result1=$this->Configarable_Login->countlastsevendays($role);
							$var_result=print_r($result1,TRUE);
							log_message('debug','loading configurable menu with result='.$var_result);							
							
							
			/* New code */
			log_message('debug','calling view admin/auditusers');
			$this->load->view('admin/auditusers',['userdetails'=>$result,'pagelist'=>$result1]);


		}

} 
?>