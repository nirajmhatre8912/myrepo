<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_Changepassword_Model extends CI_Model {

public function getcurrentpassword($userid){
    log_message('debug','getcurrentpassword() got called form User_Changepassword_Model');
    $query=$this->db->where(['id'=>$userid])
                    ->get('tblusers');
           if($query->num_rows() > 0)
           {
           	return $query->row();
           }
}

public function updatepassword($userid,$newpassword){
    log_message('debug','updatepassword() got called form User_Changepassword_Model');
$data=array('userPassword' =>$newpassword );
return $this->db->where(['id'=>$userid])
                ->update('tblusers',$data);

	}

}
