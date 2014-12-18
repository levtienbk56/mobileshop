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
    
    function update($id){
        redirect(base_url()."admin/index.php/products/categories/edit/".$id);
    }
}
