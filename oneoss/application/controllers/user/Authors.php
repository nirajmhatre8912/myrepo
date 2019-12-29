<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Authors extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('authors_model');
        $this->load->library("pagination");
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/user/Authors";
        $config["total_rows"] = $this->authors_model->get_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3; // this will tail which argument we want from user/Authors/10 related to route.php

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;  // this will tail which argument we want from user/Authors/10

        $data["links"] = $this->pagination->create_links();

        $data['authors'] = $this->authors_model->get_authors($config["per_page"], $page);

        $this->load->view('public/User/activeSessions', $data);
    }


    public function audit() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/user/Authors/audit";
        $config["total_rows"] = $this->authors_model->get_audit_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4; // this will tell which argument we want from user/Authors/10 related to route.php

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;  // this will tail which argument we want from user/Authors/10

        $data["links"] = $this->pagination->create_links();

        $data['authors'] = $this->authors_model->get_audit($config["per_page"], $page);

        $this->load->view('public/User/auditLogs', $data);
    }
}