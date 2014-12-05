<?php

class Product_model extends CI_Model {

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
        $q = $this->db->query("SELECT productID, name, price, image FROM product ");
//        where name LIKE \"%" . $keyword . "%;\"
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return array();
    }

}
