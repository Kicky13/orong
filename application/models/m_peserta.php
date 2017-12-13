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
    public function getDetailRekrut($id)
    {
        $data = $this->db->query('SELECT * FROM tb_rekrutmen r JOIN tb_peserta p ON r.id_peserta = p.id_peserta WHERE id_rekrutmen = '.$id)->result_array();
        return $data[0];
    }
    public function editPeserta($id, $nama, $kelas, $absen, $ttl)
    {
        $this->db->set('nama_peserta', $nama);
        $this->db->set('kelas', $kelas);
        $this->db->set('no_absen', $absen);
        $this->db->set('tanggal_lahir', $ttl);
        $this->db->where('id_peserta', $id);
        $this->db->update('tb_peserta');
    }
    public function editRekrut($id, $posisi)
    {
        $this->db->set('id_posisi', $posisi);
        $this->db->where('id_rekrutmen', $id);
        $this->db->update('tb_rekrutmen');
    }
    public function deleteRekrut($id)
    {
        $this->db->where('id_rekrutmen', $id);
        $this->db->delete('tb_penilaian');
        $this->db->where('id_rekrutmen', $id);
        $this->db->delete('tb_rekrutmen');
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
        $id = $this->db->query('SELECT * FROM tb_peserta ORDER BY id_peserta DESC')->result_array();
        return $id[0]['id_peserta'];
    }
    public function addRekrutmen($posisi, $peserta)
    {
        $this->load->model('m_angkatan');
        $angkatan = $this->m_angkatan->getOpenAngkatan();
        $data = array(
            'id_rekrutmen' => null,
            'id_angkatan' => $angkatan,
            'id_posisi' => $posisi,
            'id_peserta' => $peserta,
            'skor' => null
        );
        $this->db->insert('tb_rekrutmen', $data);
    }
}
