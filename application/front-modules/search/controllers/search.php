<?php

class Search extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    function index() {
        $data['keyword'] = $this->input->get('keyword');

        $data['title'] = "Tìm sản phẩm | ABC mobile shop";
        $data['data'] = "";
        $data['template'] = "search_view";
        $data['products'] = $this->product_model->getProductSearchByName($data['keyword']);
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

}
