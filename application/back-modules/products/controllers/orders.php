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
        $data['template'] = "order_view/order_view";
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
        $data['template'] = "order_view/order_detail_view";
        $data['orderID'] = $orderID;
        $data['items'] = $this->product_model_admin->getOrderDetail($orderID);
        
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }
    
    function edit($id){
        $data['title'] = "Sửa đơn đặt hàng";
        $data['data'] = "";
        $data['template'] = "order_view/edit";                
        $data['order'] = $this->product_model_admin->getOrderInfo($id);//thong tin nguoi dat hang        
        $data['items'] = $this->product_model_admin->getOrderDetail($id); //cac san pham
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }
    
    function updateInfo(){
        $this->product_model_admin->updateOrderInfo();
        $id = $this->input->post('orderID');        
        redirect(base_url()."admin/index.php/products/orders/edit/".$id);    
    }
    function updateItems(){
        $orderid = $this->input->post('orderID');
        $items = $this->product_model_admin->getOrderDetail($orderid);
        foreach ($items as $item){
            $quantity = $this->input->post($item->orderItemID);
            $this->product_model_admin->updateOrderItem($item->orderItemID,$quantity);
        }
        redirect(base_url()."admin/index.php/products/orders/edit/".$orderid);  
    }
    
    function deleteItem($orderid,$itemid){
        $this->product_model_admin->deleteOrderItem($itemid);
        redirect(base_url() . 'admin/index.php/products/orders/edit/'.$orderid);        
    }
}
