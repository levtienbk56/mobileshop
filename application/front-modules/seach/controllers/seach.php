<?php

class seach extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    function index() {
        $data['title'] = "Tìm sản phẩm | ABC mobile shop";
        $data['data'] = "";
        $data['template'] = "seach_view";
        $this->load->view("layout_webuser", $data);
    }

}
