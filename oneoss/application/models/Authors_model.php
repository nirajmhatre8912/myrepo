<?php

class Authors_model extends CI_Model {

    protected $table = 'active_session';

    public function __construct() {
        parent::__construct();
    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("active_session_id", "desc");
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function get_audit_count(){
        return $this->db->count_all("audit_table");
    }

    public function get_audit($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("audit_id", "desc");
        $query = $this->db->get("audit_table");

        return $query->result();
    }
}

?>