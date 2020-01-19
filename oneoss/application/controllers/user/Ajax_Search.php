<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_Search extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('authors_model');
        $this->load->library("pagination");
    }

    public function index() {
		
		$this->load->view('public/User/sessionSearch');

	}
	
	public function audit()
	{
		$this->load->view('public/User/auditSearch');
	}
	
	
	function fetch_session()
	{
			  $output = '';
			  $query = '';
			  $this->load->model('ajaxsearch_model');
			  if($this->input->post('query'))
			  {
			   $query = $this->input->post('query');
			  }
			  $data = $this->ajaxsearch_model->fetch_data($query);
			  $output .= '
			  <div class="table-responsive table-sm">
				 <table class="table table-bordered table-striped">
				  <tr>
				   <th>session id</th>
				   <th>user</th>
				   <th>tid</th>
				   <th>ip</th>
				   <th>timestamp</th>
				   <th>out_ts</th>
				   <th>role</th>
				   <th>status</th>
				  </tr>
			  ';
			  if($data->num_rows() > 0)
			  {
			   foreach($data->result() as $row)
			   {
				$output .= '
				  <tr>
				   <td>'.$row->active_session_id.'</td>
				   <td>'.$row->user.'</td>
				   <td>'.$row->tid.'</td>
				   <td>'.$row->ip.'</td>
				   <td>'.$row->timestamp.'</td>
				   <td>'.$row->out_ts.'</td>
				   <td>'.$row->role.'</td>
				   <td>'.$row->status.'</td>
				  </tr>
				';
			   }
			  }
			  else
			  {
			   $output .= '<tr>
				   <td colspan="8">No Data Found</td>
				  </tr>';
			  }
			  $output .= '</table>';
			  echo $output;
	}	
	
	
	function fetch_audit()
	{
			  $output = '';
			  $query = '';
			  $this->load->model('ajaxsearch_model');
			  if($this->input->post('query'))
			  {
			   $query = $this->input->post('query');
			  }


			  $data = $this->ajaxsearch_model->fetch_audit($query);
			  $output .= '
			  <div class="table-sm">
				 <table class="table table-bordered table-striped">
				  <tr>
				   <th>audit id</th>
				   <th>user</th>
				   <th>page name</th>
				   <th>hostname</th>
				   <th>hostip</th>
				   <th>session id</th>
				   <th>action</th>
				   <th>event desc</th>
				   <th>timestamp</th>
				  </tr>
			  ';
			  if($data->num_rows() > 0)
			  {
			   foreach($data->result() as $row)
			   {
				$output .= '
				  <tr>
				   <td>'.$row->audit_id.'</td>
				   <td>'.$row->username.'</td>
				   <td>'.$row->page_name.'</td>
				   <td>'.$row->hostname.'</td>
				   <td>'.$row->hostip.'</td>
				   <td>'.$row->session_id.'</td>
				   <td>'.$row->action.'</td>
				   <td>'.$row->event_desc.'</td>
				   <td>'.$row->ts.'</td>			
				  </tr>
				';
			   }
			  }
			  else
			  {
			   $output .= '<tr>
				   <td colspan="9">No Data Found</td>
				  </tr>';
			  }
			  $output .= '</table>';
			  echo $output;
	}	

	
}