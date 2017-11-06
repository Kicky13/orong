<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penilaian extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getPosisi()
    {
        $data = $this->db->query('SELECT * FROM tb_posisi')->result_array();
        return $data;
    }
    public function getDataTable($id)
    {

    }
    public function getKriteria($id)
    {
        $data = $this->db->query('SELECT * FROM tb_kriteria WHERE id_posisi = "'.$id.'"')->result_array();
        return $data;
    }
}
