<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Class Active_Session extends CI_Model
{


		public function insert_active_session($user,$tid,$ip,$session,$role,$status)
		{
			log_message('debug','insert_active_session() got called form Active_Session');			
				$arraySession = array('user' => $user ,
										'tid' => $tid,
										'ip' => $ip,
										'sessionID' => $session,
										'role' => $role,
										'status'=> $status
										 );
				$sql_query=$this->db->insert('active_session',$arraySession);
				
				
				if ($sql_query)
				{
					log_message('debug','insert success');
					$this->session->set_flashdata('success','Session establised..');
				}
				else
				{
					log_message('debug','insert failed');
					$this->session->set_flashdata('error','Somthing went wrong in session management..');	
				}

		}

		public function get_active_session_id($sessionId,$userName)
		{
			log_message('debug','get_active_session_id() got called form Active_Session');		
			$query_active_session=$this->db->where(['sessionID'=>$sessionId,'user'=>$userName])
											->get('active_session');

							if($query_active_session->num_rows() > 0)
							{
								log_message('debug','get active session success');
								return $query_active_session->row();

							}else{
								log_message('debug','zero returns');
							}				




		}


		public function remove_active_session($sessionId,$userName)
		{
			log_message('debug','remove_active_session() got called form Active_Session');		
					return $this->db->where(['user'=> $userName,'sessionID'=>$sessionId])->set('out_ts','NOW()',FALSE)->set('status','D')->update('active_session');

		}


				function get_user_active()
				{
						
					log_message('debug','get_user_active() got called form Active_Session');	
					$query_active_session=$this->db->get('active_session');

							if($query_active_session->num_rows() > 0)
							{
								log_message('debug','number of rows get returned...');
								return $query_active_session->result();

							}else{

							}				

						
				}


}
?>