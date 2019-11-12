<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin_Login_Model extends CI_Model {


public function validatelogin($username,$password){
	log_message('debug','validatelogin() got called form Admin_Login_Model');
$query=$this->db->where(['userName'=>$username,'password'=>$password]);
	$account=$this->db->get('tbladmin')->row();

	log_message('debug','Accounts details ='.$account->id);
	if($account!=NULL)
	{
		log_message('debug','account id found');
		return $account->id;
	}else{
			log_message('debug','account id is NULL');
		return NULL;		

	}


}
}

