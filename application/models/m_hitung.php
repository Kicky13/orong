<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hitung extends CI_Model {

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
        $peserta = $this->db->query('SELECT * FROM tb_penilaian p JOIN tb_rekrutmen r ON p.id_rekrutmen = r.id_rekrutmen JOIN tb_peserta ps ON r.id_peserta = ps.id_peserta JOIN tb_posisi pos ON r.id_posisi = pos.id_posisi WHERE pos.id_posisi = "'.$id.'" AND id_angkatan = '.$angkatan.' GROUP BY ps.id_peserta')->result_array();
        $x = count($peserta);
        if ($x < 1){
            $data[0]['nama_peserta'] = '';
            $data[0]['nama_posisi'] = '';
            $kriteria = $this->getKriteria($id);
            foreach ($kriteria as $value){
                $data[0][$value['id_kriteria']] = '';
            }
        } else {
            $n = 0;
            foreach ($peserta as $value){
                $data[$n]['nama_peserta'] = $value['nama_peserta'];
                $data[$n]['nama_posisi'] = $value['nama_posisi'];
                $nilai = $this->getNilaiPersonal($value['id_rekrutmen']);
                foreach ($nilai as $item){
                    $data[$n][$item['id_kriteria']] = $item['nilai'];
                }
                $n++;
            }
        }
        return $data;
    }
    public function getKriteria($id)
    {
        $data = $this->db->query('SELECT * FROM tb_kriteria WHERE id_posisi = "'.$id.'"')->result_array();
        return $data;
    }
    public function getNilaiPersonal($id)
    {
        $data = $this->db->query('SELECT * FROM tb_penilaian WHERE id_rekrutmen = '.$id)->result_array();
        return $data;
    }
}
