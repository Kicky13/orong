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
        $n = 0;
        foreach ($data as $item){
            $x = $this->db->query('SELECT * FROM tb_penilaian WHERE id_rekrutmen = '.$item['id_rekrutmen'])->num_rows();
            if ($x < 1){
                $data[$n]['status'] = 'kosong';
            } else {
                $data[$n]['status'] = 'cek';
            }
            $n++;
        }
        return $data;
    }
    public function getKriteria($id)
    {
        $posisi = $this->db->query('SELECT * FROM tb_rekrutmen WHERE id_rekrutmen = '.$id)->result_array();
        $data = $this->db->query('SELECT * FROM tb_kriteria WHERE id_posisi = "'.$posisi[0]['id_posisi'].'"')->result_array();
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
    public function cekNilai($id)
    {
        $data = $this->db->query('SELECT * FROM tb_penilaian WHERE id_rekrutmen = '.$id)->num_rows();
        return $data;
    }
    public function insert($rekrut, $kriteria, $nilai)
    {
        $data = array(
            'id_penilaian' => null,
            'id_rekrutmen' => $rekrut,
            'id_kriteria' => $kriteria,
            'nilai' => $nilai
        );
        $this->db->insert('tb_penilaian', $data);
    }
    public function getDataedit($id)
    {
        $nilai = $this->db->query('SELECT * FROM tb_penilaian WHERE id_rekrutmen = '.$id)->result_array();
        $data = array();
        foreach ($nilai as $value){
            $data[$value['id_kriteria']] = $value['nilai'];
        }
        return $data;
    }
    public function alterNilai($id)
    {
        $this->db->where('id_rekrutmen', $id);
        $this->db->delete('tb_penilaian');
    }
}
