<?php


class webinfo_model extends CI_Model{
    
    function getAbout(){
        $this->db->where("id",3);
        $q = $this->db->get('webinfo');
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return array();
    }
    
    function updateAbout(){
        $name = "\"".$this->input->post('name')."\"";
        $content = "\"".addslashes($this->input->post('content'))."\"";
        $sql = "call proc_update_about($name,$content);";
        $this->db->query($sql);
    }
}
