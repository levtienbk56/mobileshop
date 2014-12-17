<?php

class Categories extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model");
    }

    public function index() {
        $data['title'] = "Danh mục sản phẩm";
        $data['data'] = "";
        $data['template'] = "categories_view";
        $data['categories'] = $this->product_model->getCategories();
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }
    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('admin_layout/index.php/login');
        }
    }
}
