<?php

class Suppliers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model("product_model_admin");
    }

    public function index() {
        $data['title'] = "Nhà cung cấp";
        $data['data'] = "";
        $data['template'] = "suppliers_view/index";
        $data['suppliers'] = $this->product_model_admin->getSuppliers();
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('admin_layout/index.php/login');
        }
    }

    function edit($id){
        $data['title'] = "Sửa nhà cung cấp";
        $data['data'] = "";
        $data['template'] = "suppliers_view/edit";
        $data['supplier'] = $this->product_model_admin->getSupplier($id);        
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }
    }
    
    function addNew(){
        $data['title'] = "Tạo mới danh mục";
        $data['data'] = "";
        $data['template'] = "suppliers_view/new";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("admin_layout/layout_admin", $data);
        }        
    }
    
    function create(){
        $data[0] = "\"" .$this->input->post('supplier_name'). "\"";
        $data[1] = "\"" .addslashes($this->input->post('suppler_description')). "\"";        
        $this->product_model_admin->addSupplier($data);
        redirect(base_url()."admin/index.php/products/suppliers");
    }
    
            
    function update(){
        $data[0] = $this->input->post('supplierID');
        $data[1] = "\"" .$this->input->post('supplier_name'). "\"";
        $data[2] = "\"" .addslashes($this->input->post('supplier_description')). "\"";
        $this->product_model_admin->updateSupplier($data);
        redirect(base_url()."admin/index.php/products/suppliers/edit/".$data[0]);
    }
    
    function delete($id){
        $this->product_model_admin->deleteSupplier($id);
        redirect(base_url() . 'admin/index.php/products/suppliers');
    }
    
}

