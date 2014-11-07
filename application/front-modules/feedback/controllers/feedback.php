<?php
class Feedback extends CI_Controller{ 
    public function index(){
        $data['title'] = "Lien he";
        $data['data'] = "Contact";        
		$data['template'] = "feedback_view";
        $this->load->view("layout_webuser",$data);
    }
}