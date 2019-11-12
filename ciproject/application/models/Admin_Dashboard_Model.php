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
}
