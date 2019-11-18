<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
/**
 * Description of Import Model
 *
 * @author Coders Mag Team
 *
 * @email  info@techarise.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Import_User extends CI_Model {
    private $_batchImport;
 
    public function setBatchImport($batchImport) {
        $this->_batchImport = $batchImport;
    }
 
    // save data
    public function importData() {
        $data = $this->_batchImport;
        $this->db->insert_batch('tblusers', $data);
    }
    // get employee list
    public function employeeList() {
        $this->db->select(array( 'e.firstName', 'e.lastName', 'e.emailId', 'e.mobileNumber', 'e.userPassword','e.isActive','e.lastUpdationDate'));
        $this->db->from('tblusers as e');
        $query = $this->db->get();
        return $query->result_array();
    }
}
 
?>