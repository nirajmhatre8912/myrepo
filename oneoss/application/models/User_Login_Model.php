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
							return array( "id" => $account->id , 
							"user_group" => $account->workGroup_id , 
							"user_type" => $account->userType , 
							"sub_group" => $account->subGroup, 
							"domain_name" => $account->domainName
							) ;
							//return $account->id;
						} else {
						
							return NULL;
							$this->session->set_flashdata('error', 'Your accounis is not active contact admin');
							redirect('public/Auth/login');
								
								}
						}
				return NULL;
				}
//select

			public function get_role($username)
			{
						log_message('info','get_role() got called form User_Login_Model');
							
								$this->db->select('*');
								$this->db->from('tblusers');
								 $this->db->join('permission_groups', 'tblusers.workGroup_id = permission_groups.groupID');
								$this->db->where('tblusers.userId',$username); 
								$query = $this->db->get();	


								if ($query!=NULL){
									log_message('debug','Role Retrive from DB');
									return $query->row();
								}else{
									log_message('debug','Error in Role Retrive from DB');
									$error = $this->db->error(); 
									$this->session->set_flashdata('error',  $error);
									redirect('user/login');

								}

			}

			public function total_number_of_user($user_status)
			{
				$this->db->where('isActive',$user_status);
				$num_rows = $this->db->count_all_results('tblusers');
				//var_dump($num_rows);
				return $num_rows;
			}

//select
			public function last_five_days_login_graph($status)
			{
				$query = $this->db->query("SELECT count(*) as count,date(timestamp) as date FROM oneossdb.active_session group by date(timestamp) order by active_session_id desc limit 5;");
				$date_array = array();
				$count_array = array();
				foreach ($query->result() as $row)
					{
						$datetmp=array_push($date_array, $row->date);
						$counttmp=array_push($count_array, $row->count);
							//echo $row->count;
							//echo $row->date;
					}


				//return array('date' => $date_array, 'count' => $count_array);
				if ($status == 1)
					return json_encode($date_array);
				else
					return json_encode($count_array);
			}

//validate select

			public function validateDBlogin($emailid,$password,$status){
				log_message('debug','validatelogin() got called form User_Login_Model');

				$passwordhash = password_hash($password,PASSWORD_DEFAULT);		
				log_message('debug','Password hashing output = '.$passwordhash);


				//'userPassword'=>$passwordhash,
				$query=$this->db->where(['userId'=>$emailid, 'isActive'=>$status]);
				$account=$this->db->get('tblusers')->row();
				
	
				if($account!=NULL){
				  
				  $dbstatus=$account->isActive;
				  log_message('debug','Password hash found in db = '.$account->userPassword);	
				
				  //verifying status
					if(password_verify($password,$account->userPassword)){
						
						return array( "id" => $account->id , "user_group" => $account->workGroup_id, "userType" => $account->userType , "sub_group" => $account->subGroup ) ;
						//return $account->id;
					} else {
					
							$this->session->set_flashdata('error', 'Your are not valid user db user');
                            $this->load->view('public/Auth/login');
                            return; 
					
					}
			}
			return NULL;
			}


