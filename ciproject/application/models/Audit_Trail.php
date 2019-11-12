
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Audit_Trail extends CI_Model
{

	public function setAuditTrail($username,$hostname,$hostip,$session_id,$action,$event_desc){

		log_message('debug','setAuditTrail() got called form Audit_Trail');
		$arraySession = array('username' => $username ,
										'hostname' => $hostname,
										'hostip' => $hostip,
										'session_id' => $session_id,
										'action' => $action,
										'event_desc'=> $event_desc
										 );


										 

			$sql_query=$this->db->insert('audit_table',$arraySession);

				if (sql_query)
				{
					$this->session->set_flashdata('success','Session establised..');
				}
				else
				{
					$this->session->set_flashdata('error','Somthing went wrong in session management..');	
				}


			


	}


	public function getAuditTrail()
	{


		log_message('debug','getAuditTrail() got called form Audit_Trail');

		$query=$this->db->select('audit_id,username,hostname,hostip,session_id,action,event_desc,ts')
		              ->get('audit_table');
		       

		       			 if($query->num_rows() > 0)
							{
								return $query->result();

							}else{
									return $query->result();
							}	

	}




}


?>