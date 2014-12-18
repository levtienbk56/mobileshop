<?php

class feedback_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getFeedbacks() {
        $p = $this->db->get("feedback_view");
        if ($p->num_rows() > 0) {
            return $p->result();
        }
        return array();
    }

    function getServices() {
        $this->db->where("subject", "service");
        $q = $this->db->get("feedback_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getProducts() {
        $this->db->where("subject", "product");
        $q = $this->db->get("feedback_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }
}