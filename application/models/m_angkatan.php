<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_angkatan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getDataTable()
    {
        $data = $this->db->query('SELECT * FROM tb_angkatan')->result_array();
        return $data;
    }

    public function getYearSelect()
    {
        $tahun = $this->db->query('SELECT YEAR(now()) AS tahun FROM tb_user')->result_array();
        $data = array();
        $x = $tahun[0]['tahun'];
        for ($i = 1; $i <= 5; $i++) {
            $y = $tahun[0]['tahun']+$i;
            $data[]['tahun'] = $x . '/' . $y;
            $x++;
        }
        return $data;
    }

    public function getPosisi()
    {
        $data = $this->db->query('SELECT * FROM tb_posisi')->result_array();
        return $data;
    }
    public function cekTahun($tahun)
    {
        $data = $this->db->query('SELECT * FROM tb_angkatan WHERE tahun_angkatan = "'.$tahun.'"')->num_rows();
        return $data;
    }
    public function addAngkatan($nama, $tahun)
    {
        $data = array(
            'id_angkatan' => null,
            'nama_angkatan' => $nama,
            'tahun_angkatan' => $tahun,
            'status_angkatan' => 'Open'
        );
        $this->db->insert('tb_angkatan', $data);
        $id = $this->db->query('SELECT * FROM tb_angkatan ORDER BY id_angkatan DESC')->result_array();
        return $id[0]['id_angkatan'];
    }
    public function editAngkatan($id, $nama)
    {
        $this->db->set('nama_angkatan', $nama);
        $this->db->where('id_angkatan', $id);
        $this->db->update('tb_angkatan');
    }
    public function addRequires($angkatan, $posisi, $jumlah)
    {
        $data = array(
            'id_require' => null,
            'id_angkatan' => $angkatan,
            'id_posisi' => $posisi,
            'jumlah_require' => $jumlah
        );
        $this->db->insert('tb_requires', $data);
    }
    public function editRequires($angkatan, $posisi, $jumlah)
    {
        $this->db->set('jumlah_require', $jumlah);
        $this->db->where('id_angkatan', $angkatan);
        $this->db->where('id_posisi', $posisi);
        $this->db->update('tb_requires');
    }
    public function getAngkatanEdit($id)
    {
        $data = $this->db->query('SELECT * FROM tb_angkatan WHERE id_angkatan = '.$id)->result_array();
        return $data[0];
    }
    public function getRequiresEdit($id)
    {
        $data = $this->db->query('SELECT * FROM tb_requires r JOIN tb_posisi p ON r.id_posisi = p.id_posisi WHERE id_angkatan = '.$id)->result_array();
        return $data;
    }
}
