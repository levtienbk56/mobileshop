<?php

class Products_list extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model");
    }

    public function index() {
        $data['title'] = "Danh sách sản phẩm";
        $data['data'] = "Dữ liệu quản trị";
        $data['template'] = "products_list";
        $data['products'] = $this->product_model->getAllProducts();
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout_admin", $data);
        }
    }            

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        }
    }

}
