<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index($msg = NULL){
        $data['title'] = "Đăng nhập trang quản trị";
        $data['data'] = "Dữ liệu quản trị";                
        $data['msg'] = $msg;
        $this->load->view("login_view",$data);
    }
    
    public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Sai tên đăng nhập/mật khẩu</font><br />';
            $this->index($msg);
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('admin/index.php/home');
        }        
    }
    
    
    public function do_logout(){
        $this->session->sess_destroy();
        redirect('admin/index.php/login');
    }
    
}
?>