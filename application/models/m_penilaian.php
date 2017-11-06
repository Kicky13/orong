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
        $this->load->model('m_angkatan');
        $angkatan = $this->m_angkatan->getOpenAngkatan();
        $data = $this->db->query('SELECT * FROM tb_rekrutmen b JOIN tb_peserta c ON c.id_peserta = b.id_peserta JOIN tb_posisi d ON b.id_posisi = d.id_posisi WHERE b.id_posisi = "'.$id.'" AND b.id_angkatan = '.$angkatan)->result_array();
        return $data;
    }
    public function getKriteria($id)
    {
        $data = $this->db->query('SELECT * FROM tb_kriteria WHERE id_posisi = "'.$id.'"')->result_array();
        return $data;
    }
    public function getNilaiPersoonal($rekrutmen, $kriteria)
    {
        $data = $this->db->query('SELECT * FROM tb_penilaian WHERE id_rekrutmen = '.$rekrutmen.' AND id_kriteria = "'.$kriteria.'"')->result_array();
        if (count($data) >= 1){
            return $data[0]['nilai'];
        } else {
            $data = 0;
            return $data;
        }
    }
}
