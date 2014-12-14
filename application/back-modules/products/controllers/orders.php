<?php

class orders extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model_admin");
    }

    public function index() {
        $data['title'] = "Quản trị đơn hàng";
        $data['data'] = "";
        $data['template'] = "order_view";
        $data['orders'] = $this->product_model_admin->getOrders();
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
    
    public function viewDetail($orderID){
        $data['title'] = "Chi tiết đơn hàng";
        $data['data'] = "";
        $data['template'] = "order_detail_view";
        $data['orderID'] = $orderID;
        $data['items'] = $this->product_model_admin->getOrderDetail($orderID);
        
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
        
        
        
        
    }

}
