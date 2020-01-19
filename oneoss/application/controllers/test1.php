<?php
/**
 * Created by Niraj M
 */

class test1 extends CI_Controller
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


	public function test_lib()
	{
		echo "This is test lib...";
		$this->load->library('Auditlogs');
		//$this->Auditlogs->cplog();  
	}

}