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
        $rekrut = $this->db->query('SELECT * FROM tb_rekrutmen r JOIN tb_posisi p ON r.id_posisi = p.id_posisi JOIN tb_peserta ps ON r.id_peserta = ps.id_peserta WHERE r.id_posisi = "'.$id.'"')->result_array();
        $kriteria = $this->db->query('SELECT * FROM tb_kriteria WHERE id_posisi = "'.$id.'"')->result_array();
        if (count($rekrut) <= 0){
            $data = null;
        } else {
            foreach ($rekrut as $item){
                $idr = $item['id_rekrutmen'];
                foreach ($kriteria as $value){

                }
                $data = array(
                    'id_rekrutmen' => $idr,
                    'nama_peserta' => $item['nama_peserta'],
                    'posisi' => $item['nama_posisi'],
                );
            }
        }
        return $data;
    }
    public function getKriteria($id)
    {
        $data = $this->db->query('SELECT * FROM tb_kriteria WHERE id_posisi = "'.$id.'"')->result_array();
        return $data;
    }
}
