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

    function getConfigurationInfo($productID) {
        $this->db->where("productID", $productID);
        $q = $this->db->get("configurationinfo_view");
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return false;
    }

    function getCustomerReview($productID) {
        $this->db->where("productID", $productID);
        $q = $this->db->get("customerreview_view");
        if ($q->num_rows() > 0) {
            return $q->result_array();
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
        // sử dụng codeigniter helpers
        $this->load->database();
        $this->db->select("productID, name, price, image");
        $this->db->like("name", $keyword);
        $this->db->order_by("price desc");
        $q = $this->db->get("product");

        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return array();
    }

    function getProductSearchFilter($keyword, $category, $pricefrom, $priceto) {
        // dùng query
        $this->load->database();
        if ($category == 0) {
            $q = $this->db->query("SELECT productID, name, price, image FROM product WHERE name LIKE \"%" . $keyword . "%\" AND price>" . $pricefrom . " AND price<" . $priceto . " ORDER BY price DESC;");
        } else {
            $q = $this->db->query("SELECT productID, name, price, image FROM product WHERE name LIKE \"%" . $keyword . "%\" AND price>" . $pricefrom . " AND price<" . $priceto . " AND categoryID=" . $category . " ORDER BY price DESC;");
        }
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return array();
    }

    function add_review() {
        //$name = $_POST['name'];
        $productID = $this->input->post('productID');
        $name = $this->input->post('name');
        $comment = $this->input->post('comment');
        $vote = $this->input->post('vote');
        
        $data = array(
            'productID' => $productID,
            'name' => $name,
            'vote' => $vote,
            'comment' => $comment,
            'time' => date("h:i:s A d-m-Y"),
        );

        $this->db->insert('customerreview', $data);
    }

}
