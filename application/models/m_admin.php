<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDataTable($id)
    {
        $data = $this->db->query('SELECT * FROM tb_user u JOIN tb_akses a ON u.id_akses = a.id_akses WHERE id_user != '.$id)->result_array();
        return $data;
    }
    public function getDataPosisi()
    {
        $data = $this->db->query('SELECT * FROM tb_posisi')->result_array();
        return $data;
    }
}
