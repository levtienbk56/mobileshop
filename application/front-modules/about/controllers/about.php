<?php

class About extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("webinfo_model");        
    }

    public function index() {
        $data['title'] = "Giới thiệu";
        $data['data'] = "Trang giới thiệu";
        $data['about'] = $this->webinfo_model->getAbout();
        $data['template'] = "about_view";
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

}
