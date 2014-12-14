<?php

class Suppliers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model");
    }

    public function index() {
        $data['title'] = "Nhà cung cấp";
        $data['data'] = "";
        $data['template'] = "suppliers_view";
        $data['suppliers'] = $this->product_model->getSuppliers();
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
