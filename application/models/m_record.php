<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_record extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDataTable($angkatan, $posisi)
    {
        $data = $this->db->query('SELECT * FROM tb_rekrutmen r JOIN tb_penilaian p ON r.id_rekrutmen = p.id_rekrutmen WHERE id_posisi = "'.$posisi.'" AND id_angkatan = '.$angkatan)->result_array();
        return $data;
    }
    public function getDataAngkatan()
    {
        $data = $this->db->query('SELECT * FROM tb_angkatan WHERE status_angkatan = "Lock"')->result_array();
        return $data;
    }
    public function getDataPosisi()
    {
        $data = $this->db->query('SELECT * FROM tb_posisi')->result_array();
        return $data;
    }
    public function getKriteria($id)
    {
        $data = $this->db->query('SELECT * FROM tb_kriteria WHERE id_posisi = "'.$id.'"')->result_array();
        return $data;
    }
}
