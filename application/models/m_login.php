<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getUserData($username, $password)
    {
        $data = $this->db->query('SELECT * FROM tb_user WHERE email = "'.$username.'" AND password = "'.$password.'"')->result_array();
        return $data[0];
    }
    public function cekUsername($username)
    {
        $data = $this->db->query('SELECT * FROM tb_user WHERE email = "'.$username.'"')->num_rows();
        return $data;
    }
}
