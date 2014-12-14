<?php

class Add_new_product extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model");
        ini_set('default_charset', 'UTF-8');
    }

    function index() {
        $data['title'] = "Thêm sản phẩm mới";
        $data['data'] = "Dữ liệu quản trị";
        $data['template'] = "add_new_product";
        
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

    function add_product() {        
        $inputArray[0] = "\"" . filter_input(INPUT_POST, "product_name") . "\"";
        $inputArray[1] = "\"" . filter_input(INPUT_POST, "product_image") . "\"";
        $inputArray[2] = "\"" . filter_input(INPUT_POST, "product_price") . "\"";
        $inputArray[3] = "\"" . addslashes(filter_input(INPUT_POST, 'product_shortInfo')) . "\"";
        $inputArray[4] = "\"" . addslashes(filter_input(INPUT_POST, "product_description")) . "\"";
        $inputArray[5] = "\"" . addslashes(filter_input(INPUT_POST, "product_config")) . "\"";

        if (isset($_POST['product_isnew'])) {
            $inputArray[6] = 1;
        } else {
            $inputArray[6] = 0;
        }


        if (isset($_POST['product_isHot'])) {
            $inputArray[7] = 1;
        } else {
            $inputArray[7] = 0;
        }

        $inputArray[8] = "\"" . filter_input(INPUT_POST, "product_saleOff") . "\"";
        $inputArray[9] = "\"" . filter_input(INPUT_POST, "product_quantity") . "\"";

        if (isset($_POST['product_status'])) {
            $inputArray[10] = 1;
        } else {
            $inputArray[10] = 0;
        }

        $inputArray[11] = "\"" . filter_input(INPUT_POST, "product_dateCreated") . "\"";
        $inputArray[12] = "\"" . filter_input(INPUT_POST, "product_categoryID") . "\"";
        $inputArray[13] = "\"" . filter_input(INPUT_POST, "product_supplierID") . "\"";
        

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


                        $inputArray[1] = "\"data/" . $name . "\"";
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

        if ($ok_to_save == 1) {
            $this->product_model->add_product($inputArray);
        }

        redirect(base_url() . "admin/index.php/products/products_list");
    }

}
