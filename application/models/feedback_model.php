<?php

class feedback_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add_feedback() {
        $data = array(
            'name' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'content' => $this->input->post('message'),
            'time' => date("h:i:s A d-m-Y"),
            'subject' => $this->input->post('subject'),
        );
        $this->db->insert('feedback', $data);
    }

    function getFeedbacks() {
        $p = $this->db->get("feedback_view");
        if ($p->num_rows() > 0) {
            return $p->result();
        }
        return array();
    }
    function getFeedback($id) {
        $this->db->where("feedbackID",$id);
        $p = $this->db->get("feedback_view");
        if ($p->num_rows() > 0) {
            return $p->row();
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

    function getSuggestions() {
        $this->db->where("subject", "suggestions");
        $q = $this->db->get("feedback_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

}
