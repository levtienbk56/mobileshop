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
        $this->load->view("webuser_layout/layout_webuser", $data);
    }
    
            
    function add_item_cart() {
        $id = $this->input->post('product_id');
        $products = $this->product_model->getAllProductCart();

        $cart_items = $this->cart->contents();
        $exist = 0;
        foreach ($cart_items as $item) {
            if ($item['id'] == $id) {
                $exist = 1;
            }
        }

        echo $exist;
        
        if ($exist != 1) {
            foreach ($products as $product) {
                if ($product->id == $id) {
                    $price = $product->price;
                    $name = $product->name;
                    $image = $product->image;
                    if ($this->input->post('soluong') > 1) {
                        $quantity = $this->input->post('soluong');
                    } else {
                        $quantity = 1;
                    }
                    $insert = array(
                        'id' => $id,
                        'qty' => $quantity,
                        'price' => $price,
                        'name' => $name,
                        'options' => array('img' => $image)
                    );
                    $this->cart->insert($insert);
                }
            }
        }            
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

    function delete_item_in_cart() {
        $id = $this->input->post('product_id');
        $contents = $this->cart->contents();        
        foreach ($contents as $content) {
            if ($content['id'] == $id) {
                echo "<script>alert(\"xoa $id\")</script>";
                $info = array(
                    'rowid' => $content['rowid'],
                    'qty' => 0
                );
                $this->cart->update($info);                
            }
        }        
    }

    
    function delete_item_cart($id) {        
        $data['title'] = "Xem giỏ hàng";
        $data['data'] = "";
        $data['template'] = "cart_view";                
        $contents = $this->cart->contents();        
        foreach ($contents as $content) {
            if ($content['id'] == $id) {                
                $info = array(
                    'rowid' => $content['rowid'],
                    'qty' => 0
                );
                $this->cart->update($info);                
            }
        }       
        //$this->load->view("webuser_layout/layout_webuser", $data);
        redirect(base_url()."index.php/product/view_cart");
    }

    
    //Tim kiem theo product id
<<<<<<< HEAD
    function view_detail($productID) {        
        $p = $this->product_model->getDetail($productID);        
=======
    function view_detail($productID) {
        $p = $this->product_model->getDetail($productID);
>>>>>>> 504751bab4f069f057ddcfd8ece4066c189b16ff
        $data['title'] = "Điện thoại " . $p->name;
        $data['data'] = "";
        $data['template']   = "detail_product_view";
        $data['product']    = $p; 
<<<<<<< HEAD
        $data['reviews'] = $this->product_model->getCustomerReview($productID);
=======
        $data['reviews']    =  $this->product_model->getCustomerReview($productID);                
>>>>>>> 504751bab4f069f057ddcfd8ece4066c189b16ff
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

    //Hien thi san pham theo danh muc
    function view_category($id) {
        $data['title'] = "Danh mục sản phẩm";
        $data['data'] = "Các sản phẩm trong danh mục";
        $data['template'] = "category_view";
        $data['category'] = $this->product_model->getCategory($id);
        $data['products'] = $this->product_model->getCategoryProducts($id);
        $this->load->view("webuser_layout/layout_webuser", $data);
    }
            

    function  view_all(){
        $data['title'] = "Danh mục sản phẩm";
        $data['data'] = "Các sản phẩm trong danh mục";
        $data['template'] = "allProducts_view";
        $data['products'] = $this->product_model->getAllProducts();
        $this->load->view("webuser_layout/layout_webuser", $data);
    }


    //xem gio hang
    function view_cart() {
        $data['title'] = "Xem giỏ hàng";
        $data['data'] = "Cac san pham trong gio hang";
        $data['template'] = "cart_view";

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
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

    //tao hoa don
    function make_bill() {
        $data['title'] = "Tạo hóa đơn";
        $data['data'] = "tao hoa don";
        $data['template'] = "bill_view";
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

    function xem_bao_gia() {
        $data['title'] = "Xem báo giá";
        $data['data'] = "";
        $data['products'] = $this->product_model->getPriceList();
        $data['template'] = "baogia_view";
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

    function generate_code() {
        $j = 0;
        $code = "c"; //phai khoi tao
        $date = date('m/d/Y h:i:s', time());
        for ($i = 0; $i < strlen($date); $i++) {
            if (is_numeric($date[$i])) {
                $code[$j] = $date[$i];
                $j++;
            }
        }
        return $code;
    }

    //xu ly dat hang:
    function order_product() {
        if (isset($_POST['phone_number'])) {
            $data['title'] = "Hóa đơn đặt hàng";
            $data['data'] = "";


            $j = 0;
            $code = "c"; //phai khoi tao
            $date = date('m/d/Y h:i:s', time());
            for ($i = 0; $i < strlen($date); $i++) {
                if (is_numeric($date[$i])) {
                    $code[$j] = $date[$i];
                    $j++;
                }
            }

            $orderID = $code;

            //Them vao bang Order
            $order_info[0] = $orderID;
            $order_info[1] = date("Y-m-d H:i:s");
            $order_info[2] = $_POST['fullname'];
            $order_info[3] = $_POST['phone_number'];
            $order_info[4] = $_POST['address'];
            $order_info[5] = $_POST['email'];
            $this->product_model->order_products($order_info);


            //Them vao bang Order_detail
            foreach ($this->cart->contents() as $item) {
                $detail_info[0] = $item['id'];
                $detail_info[1] = $item['qty'];
                $detail_info[2] = $item['price'];
                $detail_info[3] = $orderID;
                $this->product_model->order_detail($detail_info);
            }

            //chuyen du lieu de xem hoa don                
            $data['receipt_info_user'] = $order_info;
            $data['receipt_info_products'] = $this->cart->contents();
            $data['total'] = $this->cart->total();

            // xoa gio hang
            $this->cart->destroy();

            $data['template'] = "Receipt_view";
            $this->load->view("webuser_layout/layout_webuser", $data);
        } else {
            redirect(base_url());
        }
    }
    
    function add_review(){
        $this->product_model->add_review();
        echo 'success';
    }
    
    function search_filter() {        
        $data['title'] = "Danh mục sản phẩm";
        $data['data'] = "Các sản phẩm trong danh mục";
        $data['template'] = "category_view";
        $data['products'] = $this->product_model->getProductSearchFilter_post();        
        $this->load->view("reloadProduct_view", $data);
        
    }
}
