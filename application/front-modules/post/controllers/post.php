<?php

class post extends CI_Controller{
    public function index(){
        $data['title'] = "Tin tức";
        $data['data'] = "Dữ liệu tin tức";        
		$data['template'] = "home_post";
        $this->load->view("layout_webuser",$data);//PrecisoLayout
    }
    
    function view_post_detail($id){
        $data['title'] = "Chi tiet Tin tức";
        $data['data'] = "Dữ liệu chi tiet tin tức";        
	$data['template'] = "single_post";
        $this->load->view("layout_webuser",$data);//PrecisoLayout
    }
}

