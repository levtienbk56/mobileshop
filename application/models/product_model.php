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
        $q = $this->db->query("SELECT name, price, image FROM product ");
//        where name LIKE \"%" . $keyword . "%;\"
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return array();
    }

    function update_product($inputArray) {
        $id = $inputArray[0];
        $name = $inputArray[1];
        $image = $inputArray[2];
        $price = $inputArray[3];
        $shortInfo = addslashes( $inputArray[4]);
        $description = $inputArray[5];
        $config = addslashes($inputArray[6]);
        $isnew = $inputArray[7];
        $isHot = $inputArray[8];
        $saleOff = $inputArray[9];
        $quantity = $inputArray[10];
        $status = $inputArray[11];
        $dateCreated = $inputArray[12];
        $categoryID = $inputArray[13];
        $supplierID = $inputArray[14];
        
         $sql = "CALL proc_update_product(".$id.", ".$name.", ".$image.", ".$price.","
                 . " ".$shortInfo.", ".$description.", ".$config.", ".$isnew.", ".$isHot.","
                 . " ".$saleOff.", ".$quantity.", ".$status.", ".$dateCreated.", ".$categoryID.", ".$supplierID.")";
        $this->db->query($sql);  
         
        //echo $sql;
        
        //$id, $name, $image, $price, $shortInfo, $description, $config, $isnew, $isHot, 
        //$saleOff, $quantity, $status, $dateCreated, $categoryID, $supplierID
    }
                    
    function test_update($inputArray){
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
        $sql = "CALL proc_update_test($id,$name,$image,$price,$shortInfo,$description,$config,
            $isnew,$isHot,$saleOff,$quantity,$status,$dateCreated,$categoryID,$supplierID)";
        $this->db->query($sql);  
    }
}
