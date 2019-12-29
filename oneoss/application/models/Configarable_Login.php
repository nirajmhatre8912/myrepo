<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Configarable_Login extends CI_Model {

/*function __construct(){
parent::__construct();
if(! $this->session->userdata('uid'))
redirect('user/login');
}
*/

public function countlastsevendays($role,$page_status){

    log_message('debug','countlastsevendays() got called form Configarable_Login');    
$query2=$this->db->select(['page_id','page_name','page_link','page_status','page_create_ts','page_role','page_seq','page_active','symbol'])  
                 ->where(['page_role' => $role, 'page_status'=> $page_status])
                 ->order_by("page_seq", "asc")
                 ->get('configarable_sideview')->result(); 
  
$var_result = print_r($query2,TRUE);   
log_message('debug',$var_result);
return  $query2;
}


}
?>