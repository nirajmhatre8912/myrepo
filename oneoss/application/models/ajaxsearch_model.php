<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Class ajaxsearch_model extends CI_Model
{


		function fetch_data($query)
		 {
		  $this->db->select("*");
		  $this->db->from("active_session");
		  if($query != '')
		  {
		   $this->db->like('user', $query);
		   $this->db->or_like('ip', $query);
		   $this->db->or_like('sessionID', $query);
		   $this->db->or_like('timestamp', $query);
		   $this->db->or_like('role', $query);
		   $this->db->or_like('status',$query);
		  }else{
			  $this->db->limit(25);
		  }
		  
		  $this->db->order_by('active_session_id', 'DESC');
		  return $this->db->get();
		 }
		 
		 
		 
		 function fetch_audit($query)
		 {
		  $this->db->select("*");
		  $this->db->from("audit_table");
		  if($query != '')
		  {
		   $this->db->like('username', $query);
		   $this->db->or_like('hostname', $query);
		   $this->db->or_like('hostip', $query);
		   $this->db->or_like('session_id', $query);
		   $this->db->or_like('action', $query);
		   $this->db->or_like('ts',$query);
		   $this->db->or_like('page_name',$query);
		  }else{
			  $this->db->limit(25);
		  }
		  
		  $this->db->order_by('audit_id', 'DESC');
		  return $this->db->get();
		 }


}
?>