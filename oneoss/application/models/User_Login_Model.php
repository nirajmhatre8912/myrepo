<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_Login_Model extends CI_Model {


				public function validatelogin($emailid,$status){
					log_message('debug','validatelogin() got called form User_Login_Model');


					$query=$this->db->where('userId',$emailid);
					$account=$this->db->get('tblusers')->row();
					if($account!=NULL){
					$dbstatus=$account->isActive;
						//verifying status
						if( $dbstatus==$status){
							return array( "id" => $account->id , "user_group" => $account->workGroup_id ) ;
							//return $account->id;
						} else {
						
							return NULL;
							$this->session->set_flashdata('error', 'Your accounis is not active contact admin');
							redirect('public/Auth/login');
								
								}
						}
				return NULL;
				}


			public function get_role($username)
			{
						log_message('debug','get_role() got called form User_Login_Model');
								$sql ="SELECT  rl.role_name FROM user_role_map rm inner join tblusers us on rm.user_id=us.id inner join role rl on rl.idrole=rm.user_role_id where us.emailId=?";
								$query = $this->db->query($sql,array($username));

								if ($query!=NULL){
									log_message('debug','Role Retrive from DB');
									return $query->result();
								}else{
									log_message('debug','Error in Role Retrive from DB');
									$error = $this->db->error(); 
									$this->session->set_flashdata('error',  $error);
									redirect('user/login');

								}

			}
}

