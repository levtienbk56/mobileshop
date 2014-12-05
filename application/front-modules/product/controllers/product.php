<?php

class Product extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = "Trang chủ";
        $data['data'] = "Dữ liệu trang home";
        $data['template'] = "product_home_view";
        $this->load->view("layout_webuser", $data);
    }

    function updatecart() {
        $contents = $this->input->post();

        foreach ($contents as $content) {
            $info = array(
                'rowid' => $content['rowid'],
                'qty' => $content['qty']
            );

            $this->cart->update($info);
        }
    }

    //Tim kiem theo product id
    function view_detail($productID) {
        $p = $this->product_model->getDetail($productID);
        $data['title'] = "Điện thoại " . $p->name;
        $data['data'] = "";
        $data['template'] = "detail_product_view";
        $data['product'] = $p; //$this->product_model->getDetail($productID);
        $this->load->view("layout_webuser", $data);
    }

    //Hien thi san pham theo danh muc
    function view_category($id) {
        $data['title'] = "Danh mục sản phẩm";
        $data['data'] = "Các sản phẩm trong danh mục";
        $data['template'] = "category_view";
        $this->load->view("layout_webuser", $data);
    }

    //xem gio hang
    function view_cart() {
        $data['title'] = "Xem gio hang";
        $data['data'] = "Cac san pham trong gio hang";
        $data['template'] = "cart_view";
        
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
        
                                        
        $data['products'] = $this->product_model->getAllProductCart();
        // Lets update our cart
        if ($this->input->post('update_cart')) {
            unset($_POST['update_cart']);
            $contents = $this->input->post();
            if ($contents != NULL) {
                foreach ($contents as $content) {
                    $info = array(
                        'rowid' => $content['rowid'],
                        'qty' => $content['qty']
                    );
                    $this->cart->update($info);
                }
            } else {
                echo "Gio hang rong";
            }
        }
                
        $data['products'] = $this->product_model->getAllProducts();                                          
        $this->load->view("layout_webuser", $data);
    }
    

    //Xem hoa don
    function view_receipt() {
        $data['title'] = "Xem hoa don";
        $data['data'] = "Xem hoa don";
        $data['template'] = "Receipt_view";
        $this->load->view("layout_webuser", $data);
    }

    //tao hoa don
    function make_bill() {
        $data['title'] = "Tao hoa don";
        $data['data'] = "tao hoa don";
        $data['template'] = "bill_view";
        $this->load->view("layout_webuser", $data);
    }

    
    function xem_bao_gia() {
        $data['title'] = "Xem bao gia";
        $data['data'] = "Xem bao gia";
        $data['template'] = "baogia_view";
        $this->load->view("layout_webuser", $data);
    }
    

}
