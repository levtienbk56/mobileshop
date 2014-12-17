<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // Controller mặc định cho trang chủ
    public function index() {
        // Load the cart library to use it.
        $data['products'] = $this->product_model->getAllProductCart();
        $data['new_products'] = $this->product_model->getTopNew();
        $data['saleoff_products'] = $this->product_model->getTopSaleoff();
        $data['hot_products'] = $this->product_model->getTopHot();

        if ($this->input->get('id') != '') {
            $id = $this->input->get('id');
            $cartID = 0;
            $exist = 0;
            foreach ($this->cart->contents() as $items) {
                if ($items['id'] == $id) {                    
                    echo '<script>';                        
                    echo 'alert("sản phẩm đã có trong giỏ hàng")';
                    echo '</script>';
                    $exist = 1;
                }
            }
          
            if ($exist == 0) {
                foreach ($data['products'] as $product) {
                    if ($product->id == $id) {
                        $price = $product->price;
                        $name = $product->name;
                        $image = $product->image;
                        $insert = array(
                            'id' => $id,
                            'qty' => 1,
                            'price' => $price,
                            'name' => $name,
                            'options' => array('img' => $image)
                        );
                        $this->cart->insert($insert);
                    }
                }        
            }
        }

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


        $data['title'] = "Trang chủ";
        $data['data'] = "Dữ liệu trang home";
        $data['products'] = $this->product_model->getAllProducts();
        
        $data['template'] = "home_view2";
        $this->load->view("webuser_layout/layout_webuser", $data);
    }

}
