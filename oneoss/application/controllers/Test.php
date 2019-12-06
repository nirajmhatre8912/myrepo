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
        $password = "Hariom@123";

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



}
?>