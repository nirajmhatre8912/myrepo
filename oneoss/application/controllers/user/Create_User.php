<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Create_User extends MY_Controller
{


    public function __construct()
	{
		parent::__construct();
        log_message('debug', 'Create_User constructer got called..');
        $session_uid=$this->session->userdata('uid');

            if (!$this->is_logged_in())
            {
                // User is logged in.  Do something.
                $this->session->set_flashdata('error','session has been expired...');
                //$this->load->view('public\Auth\login');
                $message= "Invalid Session";
                $status_code = 501;
                show_error($message, $status_code, $heading = 'An Error Was Encountered');
            }
	}
    


    public function index()
    {

        
                
                /* $var_result=print_r($result,TRUE);
                log_message('debug','loading configurable menu with result='.$var_result); */
                $this->load->model('User_Login_Model');
                //Prepage load
                $grp_result=$this->User_Login_Model->group_names();
                $result=$this->session->userdata('Config_menu');
                $this->load->view("public\User\CreateUser",['pagelist'=>$result , 'grp_names' => $grp_result ]); 
                return;
        
    }



    public function insert_group_data()
    {   
        $this->form_validation->set_rules('groupName','Group Name','required');
        $this->form_validation->set_rules('groupDesc','Group Description','required');
        $this->form_validation->set_rules('groupSection','Group Section','required');

            $this->load->model('User_Login_Model');
            if ($this->form_validation->run())
            {
                $groupName=$this->input->post('groupName'); 
                $groupDesc=$this->input->post('groupDesc');
                $groupSection=$this->input->post('groupSection');


                $db_status=$this->User_Login_Model->store_group_name($groupName,$groupDesc,$groupSection);
               
               
                                 $result=$this->session->userdata('Config_menu');
                                if ($db_status === 1)
                                {
                                                    //Prepage load
                                                        $grp_result=$this->User_Login_Model->group_names();
                                                        $result=$this->session->userdata('Config_menu');
                                                        $this->session->set_flashdata('success','Group stored in db successfully...');
                                                        $this->session->set_flashdata('error','');
                                                        $page_result=$this->User_Login_Model->show_groups();
                                                        
                                                        $this->load->view("public\User\showGroup",['grp_names' => $grp_result,'page_result'=>$page_result ]); 
                    
                                }
                                else
                                {
                                                    //Prepage load
                                                    $grp_result=$this->User_Login_Model->group_names();
                                                    $result=$this->session->userdata('Config_menu');
                                                    $this->session->set_flashdata('success','');
                                                    $this->session->set_flashdata('error','DB insertion failed...');
                                                    $page_result=$this->User_Login_Model->show_groups();

                                                    $this->load->view("public\User\showGroup",['grp_names' => $grp_result,'page_result'=>$page_result ]); 
                                    

                                }
                                



            }
            else
            {

                
        
                //Prepage load
                $grp_result=$this->User_Login_Model->group_names();
                $page_result=$this->User_Login_Model->show_groups();
                $result=$this->session->userdata('Config_menu');
                $this->load->view("public\User\showGroup",[ 'grp_names' => $grp_result,'page_result'=>$page_result ]); 



            return;
                

            }

    }



    public function insert_data()
    {


        //required|valid_email|min_length[4]|max_length[10]
        $this->form_validation->set_rules('firstName','First name','required');
        $this->form_validation->set_rules('lastName','Last name','required');
        $this->form_validation->set_rules('userId','Username or email','required');
        $this->form_validation->set_rules('mobileNumber','Mobile Number','required|min_length[4]|max_length[10]');
       
        $this->form_validation->set_rules('isActive','Status','required');
        $this->form_validation->set_rules('workGroup_id','Work Group name','required');
        $this->form_validation->set_rules('subGroup','Sub Group name','required');
        $this->form_validation->set_rules('userType','User type','required');
        if ($this->input->post('userType') == "AD")
        {
            $this->form_validation->set_rules('domain','Domain name','required');
        }elseif($this->input->post('userType') == "DB")
        {
            $this->form_validation->set_rules('userPassword','password','required');
        }else{
               $a=1; 
               /* This is unreachable */
        }



        $this->load->model('User_Login_Model');
        if($this->form_validation->run())
        {
            $firstName=$this->input->post('firstName'); 
            $lastName=$this->input->post('lastName');
            $userId=$this->input->post('userId');
            $mobileNumber=$this->input->post('mobileNumber');
            $userPassword=$this->input->post('userPassword');
            $isActive=$this->input->post('isActive');
            $workGroup_id=$this->input->post('workGroup_id');
            $userType=$this->input->post('userType');
            $subGroup=$this->input->post('subGroup');
            $domainName=$this->input->post('domain');

            if ($this->input->post('userType') == "AD")
            {
                $userPassword="NA";
            }elseif($this->input->post('userType') == "DB")
            {
                $domainName="NA";
            }else{
                   $a=1; 
                   /* This is unreachable */
            }
            
       
            log_message('info','insert_data method got called from Create_User...');
            log_message('debug','firstName :- '.$firstName.' lastName :- '.$lastName);
            log_message('debug','userId :- '.$userId.' mobileNumber :- '.$mobileNumber);
            log_message('debug','userPassword :- '.$userPassword.' isActive :- '.$isActive);
            log_message('debug','workGroup_id :- '.$workGroup_id.' userType :- '.$userType);
            $db_insertion_status=$this->User_Login_Model->store_user_name($firstName,$lastName,$userId,$mobileNumber,$userPassword,$isActive,$workGroup_id,$userType,$domainName,$subGroup);
            
           
            $result=$this->session->userdata('Config_menu');
            if ($db_insertion_status === 1)
            {
                                 //Prepage load
                                    $grp_result=$this->User_Login_Model->group_names();
                                    $result=$this->session->userdata('Config_menu');
                                    $this->session->set_flashdata('error','');
                                    $this->session->set_flashdata('success','user stored in db successfully...');
                                    $this->load->view("public\User\CreateUser",['pagelist'=>$result , 'grp_names' => $grp_result ]); 

            }
            else
            {
                                //Prepage load
                                $grp_result=$this->User_Login_Model->group_names();
                                $result=$this->session->userdata('Config_menu');
                                $this->session->set_flashdata('success','');
                                $this->session->set_flashdata('error','DB insertion failed...'.$result);
                                $this->load->view("public\User\CreateUser",['pagelist'=>$result , 'grp_names' => $grp_result ]); 
                


            }

        }else
        {
                //Prepage load
                $grp_result=$this->User_Login_Model->group_names();
                $result=$this->session->userdata('Config_menu');
                $this->load->view("public\User\CreateUser",['pagelist'=>$result , 'grp_names' => $grp_result ]); 



            return;

        }



    }

    public function select_user_data()
    {

        $result=$this->session->userdata('Config_menu');
        $this->load->view("public\User\showUser",['pagelist'=>$result]); 


    }

    public function showAllUserData()
    {
        $status=1; // active
        $this->load->model('User_Login_Model');
        $page_result=$this->User_Login_Model->show_users($status);
        $grp_result=$this->User_Login_Model->group_names();
        $result=$this->session->userdata('Config_menu');
        $this->load->view("public\User\showUser",['pagelist'=>$result, 'page_result'=>$page_result, 'grp_names' => $grp_result]);         


    }

    public function showAllGroupData()
    {
        $this->load->model('User_Login_Model');
        $page_result=$this->User_Login_Model->show_groups();
        $result=$this->session->userdata('Config_menu');
        $this->load->view("public\User\showGroup",['page_result'=>$page_result]);         


    }


    public function showAllProfileData()
    {
        $user = $_SESSION['EMAIL'];
        $this->load->model('User_Login_Model');
        $page_result=$this->User_Login_Model->show_profile_data($user);
        //print_r($page_result);
        $result=$this->session->userdata('Config_menu');
        $this->load->view("public\User\showProfile",['ud'=>$page_result]);         
        return;

    }

    public function deleteGroup()
    {
        $groupId = $this->uri->segment(4);
        $this->load->model("User_Login_Model");
        $page_result=$this->User_Login_Model->delete_group($groupId);
        $this->session->set_flashdata('success','Group deleted successfully...');
        $page_result=$this->User_Login_Model->show_groups();
        
        $this->load->view("public\User\showGroup",['page_result'=>$page_result]);      //LOADING VIEW    
        return;
        

    }


    public function deleteGroupAj()
    {
        $grp_id=$this->input->post("grp_id");
        $this->load->model("User_Login_Model");
        $page_result=$this->User_Login_Model->delete_group($grp_id);
        if($page_result){
            echo json_encode("Group delete successfully..");
        }else
        {
            echo json_encode("Error while deleting group...");
        }

    }

    public function modifyGroupAj()
    {
        $grp_u_id=$this->input->post("grp_id");
        $grp_u_name=$this->input->post("grp_u_name");
        $grp_u_desc=$this->input->post("grp_u_desc");
        $this->load->model("User_Login_Model");
        $modify_result = $this->User_Login_Model->modify_group($grp_u_id,$grp_u_name,$grp_u_desc);

        if($modify_result)
        {
            echo json_encode("record updated..");
        }else{
            echo json_encode("record failed to update..");
        }

    }

    public function addsubAJ()
    {

        $grp_id=$this->input->post("grp_s_id");
        $grp_s_name=$this->input->post("grp_s_name");
        $sgrp_s_name = $this->input->post("sgrp_s_name");
        $sgrp_s_desc = $this->input->post("sgrp_s_desc");
        $this->load->model("User_Login_Model");
        $add_result = $this->User_Login_Model->add_sub_group($grp_id,$grp_s_name,$sgrp_s_name,$sgrp_s_desc);
        //var_dump($add_result);
        if($add_result)
        {
            echo json_encode("subgroup created successfully..");
        }else{
            echo json_encode("failed to create subgroup..");
        }

    }


    public function inserUserAj()
    {


        log_message('debug','function inserUserAj executed....');
        $this->form_validation->set_error_delimiters('','');
        $this->form_validation->set_rules('firstName','First name','required');
        $this->form_validation->set_rules('lastName','Last name','required');
        $this->form_validation->set_rules('userId','Username or email','required');
        $this->form_validation->set_rules('mobileNumber','Mobile Number','required|min_length[4]|max_length[10]');
        
        log_message('debug','form validation function apply....');


        

                if($this->form_validation->run())
                {

                    log_message('debug','form validation SUCCESS.........');
                        /* To trim all data for html escape */
                        foreach($_POST as $key => $item){
                            $_POST[$key] = strip_tags($item);
                        }

                        log_message('debug','removed html escape character SUCCESS.........');
                        $id=$this->input->post("id");
                        $firstName=$this->input->post("firstName");
                        $lastName = $this->input->post("lastName");
                        $userId = $this->input->post("userId");
                        $mobileNumber = $this->input->post("mobileNumber");
                        $isActive = $this->input->post("isActive");
                        $workGroup_id = $this->input->post("workGroup_id");
                        $userType = $this->input->post("userType");
                        $domain = $this->input->post("domain");
                        $subgroup = $this->input->post("subgroup");
                        log_message('debug','Received data from post method SUCCESS.........');
                        $this->load->model("User_Login_Model");
                        log_message('debug','loading module');
                        $add_result = $this->User_Login_Model->modify_user($firstName,$lastName,$userId,$mobileNumber,$isActive,$workGroup_id,$userType,$id,$domain,$subgroup);
                        log_message('debug','module run finished .. result = '.$add_result);
                        if($add_result == 1)
                        {
                            
                            echo "User upadated successfully...";
                        }else{
                           
                            echo $add_result;
                        }
                        
                    
                    }else{

                            $error=validation_errors();
                           
                            log_message('debug','validation error got called '.$error);
                             
                            echo $error;
                    }

    }


    public function deleteUserAj()
    {
                        $id=$this->input->post("id");
                        $firstName=$this->input->post("username");

                          /* To trim all data for html escape */
                          foreach($_POST as $key => $item){
                            $_POST[$key] = strip_tags($item);
                        }

                        $this->load->model("User_Login_Model");
                        log_message('debug','loading module');
                        $add_result = $this->User_Login_Model->delete_user($id,$firstName);
                        log_message('debug','module run finished .. result = '.$add_result);
                        if($add_result == 1)
                        {
                            echo "User deleted successfully...";
                        }else{
                            echo $add_result;
                        }


    }

    public function getSubgroup()
    {

        $groupId=$this->input->post("workGroup_id");
        $this->load->model("User_Login_Model");
        $add_result = $this->User_Login_Model->getSubgroup($groupId);
        echo json_encode($add_result);

    }

    public function showRolesMgt()
    {
        $this->load->model("User_Login_Model");
        $result=$this->session->userdata('Config_menu');
        $roles=$this->User_Login_Model->getAllSubgroup();
        $grp_result=$this->User_Login_Model->group_names();

        $this->load->view("public\User\showRolesMgt",['roledesc' => $roles, 'grp_names' => $grp_result]);      //LOADING VIEW 
         return;


    }


    public function insert_role_access()
    {
        $groupId=$this->input->post("groupId");
        $subGroup=$this->input->post("subGroup");
        $roleKey=$this->input->post("roleKey");

        $this->load->model("User_Login_Model");
        $query=0;
        foreach($roleKey as $role){

            $array = explode("-", $role); 
            $key = $array[0]; 
            $id = $array[1];
            $query=$this->User_Login_Model->insert_role_access($subGroup,$id,$key);
        }
        log_message('debug','insert role result ='.$query);
        if ($query == 1)
        {
            echo "role inserted for sub-group";
        }
        else{
            echo "Error while inserting role in db".$query;
        }

    }


    public function getAllSubgroupData()
    {
        $subGroup=$this->input->post("subGroup");
        $this->load->model("User_Login_Model");
        $query_result=0;
        $query_result = $this->User_Login_Model->getAllSubGroupData($subGroup);
        echo json_encode($query_result);
    
    }

}


?>