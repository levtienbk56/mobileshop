<?php
class Product_model extends CI_Model {

    function getAllProducts() {
        $q = $this->db->get("allproductsbrief_view");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getCategoryProducts($category) {
        $this->db->where("category_id", $category);
        $q = $this->db->get("allproductsbrief_view");
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
        $this->db->insert('customer_review', $data);
    }  

    function getCategories() {
        $q = $this->db->get("category");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

    function getCategory($id) {
        $this->db->where("categoryID", $id);
        $q = $this->db->get("category");
        if ($q->num_rows() > 0) {
            return $q->row();
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
        $this->db->insert('customer_review', $data);

        }
        
        function getProductSearchFilter_post(){
        $category = $this->input->post('category');
        $os = $this->input->post('os');
        $price = $this->input->post('price');
        $wifi = $this->input->post('wifi');
        $_3g = $this->input->post('_3g');
        $order = $this->input->post('order');
        
        if ($category > 0) {
            $this->db->where("categoryID", $category);
        }
        if ($os != "") {
            $this->db->where("os", $os);
        }

        switch ($price){
            case 1: // <2 trieu
                $this->db->where("price <", 2);
                break;
            case 2: // 2-4 trieu
                $this->db->where("price >=", 2);
                $this->db->where("price <", 4);
                break;
            case 3: // 4-10 trieu
                $this->db->where("price >=", 4);
                $this->db->where("price <", 10);
                break;
            case 4: // >10 trieu
                $this->db->where("price >", 10);
        }
        
        if ($wifi == 1) {
            $this->db->where("wifi", 1);
        }
        if ($wifi == 2) {
            $this->db->where("wifi", 0);
        }

        if ($_3g == 1) {
            $this->db->where("3g", 1);
        }
        if($_3g == 2) {
            $this->db->where("3g", 0);
        }

        if ($order == "increase") {
            $this->db->order_by("price", "asc");
        } else {
            $this->db->order_by("price", "desc");
        }

        $q = $this->db->get("product");
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }

}
