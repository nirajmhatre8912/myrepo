<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuditLogs {
var $CI;   

		public function __construct(){
			
			// init vars
			$this->CI =& get_instance();
			
		}
        
		public function change_password_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "CHANGE_PASSWORD";
			$event_desc = $desc;		
			$page_name = "CHANGE PASSWORD";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
		    //print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}

		public function add_role_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "ADD_ROLE";
			$event_desc = $desc;		
			$page_name = "ADD ROLE";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
		    //print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}

		
		public function map_delete_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "DEL_ROLE_MAPPING";
			$event_desc = $desc;		
			$page_name = "ADD ROLE";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
		    //print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}
		


		public function add_user_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "ADD_USER";
			$event_desc = $desc;		
			$page_name = "CREATE USER";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
		    //print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}

		
		public function user_delete_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "DEL_USER";
			$event_desc = $desc;		
			$page_name = "DELETE USER";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
		    //print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}


		public function user_modify_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "MOD_USER";
			$event_desc = $desc;		
			$page_name = "MODIFY USER";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
		    //print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}


		public function view_delete_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "DEL_GROUP_VIEW";
			$event_desc = $desc;		
			$page_name = "GROUP UI";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
			//print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}


		public function view_insert_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "INSERT_GROUP_VIEW";
			$event_desc = $desc;		
			$page_name = "GROUP UI";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
			//print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}

		public function group_delete_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "DELETE_GROUP";
			$event_desc = $desc;		
			$page_name = "SHOW GROUP";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
			//print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}


		public function modify_group_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "MODIFY_GROUP";
			$event_desc = $desc;		
			$page_name = "SHOW GROUP";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
			//print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}

		public function add_sub_group_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "ADD_SUB_GROUP";
			$event_desc = $desc;		
			$page_name = "SHOW GROUP";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
			//print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}

		public function add_group_log($desc)
		{
			$username = $this->CI->session->userdata('USER');
			$hostname = $this->CI->session->userdata('REMOTE_ADDR');
			$hostip = $this->CI->session->userdata('REMOTE_ADDR');
			$session_id = $this->CI->session->userdata('SESSION_ID');
			$action = "ADD_GROUP";
			$event_desc = $desc;		
			$page_name = "SHOW GROUP";

			
			
			$array_group = array("username" => $username,"hostname" => $hostname,"hostip" => $hostip,"session_id" => $session_id,"action" => $action,"event_desc" => $event_desc,"page_name" => $page_name);	
			//print_r($array_group);
			
			$roles=$this->db_audit_log($array_group);
			return $roles;

		}

		public function db_audit_log($array_group)
			{

								
							$sql_query = $this->CI->db->insert('audit_table',$array_group);
							$db_status =0;		
							
							if ($sql_query)
							{
								
								$db_status =1;
								return $db_status;
								
							}else
								{
									
									$error = $this->CI->db->error();
									$db_status =0;
									return $db_status;
								}
				return 0;
			}

}

?>