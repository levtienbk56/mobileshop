<?php

class About extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = "Giới thiệu";
        $data['data'] = "Trang giới thiệu";
        $data['template'] = "about_view";
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

}
