<?php

class search extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    function index() {
        $data['title'] = "Tìm sản phẩm | ABC mobile shop";
        $data['data'] = "";
        $data['template'] = "search_view";

        $data['keyword'] = $_GET['keyword'];
        $data['products'] = $this->product_model->getProductSearchByName($data['keyword']);
        $this->load->view("layout_webuser", $data);
    }

    function search_filter() {
        $data['title']      = "Tìm sản phẩm | ABC mobile shop";
        $data['data']       = "";
        $data['template']   = "search_view";

        $keyword    = $_GET['keyword'];
        $priceRange = $_GET['price-range'];
        $category   = $_GET['category'];
        $os         = $_GET['os'];
        $screenSize = $_GET['screen-size'];

        if(!isset($_GET['wifi'])){
            $wifi = 'NULL';
        }else{
            $wifi = '';
        }
        if(!isset($_GET['_3g'])){
            $_3g = 'NULL';
        }else{
            $_3g = '';
        }
        if(isset($_GET['_2sim'])){
            $_2sim = 2;
        }else{
            $_2sim = 0;
        }
            
            
        
        switch ($priceRange) {
            case 1:
                $pricefrom = 0;
                $priceto = 1;
                break;
            case 2:
                $pricefrom = 1;
                $priceto = 3;
                break;
            case 3:
                $pricefrom = 3;
                $priceto = 5;
                break;
            case 4:
                $pricefrom = 5;
                $priceto = 10;
                break;
            case 5:
                $pricefrom = 10;
                $priceto = 10000;       //MAX_PRICE
                break;
            default :
                $pricefrom = 0;
                $priceto = 10000;       //MAX_PRICE
        }

        $data['products'] = $this->product_model->getProductSearchFilter($keyword, $category, $pricefrom, $priceto);
        $this->load->view("layout_webuser", $data);
    }

}
