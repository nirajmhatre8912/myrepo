<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Test extends CI_Controller {

public function index()
{

$this->load->model('Audit_Trail');
$result=$this->Audit_Trail->getAuditTrail();
print_r($result);
}


public function role()
{

$this->load->model('User_Login_Model');
$result=$this->User_Login_Model->get_role('nirajcmhatre@gmail.com');
print_r($result);
}


public function testDemo()
{
    echo "Testing controller successfull... <br>";
    var_dump(base_url());
    var_dump($_SERVER['SERVER_ADDR']);
    echo "Version =".CI_VERSION;
}

public function getCM()
{
    $this->load->model('Configarable_Login');
    $role="ADMIN";
    $result=$this->Configarable_Login->countlastsevendays($role);
   // var_dump("Result = ".$result);
}

public function getMU()
{
$uid=1;
$this->load->model('ManageUsers_Model');
$udetail=$this->ManageUsers_Model->getuserdetail($uid);
var_dump($udetail);
}


public function getPagination()
{
    $this->load->model('Customers_model');
    $list=$this->Customers_model->get_datatables();
}

            public function testUser()
            {
                $config_menu=$this->session->userdata('config_menu');
                $data['dataInfo']=array();
				$data['pagelist'] = $config_menu;
				$this->load->view('admin/display_user', $data);

            }


            public function getDublicates()
            {
                $this->load->model('Admin_Dashboard_Model');
                $result=$this->Admin_Dashboard_Model->total_duplicates_username();
                //$result=$this->Admin_Dashboard_Model->total_active_sessions();
                foreach ($result as $key=>$line) :
                
				$total_dups_number=$result["total"];
                endforeach;
                print_r($total_dups_number);
            }

            

}	
?>