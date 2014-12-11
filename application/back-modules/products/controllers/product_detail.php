<?php

class Product_detail extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model");
        ini_set('default_charset', 'UTF-8');
    }

    public function viewDetail($id) {
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

    public function update_product() {
        $inputArray[0] = filter_input(INPUT_POST, "productID");
        $inputArray[1] = "\"" . filter_input(INPUT_POST, "product_name") . "\"";
        $inputArray[2] = "\"" . filter_input(INPUT_POST, "product_image") . "\"";
        $inputArray[3] = "\"" . filter_input(INPUT_POST, "product_price") . "\"";
        $inputArray[4] = "\"" . addslashes(filter_input(INPUT_POST, 'product_shortInfo')). "\"";
        $inputArray[5] = "\"" . addslashes(filter_input(INPUT_POST, "product_description")). "\"";
        $inputArray[6] = "\"" . addslashes(filter_input(INPUT_POST, "product_config")) . "\"";
        
        
        if (isset($_POST['product_isnew'])) {
            $inputArray[7] = 1;
        } else {
            $inputArray[7] = 0;
        }
        
        
        if (isset($_POST['product_isHot'])) {
            $inputArray[8] = 1;
        } else {
            $inputArray[8] = 0;
        }
                        
        //$inputArray[7] = "\"" . filter_input(INPUT_POST, "product_isnew") . "\"";
        //$inputArray[8] = "\"" . filter_input(INPUT_POST, "product_isHot") . "\"";
        $inputArray[9] = "\"" . filter_input(INPUT_POST, "product_saleOff") . "\"";
        $inputArray[10] = "\"" . filter_input(INPUT_POST, "product_quantity") . "\"";
        
        if (isset($_POST['product_status'])) {
            $inputArray[11] = 1;
        } else {
            $inputArray[11] = 0;
        }
        //$inputArray[11] = "\"" . filter_input(INPUT_POST, "product_status") . "\"";
        $inputArray[12] = "\"" . filter_input(INPUT_POST, "product_dateCreated") . "\"";
        $inputArray[13] = "\"" . filter_input(INPUT_POST, "product_categoryID") . "\"";
        $inputArray[14] = "\"" . filter_input(INPUT_POST, "product_supplierID") . "\"";

        //$this->product_model->update_product($inputArray);
        $this->product_model->test_update($inputArray);

        redirect(base_url() . "admin/index.php/products/product_detail/viewDetail/" . $inputArray[0]);
    }

}
