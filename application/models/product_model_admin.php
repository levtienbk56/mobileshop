<?php

class product_model_admin  extends CI_Model{
    
    function getOrders(){
        $q = $this->db->get("order_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }
    function getOrderDetail($orderID){
        $this->db->where("orderID", $orderID);
        $q = $this->db->get("order_detail_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return false;
    }
}
