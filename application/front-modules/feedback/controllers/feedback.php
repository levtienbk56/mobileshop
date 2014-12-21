<?php

class Feedback extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = "Gửi phản hồi";
        $data['data'] = "Contact";
        $data['template'] = "feedback_view";
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

    public function add_feedback() {
        $this->load->model("feedback_model");
        $this->feedback_model->add_feedback();
    }

}
