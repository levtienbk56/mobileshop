<?php

class Product_model extends CI_Model {

    function getAllProducts() {
        $q = $this->db->get("allproductsbrief_view");
//$sql = "SELECT * FROM Product WHERE categoryID = ?";
//$q = $this->db->query($sql, array(1,'1')); // so argument va gia tri truyen
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getTopNew() {
        $q = $this->db->get("new_product_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getTopSaleoff() {
        $q = $this->db->get("top_saleoff_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getTopHot() {
        $q = $this->db->get("top_hot_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getDetail($productID) {
        $this->db->where("productID", $productID);
        $q = $this->db->get("productdetail_view");
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return false;
    }

    function getCategories() {
        $q = $this->db->get("category");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getSuppliers() {
        $q = $this->db->get("supplier");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getAllProductCart() {
        $p = $this->db->get("productcart");
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
        $q = $this->db->get("allproductsbrief_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getPriceList() {
        $p = $this->db->get("products_price_list_view");
        if ($p->num_rows() > 0) {
            return $p->result();
        }
        return array();
    }

    function update_product($inputArray) {
        $id = $inputArray[0];
        $name = $inputArray[1];
        $image = $inputArray[2];
        $price = $inputArray[3];
        $shortInfo = $inputArray[4];
        $description = $inputArray[5];
        $config = $inputArray[6];
        $isnew = $inputArray[7];
        $isHot = $inputArray[8];
        $saleOff = $inputArray[9];
        $quantity = $inputArray[10];
        $status = $inputArray[11];
        $dateCreated = $inputArray[12];
        $categoryID = $inputArray[13];
        $supplierID = $inputArray[14];
//echo $shortInfo ;
        $sql = "CALL proc_update_product($id,$name,$image,$price,$shortInfo,$description,$config,
$isnew,$isHot,$saleOff,$quantity,$status,$dateCreated,$categoryID,$supplierID)";
        $this->db->query($sql);
    }

    function add_product($inputArray) {
        $name = $inputArray[0];
        $image = $inputArray[1];
        $price = $inputArray[2];
        $shortInfo = $inputArray[3];
        $description = $inputArray[4];
        $config = $inputArray[5];
        $isnew = $inputArray[6];
        $isHot = $inputArray[7];
        $saleOff = $inputArray[8];
        $quantity = $inputArray[9];
        $status = $inputArray[10];
        $dateCreated = $inputArray[11];
        $categoryID = $inputArray[12];
        $supplierID = $inputArray[13];
//echo $shortInfo ;
        $sql = "CALL proc_insert_product($name,$image,$price,$shortInfo,$description,$config,
$isnew,$isHot,$saleOff,$quantity,$status,$dateCreated,$categoryID,$supplierID)";
        $this->db->query($sql);
    }

    function delete_product($product_id) {
        $sql = "CALL proc_delete_product($product_id)";
        $this->db->query($sql);
    }

    function order_products($order_info) {
        $orderID = "\"" . $order_info[0] . "\"";
        $status = "0";
        $dateOrder = "\"" . $order_info[1] . "\"";
        $name = "\"" . $order_info[2] . "\"";
        $phonenumber = "\"" . $order_info[3] . "\"";
        $address = "\"" . $order_info[4] . "\"";
        $email = "\"" . $order_info[5] . "\"";
        $sql = "CALL proc_insert_order($orderID,$status,$dateOrder,$name,$phonenumber,$address,$email)";
        $this->db->query($sql);
    }

    function order_detail($detail_info) {
        $productID = $detail_info[0];
        $quantity = $detail_info[1];
        $unitPrice = $detail_info[2];
        $orderID = $detail_info[3];
        $sql = "CALL proc_insert_orderdetail($productID,$quantity,$unitPrice,$orderID)";
        $this->db->query($sql);
    }

    function getCustomerReview($productID) {
        $this->db->where("productID", $productID);
        $q = $this->db->get("customer_review_view");
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return array();
    }

}
