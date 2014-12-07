<?php

class Product_detail extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model");
    }
          
    public function  viewDetail($id){
        $data['title'] = "Chi tiet sản phẩm";
        $data['data'] = "Dữ liệu quản trị";
        $data['template'] = "product_detail";
        $data['product'] = $this->product_model->getDetail($id);
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
