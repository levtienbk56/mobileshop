<?php

class about extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("webinfo_model");
    }

    public function index() {
        $data['title'] = "Quản trị trang giới thiệu";
        $data['data'] = "";
        $data['template'] = "about_view";
        $data['about'] = $this->webinfo_model->getAbout();
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

    function update(){
        $this->webinfo_model->updateAbout();
        redirect(base_url()."admin/index.php/about");
    }
}


