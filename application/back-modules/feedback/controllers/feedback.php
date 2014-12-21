<?php

class feedback extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("feedback_model");
    }

    public function index() {
        $data['title'] = "Quản lý phản hồi";
        $data['data'] = "";
        $data['template'] = "feedback_view";
        $data['feedbacks'] = $this->feedback_model->getFeedbacks();
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        }
    }

    function get_all_feedback() {
        $data['feedbacks'] = $this->feedback_model->getFeedbacks();
        $this->load->view("load_feedback", $data);
    }

    function get_service_feedback() {
        $data['feedbacks'] = $this->feedback_model->getServices();
        $this->load->view("load_feedback", $data);
    }

    function get_product_feedback() {
        $data['feedbacks'] = $this->feedback_model->getProducts();
        $this->load->view("load_feedback", $data);
    }

    function get_suggest_feedback() {
        $data['feedbacks'] = $this->feedback_model->getSuggestions();
        $this->load->view("load_feedback", $data);
    }
    
    function get_message($feedback_id){
        $data['message'] = $this->feedback_model->getFeedback($feedback_id);        
        $this->load->view("load_content", $data);
    }
}
