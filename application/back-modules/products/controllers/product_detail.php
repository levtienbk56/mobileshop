<?php

class Product_detail extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model");
        ini_set('default_charset', 'UTF-8');                
    }

    public function viewDetail($id) {
        $data['title'] = "Chi tiết sản phẩm";        
        $data['data'] = "Dữ liệu quản trị";
        $data['template'] = "product_detail";
        
        $data['product'] = $this->product_model->getDetail($id);
        $data['categories'] = $this->product_model->getCategories();
        $data['suppliers'] = $this->product_model->getSuppliers();
        
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
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
        $inputArray[4] = "\"" . addslashes(filter_input(INPUT_POST, 'product_shortInfo')) . "\"";
        $inputArray[5] = "\"" . addslashes(filter_input(INPUT_POST, "product_description")) . "\"";
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
                
        $inputArray[9] = "\"" . filter_input(INPUT_POST, "product_saleOff") . "\"";
        $inputArray[10] = "\"" . filter_input(INPUT_POST, "product_quantity") . "\"";

        if (isset($_POST['product_status'])) {
            $inputArray[11] = 1;
        } else {
            $inputArray[11] = 0;
        }

        $inputArray[12] = "\"" . filter_input(INPUT_POST, "product_dateCreated") . "\"";
        $inputArray[13] = "\"" . filter_input(INPUT_POST, "product_categoryID") . "\"";
        $inputArray[14] = "\"" . filter_input(INPUT_POST, "product_supplierID") . "\"";

                                        
        //$this->product_model->update_product($inputArray);
        
        $ok_to_save = 1;

        if (isset($_POST['submit'])) { // Người dùng đã ấn submit
            if ($_FILES['file']['name'] != NULL) { // Đã chọn file
                // Tiến hành upload file
                if ($_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/png" || $_FILES['file']['type'] == "image/gif") {
                    // là file ảnh
                    // Tiến hành code upload
                    if ($_FILES['file']['size'] > 1048576) {
                        echo "File không được lớn hơn 1mb";
                    } else {
                        // file hợp lệ, tiến hành upload
                        $path = $_SERVER['DOCUMENT_ROOT'] . "/mobileshop/themes/front/img/products/data/"; // ảnh upload sẽ được lưu vào thư mục data
                        $tmp_name = $_FILES['file']['tmp_name'];
                        $name = $_FILES['file']['name'];
                        $type = $_FILES['file']['type'];
                        $size = $_FILES['file']['size'];
                        // Upload file
                        move_uploaded_file($tmp_name, $path . $name);
                        
                        
                        $inputArray[2] = "\"data/" . $name . "\"";
                    }
                } else {
                    // không phải file ảnh
                    echo "Kiểu file không hợp lệ";
                    $ok_to_save = 0;
                }
            } else {
                echo "Vui lòng chọn file";
            }
        }
        
        if($ok_to_save == 1)
            $this->product_model->update_product($inputArray);
        redirect(base_url() . "admin/index.php/products/product_detail/viewDetail/".$inputArray[0]);
    }
}
