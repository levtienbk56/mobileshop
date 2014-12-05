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
        if ($this->input->get('id') != '') {
            $id = $this->input->get('id') - 1;
            $price = $data['products'][$id]->price;
            $name = $data['products'][$id]->name;
            $insert = array(
                'id' => $id,
                'qty' => 1,
                'price' => $price,
                'name' => $name
            );

            $this->cart->insert($insert);
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

        $this->load->view("layout_webuser", $data);
    }

}
