<?php

class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getAllProducts() {
        $q = $this->db->get("allProductsBrief_view");
        //$sql = "SELECT * FROM Product WHERE categoryID = ?";
        //$q = $this->db->query($sql, array(1,'1')); // so argument va gia tri truyen
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getDetail($productID) {
        $this->db->where("productID", $productID);
        $q = $this->db->get("productDetail_view");
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return false;
    }

    function getAllProductCart() {
        $p = $this->db->get("productCart");
        if ($p->num_rows() > 0) {
            return $p->result();
        }
        return array();
    }

    function getProductSearchByName($keyword) {
//        $q = $this->db->query("SELECT productID, name, price, image FROM product ");
//        where name LIKE \"%" . $keyword . "%;\"
        $this->load->database();
        $this->db->select("productID, name, price, image");
        $this->db->like("name", $keyword);
        $q = $this->db->get("product");

        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return array();
    }

    function getProductSearchFilter($keyword, $category, $pricefrom, $priceto) {
        $this->load->database();
        if ($category == 0) {
            $q = $this->db->query("SELECT productID, name, price, image FROM product WHERE name LIKE \"%" . $keyword . "%\" AND price>" . $pricefrom . " AND price<" . $priceto . ";");
        }
        else{
            $q = $this->db->query("SELECT productID, name, price, image FROM product WHERE name LIKE \"%".$keyword."%\" AND price>".$pricefrom." AND price<".$priceto." AND categoryID=".$category.";");
        }
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return array();
    }

}
