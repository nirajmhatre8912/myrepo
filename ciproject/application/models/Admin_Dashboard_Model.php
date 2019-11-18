<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Admin_Dashboard_Model extends CI_Model {

function __construct(){
parent::__construct();
if(! $this->session->userdata('adid'))
redirect('admin/login');
}

public function totalcount(){
    log_message('debug','totalcount() got called form Admin_Dashboard_Model');
    $query=$this->db->select('id')   
                 ->get('tblusers');
return  $query->num_rows();

}

public function countlastsevendays(){
    log_message('debug','countlastsevendays() got called form Admin_Dashboard_Model');
$query2=$this->db->select('id')   
                 ->where('regDate >=  DATE(NOW()) - INTERVAL 10 DAY')
                 ->get('tblusers');
return  $query2->num_rows();
}

public function countthirtydays(){
    log_message('debug','countthirtydays() got called form Admin_Dashboard_Model');
$query3=$this->db->select('id')   
                 ->where('regDate >=  DATE(NOW()) - INTERVAL 30 DAY')
                 ->get('tblusers');
return  $query3->num_rows();
}


            public function total_duplicates_username()
            {
                log_message('debug','finding total numbers of duplicate users...');
                //$query4="Select firstName,lastName,emailId,count(id) from tblusers group by emailId having count(id) > 1  ;"    
                $this->db->select('firstName,lastName,emailId,COUNT(id) as total');
                $this->db->group_by('emailId'); 
                $this->db->having('total > 1'); 
                $query4=$this->db->get('tblusers');

                return  $query4->result();

            }


            public function total_active_sessions()
            {
                log_message('debug','finding total numbers of active users...');
                $this->db->select('*');
                $this->db->where('status','A');
                $query5=$this->db->get('active_session');
            
                return $query5->num_rows();
            }
}

