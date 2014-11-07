<?php
class Contact extends CI_Controller{ 
    public function index(){
        $data['title'] = "Lien he";
        $data['data'] = "Contact";        
		$data['template'] = "contact_view";
        $this->load->view("layout_webuser",$data);
    }
}