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

}