<?php

class account extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("login_model");
        session_start();
    }

    public function index() {
        $data['title'] = "Trang chủ quản trị";
        $data['data'] = "Dữ liệu quản trị";
        $data['template'] = "profile_index";
        $data['account'] = $this->login_model->getAccount();
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

    function confirmToUpdate() {
        $pass = $this->security->xss_clean($this->input->post('password'));
        $account = $this->login_model->getAccount();
        if (md5($pass) == $account->password) {            
            $_SESSION["confirmed"] = true;
            redirect(base_url() . "admin/index.php/account/updateInfo");
        } else {
            $data['title'] = "Xác nhận lại mật khẩu";
            $data['data'] = "";
            $data['template'] = "nhaplaipass";
            $data['account'] = $this->login_model->getAccount();
            if (!$this->session->userdata('validated')) {
                redirect('admin/index.php/login');
            } else {
                $this->load->view("admin_layout/layout_admin", $data);
            }
        }
    }

    function updateInfo() {        
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        }       
        elseif (!$_SESSION['confirmed']) {            
            redirect(base_url() . "admin/index.php/account/confirmToUpdate");
        }
        else {
            $data['title'] = "Cập nhật tài khoản";
            $data['data'] = "";
            $data['template'] = "update_info_view";            
            $data['account'] = $this->login_model->getAccount();
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }
    
    function updateInfoDB() {
        $id = $this->session->userdata('userid');
        $username =  "\"".$this->input->post('login_username')."\"";
        $fullname = "\"".$this->input->post('fullname')."\"";
        $phonenumber = "\"". $this->input->post('phone')."\"";
        $image =  "\"".$this->input->post('profile_image')."\"";
        $email = "\"abc@gmail.com\"";
        
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
                        $path = $_SERVER['DOCUMENT_ROOT'] . "/mobileshop/themes/admin/images/"; 
                        //$path = $_SERVER['DOCUMENT_ROOT'] . "/mobileshop/themes/front/img/products/data/";
                        $tmp_name = $_FILES['file']['tmp_name'];
                        $name = $_FILES['file']['name'];
                        $type = $_FILES['file']['type'];
                        $size = $_FILES['file']['size'];
                        // Upload file
                        move_uploaded_file($tmp_name, $path . $name);                        
                        
                        $image = "\"" . $name . "\""; // khi upload file anh
                        //$image = "\"data/" . $name . "\""; // khi upload file anh
                        //echo $image;
                    }
                } else {
                    // không phải file ảnh
                    echo "Kiểu file không hợp lệ";                    
                }
            } else {
                echo "Vui lòng chọn file";
            }
        }        
        
        $this->login_model->updateAccountInfo($id,$username,$fullname,$phonenumber,$email,$image);
        
        redirect(base_url()."admin/index.php/account/updateInfo");
    }

    function changePass() {
        $data['title'] = "Trang chủ quản trị";
        $data['data'] = "";
        $data['template'] = "change_pass";
        $data['account'] = $this->login_model->getAccount();
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {            
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }
    
    function rechangePass() {
        $data['title'] = "Trang chủ quản trị";
        $data['data'] = "";
        $data['template'] = "rechange_pass";
        $data['message'] = "Bạn đã nhập mật khẩu cũ không chính xác";
        $data['account'] = $this->login_model->getAccount();
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {            
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }

    function updatePasstoDB() {        
        $old_pass = $this->input->post('old_pass');
        $new_pass = $this->input->post('new_pass');                
        $account = $this->login_model->getAccount();
        if(md5($old_pass)!=$account->password){            
            redirect(base_url()."admin/index.php/account/rechangePass");
        }            
        else{
            $this->login_model->updatePass($account->id,$new_pass);
            redirect(base_url()."admin/index.php/login/do_logout");
        }
    }

    function check_exist(){
        echo 0;
    }
    
}
