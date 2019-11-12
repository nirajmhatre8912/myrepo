<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin_Changepassword_Model extends CI_Model {

public function getcurrentpassword($adminid){
    log_message('debug','getcurrentpassword() got called form Admin_Changepassword_Model');
$query=$this->db->where(['id'=>$adminid])
                    ->get('tbladmin');
           if($query->num_rows() > 0)
           {
            log_message('debug','number of rows recieved from tbladmin');
           	return $query->row();
           }
}

public function updatepassword($adminid,$newpassword){
    log_message('debug','updatepassword() got called form Admin_Changepassword_Model');
$data=array('password' =>$newpassword );
log_message('debug','updating tbladmin');
return $this->db->where(['id'=>$adminid])
                ->update('tbladmin',$data);

	}

}
