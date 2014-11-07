<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller { 
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }
    
    public function index(){
        $data['title'] = "Trang chủ quản trị";
        $data['data'] = "Dữ liệu quản trị";        
        $data['template'] = "home";
        if(! $this->session->userdata('validated')){
            redirect('admin/index.php/login');
        }
        else {
            $this->load->view("layout_admin",$data);
        }
        
    }
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('admin/index.php/login');
        }
    }        
}