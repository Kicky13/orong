<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDataTable($sort)
    {
        $data = $this->db->query('SELECT * FROM tb_peserta p JOIN tb_rekrutmen r ON p.id_peserta = r.id_peserta JOIN tb_angkatan a ON r.id_angkatan = a.id_angkatan JOIN tb_posisi ps ON ps.id_posisi = r.id_posisi')->result_array();
        return $data;
    }
}
