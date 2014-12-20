<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function validate() {
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        $this->db->where('username', $username);
        $this->db->where('password', md5($password));

        $query = $this->db->get("admin_accounts_view");

        // Let's check if there are any results
        if ($query->num_rows == 1) {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'userid' => $row->id,
                'username' => $row->username,
                'role' => $row->rolename,
                'roleid' => $row->roleID,
                'image' => $row->image,
                'confirm' => false,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }

        // If the previous process did not validate
        // then return false.
        return false;
    }

    function getAccount() {
        $username = $this->session->userdata('username');
        $this->db->where("username", $username);
        $q = $this->db->get('admin_accounts_view');
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return false;
    }

    function updatePass($id, $pass) {
        $sql = "call proc_update_pass($id,md5('$pass'))";
        $this->db->query($sql);
    }

    function updateAccountInfo($id, $username, $realname, $phone, $email, $image) {
        $sql = "call proc_update_account_info($id,$username,$realname,$phone,$email,$image)";
        $this->db->query($sql);
    }

}

?>