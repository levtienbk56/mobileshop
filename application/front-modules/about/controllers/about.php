<?php

class About extends CI_Controller{
     public function index(){
        $data['title'] = "Giới thiệu";
        $data['data'] = "Trang giới thiệu";        
	$data['template'] = "about_view";
        $this->load->view("layout_webuser",$data);                
    }
}