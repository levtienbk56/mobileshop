<?php

class Categories extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model_admin");
    }

    public function index() {
        $data['title'] = "Danh mục sản phẩm";
        $data['data'] = "";
        $data['template'] = "category_view/index";
        $data['categories'] = $this->product_model_admin->getCategories();
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }
    private function check_isvalidated(){
        if (!$this->session->userdata('validated')) {
            redirect('admin_layout/index.php/login');
        }
    }
    
    function edit($id){
        $data['title'] = "Sửa danh mục";
        $data['data'] = "";
        $data['template'] = "category_view/edit";
        $data['category'] = $this->product_model_admin->getCategory($id);        
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }
    
    function addNew(){
        $data['title'] = "Tạo mới danh mục";
        $data['data'] = "";
        $data['template'] = "category_view/new";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }        
    }
    
    function create(){
        $data[0] = "\"" .$this->input->post('category_name'). "\"";
        $data[1] = "\"" .addslashes($this->input->post('category_description')). "\"";
        $data[2] = "\"" .$this->input->post('category_image'). "\""; 
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
                        
                        $data[2] = "\"data/" . $name . "\""; // khi upload file anh
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
        $this->product_model_admin->addCategory($data);
        redirect(base_url()."admin/index.php/products/categories");
    }
    
            
    function update(){
        $data[0] = $this->input->post('categoryID');
        $data[1] = "\"" .$this->input->post('category_name'). "\"";
        $data[2] = "\"" .addslashes($this->input->post('category_description')). "\"";
        $data[3] = "\"" .$this->input->post('category_image'). "\""; // khi cap nhat khong thay anh                
        
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
                        
                        $data[3] = "\"data/" . $name . "\""; // khi upload file anh
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
        $this->product_model_admin->updateCategory($data);
        redirect(base_url()."admin/index.php/products/categories/edit/".$data[0]);
    }
    
    function delete($id){
        $this->product_model_admin->deleteCategory($id);
        redirect(base_url() . 'admin/index.php/products/categories');
    }
}