//insert
			public function store_group_name($group_name,$group_description,$section)
			{
				//$section = "V1-V2-V3";
				


					$array_group = array('groupName' => $group_name,
									'groupDesc' => $group_description,
									'groupSection' => $section
									);


								
							$sql_query = $this->db->insert('permission_groups',$array_group);
							$db_status =0;		
							
							if ($sql_query)
							{
								log_message('debug','Group inserted');
								$db_status =1;
								return $db_status;
								
							}else
								{
									log_message('debug','Group insertion failed...');
									$db_status =0;
									return $db_status;
								}
				return 0;
			}
	//select		
			public function group_names()
			{
						log_message('debug','group_names() got called form ManageUsers_Model');  
						$query=$this->db->select('groupName,groupID')
							->distinct()	
							->get('permission_groups');
		        return $query->result();      
			}

	//select
			public function show_user($username)
			{
					log_message('debug','showing all user from db tblusers...');


						$this->db->select('*');
						$this->db->from('tblusers');
						$this->db->where('tblusers.userId',$username); 


						
						$query = $this->db->get();	


								if ($query!=NULL){
									log_message('debug','show_users from DB');
									return $query->result();
								}else{
									log_message('debug','Error in Role Retrive from DB');
									$error = $this->db->error(); 
									$this->session->set_flashdata('error',  $error);
									

								}
			}



	//select		
			public function show_users($status)
			{
					log_message('debug','showing all user from db tblusers...');


						$this->db->select('*');
						$this->db->from('tblusers');
						$this->db->where('tblusers.isActive',$status); 

						$query = $this->db->get();	


								if ($query!=NULL){
									log_message('debug','show_users from DB');
									return $query->result();
								}else{
									log_message('debug','Error in Role Retrive from DB');
									$error = $this->db->error(); 
									$this->session->set_flashdata('error',  $error);
									redirect('user/login');

								}

			}



			public function store_user_name($firstName,$lastName,$userId,$mobileNumber,$userPassword,$isActive,$workGroup_id,$userType,$domainName,$subGroup)
			{
				
				log_message('info','store_user_name function called ...');

					$passwordhash = password_hash($userPassword,PASSWORD_DEFAULT);		
					log_message('debug','Password hashing output = '.$passwordhash);

					$array_user = array('firstName' => $firstName,
									'lastName' => $lastName,
									'userId' => $userId,
									'mobileNumber' => $mobileNumber,
									'userPassword'=> $passwordhash,
									'isActive' => $isActive,
									'workGroup_id' => $workGroup_id,
									'userType'=> $userType,
									'subGroup' => $subGroup,
									'domainName' => $domainName
									);

										
								
							$sql_query = $this->db->insert('tblusers',$array_user);
							$db_status =0;		
							
							if ($sql_query)
							{
								log_message('debug','User inserted');
								log_message('info','store_insert_name executed successfully...');

								$db_status =1;
								return $db_status;
								
							}else
								{
									log_message('debug','User insertion failed...');
									$error=$this->db->error(); 
									$error=print_r($error,TRUE);
									//var_dump($error);
									log_message('debug','Error code = '.$error['code']);
									log_message('debug','Error message = '.$error['message']);
									$db_status =$error['message'];
									return $db_status;
								}
				return 0;
			}


			//select


			public function show_groups()
			{
					log_message('debug','showing all user from db tblusers...');


						$this->db->select('*');
						$this->db->from('permission_groups');
						

						$query = $this->db->get();	


								if ($query!=NULL){
									log_message('debug','show_groups from DB');
									return $query->result();
								}else{
									log_message('debug','Error in group Retrive from DB');
									$error = $this->db->error(); 
									$this->session->set_flashdata('error',  $error);
									redirect('user/login');

								}

			}

			public function show_all_profile_data($user)
			{

				log_message('info','show all profile data model'.$user);

				$this->db->select('*');
				$this->db->from('permissions');
				$this->db->join('permission_map', 'permissions.permissionID = permission_map.permissionID');
				$this->db->join('permission_groups', 'permission_groups.groupID=permission_map.groupID');
				$this->db->join('tblusers', 'tblusers.workGroup_id = permission_groups.groupID');
				$this->db->where('tblusers.userId',$user); 

				$query = $this->db->get();

				if ($query!=NULL){
					log_message('debug','show_all_profile_data from DB retrived');
					return $query->result();
				}else{
					log_message('debug','Error in show_all_profile_data Retrive from DB');
					$error = $this->db->error(); 
					$this->session->set_flashdata('error',  $error);
					redirect('user/login');

				}
			}


			public function show_profile_data($user)
			{

				log_message('info','show all profile data model'.$user);

				$this->db->select('*');
				$this->db->from('permission_groups');
				$this->db->join('tblusers', 'tblusers.workGroup_id = permission_groups.groupID');
				$this->db->where('tblusers.userId',$user); 

				$query = $this->db->get();

				if ($query!=NULL){
					log_message('debug','show_all_profile_data from DB retrived');
					return $query->result();
				}else{
					log_message('debug','Error in show_all_profile_data Retrive from DB');
					$error = $this->db->error(); 
					$this->session->set_flashdata('error',  $error);
					redirect('user/login');

				}
			}


			public function getcurrentpassword($userid)
			{
				log_message('debug','getcurrentpassword() got called form User_Changepassword_Model');
				$query=$this->db->where(['id'=>$userid])
								->get('tblusers');
					   if($query->num_rows() > 0)
					   {
						   return $query->row();
					   }
			}
			
			public function updatepassword($userid,$newpassword)
			{
				log_message('debug','updatepassword() got called form User_Changepassword_Model');

					$hashpassword=password_hash($newpassword,PASSWORD_DEFAULT); 
					log_message('debug','new password hash form User_Changepassword_Model ='.$hashpassword);
					$data=array('userPassword' =>$hashpassword );
					return $this->db->where(['id'=>$userid])
									->update('tblusers',$data);
			
				}


				public function get_group_role_mapping($subGroupid)
				{
	
					log_message('info','get_group_role_mapping model = '.$subGroupid);
	
					$this->db->select('*');
					$this->db->from('oneossdb.permission_groups');
					$this->db->join('oneossdb.group_sub_group_map','group_sub_group_map.groupId = permission_groups.groupID');
					$this->db->join('oneossdb.group_role_map', 'group_sub_group_map.subGroupId = group_role_map.subGroupId');
					$this->db->join('oneossdb.group_role_master', 'group_role_master.roleId=group_role_map.roleId');
					
					$this->db->where('group_sub_group_map.subGroupId',$subGroupid); 
	
					$query = $this->db->get();
	
					if ($query!=NULL){
						log_message('debug','show_all_profile_data from DB retrived');
						return $query->result();
					}else{
						log_message('debug','Error in show_all_profile_data Retrive from DB');
						$error = $this->db->error(); 
						$e =print_r($error,TRUE);
						log_message('debug','Error '.$e);
					}
				}


				public function delete_group($groupId)
				{
					log_message('info','delete_group in User Login Model'.$groupId);
					$result = $this->db->delete('permission_groups', array('groupID' => $groupId)); 
					return $result;


				}


				public function delete_user($id,$firstName)
				{
					log_message('info','User deleted successfully...'.$firstName);
						try{
							$result = $this->db->delete('tblusers', array('id' => $id)); 
							return $result;

						}
						catch (Exception $e) {
							$error = $e->getMessage();
							log_message('debug','error while executing query = '.$error);
							return $error; 
						}
				}

				public function modify_group($grp_u_id,$grp_u_name,$grp_u_desc)
				{
									  
						$data=array('groupName'=>$grp_u_name,'groupDesc'=>$grp_u_desc);	
						$this->db->where('groupID',$grp_u_id);
						$result = $this->db->update('permission_groups',$data);
						return $result;

				}


				public function add_sub_group($grp_id,$grp_s_name,$sgrp_s_name,$sgrp_s_desc)
				{



					$data = array(
						'groupId' => $grp_id,
						'groupName' => $grp_s_name,
						'subGroupName' => $sgrp_s_name,
						'subGroupDesc' => $sgrp_s_desc
				);
				
				$insert_result = $this->db->insert('group_sub_group_map', $data);
				return $insert_result;
			}


			public function modify_user($firstName,$lastName,$userId,$mobileNumber,$isActive,$workGroup_id,$userType,$id,$domain,$subgroup)
			{							
				log_message('debug','modify user function got called....');

				$data=array('firstName'=>$firstName,
					'lastName'=>$lastName,
					'userId'=>$userId,
					'mobileNumber'=>$mobileNumber,
					'isActive' => $isActive,
					'lastUpdationDate' => date('Y-m-d H:i:s'),
					'workGroup_id' => $workGroup_id,
					'userType' => $userType,
					'domainName' => $domain,
					'subGroup' => $subgroup
				);
			

				try {
					// run your code here
					$this->db->where('id',$id);
					$result = $this->db->update('tblusers',$data);
					log_message('debug','Query = '.$this->db->last_query()); 
					$result= print_r($result,TRUE);
					log_message('debug','update query executed....'.$result);
					return $result;
				}
				catch (Exception $e) {
					$error = $e->getMessage();
					log_message('debug','error while executing query = '.$error);
					return $error; 
				}









			}


			public function getSubgroup($groupId)
			{

				log_message('info','get_group_role_mapping model = '.$groupId);
	
					$this->db->select('permission_groups.groupName,permission_groups.groupId,group_sub_group_map.subGroupId,group_sub_group_map.subGroupName');
					$this->db->from('oneossdb.permission_groups');
					$this->db->join('oneossdb.group_sub_group_map', 'permission_groups.groupId = group_sub_group_map.groupId');
					$this->db->where('permission_groups.groupId',$groupId); 


					$query = $this->db->get();
	
					if ($query!=NULL){
						log_message('debug','show_all_profile_data from DB retrived');
						return $query->result();
					}else{
						log_message('debug','Error in show_all_profile_data Retrive from DB');
						$error = $this->db->error(); 
						$e =print_r($error,TRUE);
						log_message('debug','Error '.$e);
					}
				
			}


			public function getAllSubGroupData($subGroup)
			{

					log_message('info','getAllSubGroupData model = '.$subGroup);

					$this->db->select('*');
					$this->db->from('oneossdb.group_role_map');
					$this->db->join('oneossdb.group_role_master', 'group_role_master.roleId=group_role_map.roleId');
					$this->db->join('oneossdb.group_sub_group_map', 'group_sub_group_map.subGroupId=group_role_map.subGroupId');
					$this->db->where('group_sub_group_map.subGroupId',$subGroup); 

					$query = $this->db->get();
	
					if ($query!=NULL){
						log_message('debug','getAllSubGroupData from DB retrived');
						return $query->result();
					}else{
						log_message('debug','Error in getAllSubGroupData Retrive from DB');
						$error = $this->db->error(); 
						$e =print_r($error,TRUE);
						log_message('debug','Error '.$e);
					}
			
				
			}

			public function getAllSubgroup()
			{
				log_message('info','getAllSubgroup model');
				$this->db->select('role_description as desc,role_key as key,roleId as id');
				$this->db->from('oneossdb.group_role_master');

				$query = $this->db->get();
	
					if ($query!=NULL){
						log_message('debug','getAllSubgroup from DB retrived');
						return $query->result();
					}else{
						log_message('debug','Error in getAllSubgroup Retrive from DB');
						$error = $this->db->error(); 
						$e =print_r($error,TRUE);
						log_message('debug','Error '.$e);
					}
				
			}

		

			public function insert_role_access($subGroupId,$roleId,$roleKey)
			{
				log_message('info','insert_role_access model');
				$data = array('subGroupId' => $subGroupId,
								'roleId' => $roleId,
								'roleKey' => $roleKey
							);

							log_message('debug','BEGIN role insertion...');
					try
					{								
							$sql_query = $this->db->insert('group_role_map',$data);

							log_message('debug','END role insertion...');

							$db_status =0;		
							
							if ($sql_query)
							{
								log_message('debug','Group inserted');
								$db_status =1;
								return $db_status;
								
							}
							else
								{
									log_message('debug','Group insertion failed...');								
									$error=$this->db->error(); 
									log_message('debug','Error = '.$this->db->_error_message());
									//$error=print_r($error,TRUE)
									$db_status = $this->db->_error_message();
	
	
								}					
					}catch(Exception $e)
					{
						log_message('error ',$e->getMessage());
						return 0;
					}							
								


			}
					
			


}

