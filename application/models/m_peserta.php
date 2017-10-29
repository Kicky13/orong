<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDataTable($sort)
    {
        $this->load->model('m_angkatan');
        $angkatan = $this->m_angkatan->getOpenAngkatan();
        $data = $this->db->query('SELECT * FROM tb_peserta p JOIN tb_rekrutmen r ON p.id_peserta = r.id_peserta JOIN tb_angkatan a ON r.id_angkatan = a.id_angkatan JOIN tb_posisi ps ON ps.id_posisi = r.id_posisi WHERE r.id_angkatan = '.$angkatan.' ORDER BY '.$sort)->result_array();
        return $data;
    }
    public function getDataPosisi()
    {
        $data = $this->db->query('SELECT * FROM tb_requires r JOIN tb_posisi p ON r.id_posisi = p.id_posisi')->result_array();
        return $data;
    }
    public function getCountPosisi()
    {
        $this->load->model('m_angkatan');
        $angkatan = $this->m_angkatan->getOpenAngkatan();
        $posisi = $this->db->query('SELECT * FROM tb_posisi')->result_array();
        foreach ($posisi as $value){
            $x = $this->db->query('SELECT * FROM tb_rekrutmen WHERE id_angkatan = '.$angkatan.' AND id_posisi = "'.$value['id_posisi'].'"')->num_rows();
            $y = $this->db->query('SELECT * FROM tb_requires WHERE id_angkatan = '.$angkatan.' AND id_posisi = "'.$value['id_posisi'].'"')->result_array();
            $data[] = array(
                'masuk' => $x,
                'butuh' => $y[0]['jumlah_require']
            );
        }
        return $data;
    }
    public function getIDPeserta($nama, $kelas, $absen, $ttl)
    {
        $data = array(
            'id_peserta' => null,
            'nama_peserta' => $nama,
            'kelas' => $kelas,
            'no_absen' => $absen,
            'tanggal_lahir' => $ttl
        );
        $this->db->insert('tb_peserta', $data);
        $id = $this->db->query('SELECT * FROM tb_peserta')->result_array();
    }
}
