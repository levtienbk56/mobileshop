<?php

class post extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = "Tin tức";
        $data['data'] = "Dữ liệu tin tức";
        $data['template'] = "home_post";
        $this->load->view("webuser_layout/layout_webuser", $data); //PrecisoLayout
    }

    function view_post_detail($id) {
        $data['title'] = "Chi tiet Tin tức";
        $data['data'] = "Dữ liệu chi tiet tin tức";
        $data['template'] = "single_post";
        $this->load->view("webuser_layout/layout_webuser", $data); //PrecisoLayout
    }

}
