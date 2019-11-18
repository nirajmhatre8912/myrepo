<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Active_Sessions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		log_message('debug', 'Customer_model constructer got called..');
		$this->load->model('Customers_model');
		log_message('debug', 'Active_Sessions constructer got called..');
	}

	public function index()
	{
		log_message('debug', 'index method active session controller');
		$this->load->helper('url');
		$config_menu=$this->session->userdata('config_menu');
		$data['pagelist']=$config_menu;
		$this->load->view('admin/Active_Sessions',$data);
		log_message('debug', 'navigation to active session view');
	}

	public function ajax_list()
	{
		$list = $this->Customers_model->get_datatables();
		log_message('debug', 'fetched data from get_datatables model');

		$data = array();
		log_message('debug', '$_POST[\'start\'] value = '.$_POST['start']);		
		$no = $_POST['start'];
		log_message('debug','ajax_list for loop started...');
		log_message('debug','for loop started to get active sessions...');
		log_message('debug','initial count ='.$no);
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->user;
			$row[] = $customers->tid;
			$row[] = $customers->ip;
			$row[] = $customers->sessionID;
			$row[] = $customers->timestamp;
			$row[] = $customers->out_ts;
			$row[] = $customers->role;
			$row[] = $customers->status;
			$data[] = $row;
		}
		log_message('debug','last count='.$no);

		log_message('debug',' $_POST[\'draw\']='. $_POST['draw']);
		log_message('debug',' recordsTotal='. $this->Customers_model->count_all());
		log_message('debug',' recordsFiltered='.$this->Customers_model->count_filtered());
		//log_message('debug',' data='.$data);
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Customers_model->count_all(),
						"recordsFiltered" => $this->Customers_model->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}

?>