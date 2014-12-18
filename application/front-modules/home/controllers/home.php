<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // Controller mặc định cho trang chủ
    public function index() {
        // Load the cart library to use it.
        $data['products'] = $this->product_model->getAllProductCart();
        $data['new_products'] = $this->product_model->getTopNew();
        $data['saleoff_products'] = $this->product_model->getTopSaleoff();
        $data['hot_products'] = $this->product_model->getTopHot();
        $data['title'] = "Trang chủ";
        $data['data'] = "Dữ liệu trang home";
        $data['products'] = $this->product_model->getAllProducts();
        
        $data['template'] = "home_view";
        $this->load->view("webuser_layout/layout_webuser", $data);
    }
}
