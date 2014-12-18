<?php

class product_model_admin extends CI_Model {

    function getAllProducts() {
        $q = $this->db->get("allproductsbrief_view");
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
    function getCategory($id){
        $this->db->where("categoryID",$id);
        $q = $this->db->get("category");
        if ($q->num_rows() > 0) {
            return $q->row();
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

    
    function getOrders() {
        $q = $this->db->get("order_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getOrderDetail($orderID) {
        $this->db->where("orderID", $orderID);
        $q = $this->db->get("order_detail_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return false;
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

}
