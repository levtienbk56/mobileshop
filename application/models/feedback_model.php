<?php
class Feedback_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    //thêm vào bảng feedback cột time va subject
    
    function add_feedback(){
        $data = array(
            'name' => $this->input->post('firstname')." ".$this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'content' => $this->input->post('message'),
            'time' => date("h:i:s A d-m-Y"),
            'subject' => $this->input->post('subject'),
        );
        $this->db->insert('feedback', $data);
    }

}