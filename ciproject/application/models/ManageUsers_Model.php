<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
Class ManageUsers_Model extends CI_Model{
	public function getusersdetails(){
		log_message('debug','getusersdetails() got called form ManageUsers_Model');  
		$query=$this->db->select('firstName,lastName,emailId,regDate,id')
		              ->get('tblusers');
		        return $query->result();      
	}
//Getting particular user deatials on the basis of id	
 public function getuserdetail($uid){
	log_message('debug','getuserdetail() got called form ManageUsers_Model'); 
 	$ret=$this->db->select('firstName,lastName,emailId,regDate,id,mobileNumber,lastUpdationDate')
 	              ->where('id',$uid)
 	              ->get('tblusers');
 	                return $ret->row();
 }

 // Function for use deletion
 public function deleteuser($uid){
	log_message('debug','deleteuser() got called form ManageUsers_Model'); 
$sql_query=$this->db->where('id', $uid)
                ->delete('tblusers');
            }



			public function store_image_name($uid,$image_name)
			{
					log_message('debug','store_image_name() got called form ManageUsers_Model'); 
							$arraySession = array('emp_ref_id' => $uid ,
													'image_name' => $image_name
													 );
							$sql_query=$this->db->insert('image_store',$arraySession);
							
							
							if ($sql_query)
							{
								log_message('debug','insert success');
								$this->session->set_flashdata('success','Image name stored in db...');
							}
							else
							{
								log_message('debug','insert failed');
								$this->session->set_flashdata('error','Image name failed to store in db...');	
							}
				
			}

}