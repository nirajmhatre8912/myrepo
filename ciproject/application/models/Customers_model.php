<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers_model extends CI_Model {

	var $table = 'active_session';
	//var $column_order = array(null, 'FirstName','LastName','phone','address','city','country'); //set column field database for datatable orderable
	
	var $column_order = array(null,'user','tid','ip','sessionID','timestamp','out_ts','role','status');
	//var $column_search = array('FirstName','LastName','phone','address','city','country'); //set column field database for datatable searchable 
	var $column_search = array('active_session_id','user','tid','ip','sessionID','timestamp','out_ts','role','status');
	
	var $order = array('active_session_id' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		log_message('debug','_get_datatables_query() got called form Customers_model');  
		$this->db->from($this->table);

		$i = 0;
		
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		log_message('debug','get_datatables() got called form Customers_model');  
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		log_message('debug','count_filtered() got called form Customers_model');  
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		log_message('debug','count_all() got called form Customers_model');  
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}


?>