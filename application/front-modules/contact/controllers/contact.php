<?php

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = "Lien he";
        $data['data'] = "Contact";
        $data['template'] = "contact_view";
        $this->load->view("layout_webuser", $data);
    }

}
