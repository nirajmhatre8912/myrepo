<?php
/**
 * Created by Niraj M
 */

class Test extends CI_Controller
{

    public function __construct()
    {
            parent::__construct();
            

    }

    public function index()
    {
        echo "This is text index page....";
        echo base_url();
    }


    public function test1()
    {

        log_message('debug','loading Configarable_Login model...');
		$this->load->model('Configarable_Login');
		$role="VIEWUSER";
		log_message('debug','calling countlastsevendays() method for role='.$role);
		$result=$this->Configarable_Login->countlastsevendays($role);
		log_message('debug','loading configurable menu with result='.$result);
		//$this->load->view('sidebarconfigarable',['pagelist'=>$result]);

        $this->load->view("public\dash",['pagelist'=>$result]);

    }


    public function ldap_connect()
    {


        $user_name = "NCMhatre@GlobalcloudXchange.com";
        $password = "*****@123";

         $ldap = ldap_connect("RGCOM.com") or die("That LDAP-URI was not parseable");         
         if ($bind = ldap_bind($ldap, $user_name, $password)) {
            // log them in!
                echo "Login success";
            } else 
            {
            // error message
                echo "Login Fail";
            }

    }


    public function count_user()
    {
        $this->load->model("User_Login_Model");
        $Act_num = $this->User_Login_Model->total_number_of_user(1);
        $dec_num = $this->User_Login_Model->total_number_of_user(0);
        $result_array = $this->User_Login_Model->last_five_days_login_graph(1);
        print_r($result_array);
        $result_array = $this->User_Login_Model->last_five_days_login_graph(0);
        print_r($result_array);
        return $result_array;
        
    }

    public function get_groups()
    {
                $this->load->model('User_Login_Model');
                $grp_result=$this->User_Login_Model->group_names();
                //print_r($grp_result);
                //var_dump($a);

                echo json_encode($grp_result);


              

              
    }
    public function show_user()
    {

        $this->load->model('User_Login_Model');
                $grp_result=$this->User_Login_Model->show_user("NCMhatre@GlobalCloudxchange.com");
                echo json_encode($grp_result);

    }

    public function show_users()
    {

        $this->load->model('User_Login_Model');
                $grp_result=$this->User_Login_Model->show_users(1);
                echo json_encode($grp_result);

    }

				public function get_group_role_mapping()
                {
                        $this->load->model(User_Login_Model);
                        $grp_result=$this->User_Login_Model->get_group_role_mapping(52);
                        print_r($grp_result);

                } 


    public function error_test()
    {
        $this->load->view('public/error404');
 
    } 
    
    public function wip_page()
    {
        $this->load->view('public/WIP');
    }

    public function add_sub_group()
    { 
        $grp_id='';
        $grp_s_name="test";
        $sgrp_s_name = "test";
        $sgrp_s_desc = "test";

        $this->load->model('User_Login_Model');
        $add_result = $this->User_Login_Model->add_sub_group($grp_id,$grp_s_name,$sgrp_s_name,$sgrp_s_desc);
        var_dump($add_result);
        if($add_result)
        {
            echo json_encode("record updated..");
        }else{
            echo json_encode("record failed to update..");
        }
    }

    public function add_group()
    {

        $grp_u_id="";
        $grp_u_name="oup";
        $grp_u_desc="st group";
        $this->load->model("User_Login_Model");
        $modify_result = $this->User_Login_Model->modify_group($grp_u_id,$grp_u_name,$grp_u_desc);

        if($modify_result)
        {
            echo json_encode("record updated..");
        }else{
            echo json_encode("record failed to update..");
        }

    }


    function getSubgroup()
    {

        $groupId=43;
        $this->load->model("User_Login_Model");
        $add_result = $this->User_Login_Model->getSubgroup($groupId);
        echo json_encode($add_result);
    }

    function getRoles()
    {
        
        $this->load->model("User_Login_Model");
        $roles=$this->User_Login_Model->getAllSubgroup();
        print_r($roles);
    }


    function setRole()
    {
        $groupId=52;
        $subGroup=16;
        $roleKey=array("crtuser-1","chgpass-2","crtgrp-3");
        $this->load->model("User_Login_Model");


        foreach($roleKey as $role){

            $array = explode("-", $role); 
            $key = $array[0]; 
            $id = $array[1];
            $query=$this->User_Login_Model->insert_role_access($subGroup,$id,$key);
        }
    }


    function testlib()
    {
        //$this->load->library('Password');
        //$a=$this->Password->encrypt_password("Test@12345","DevOss");
        $password="Test@12345";
        echo password_hash($password,PASSWORD_DEFAULT); 

        $newpass='$2y$10$bm9sS8Vm2m6CeM51luk3SOBMISu3ntsZTwrpfh/ctxLR4WmlY/KRy';
        $newpass='$2y$10$PB3p/fiMForSF4vE1CI3j.aEHfbpCZ01toYrA59u.MWQxvI5JPW36';
        if (password_verify($password,$newpass))
         {   echo "password valid...";
         }else{
             echo "password invalid...";
         }
    }

}
?>