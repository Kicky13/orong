<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDataTable($id)
    {
        $data = $this->db->query('SELECT * FROM tb_user u JOIN tb_akses a ON u.id_akses = a.id_akses WHERE id_user != '.$id)->result_array();
        return $data;
    }
    public function getDataPosisi()
    {
        $data = $this->db->query('SELECT * FROM tb_posisi')->result_array();
        return $data;
    }
    public function getDetailUser($id)
    {
        $data = $this->db->query('SELECT * FROM tb_user WHERE id_user = '.$id)->result_array();
        return $data[0];
    }
    public function tambah($nama, $jabatan, $posisi, $email, $alamat, $password)
    {
        $data = array(
            'id_user' => null,
            'nama' => $nama,
            'role' => $posisi,
            'email' => $email,
            'alamat' => $alamat,
            'password' => $password,
            'id_akses' => $jabatan
        );
        $this->db->insert('tb_user', $data);
    }
    public function update($id, $nama, $email, $alamat, $password)
    {
        $this->db->set('nama', $nama);
        $this->db->set('email', $email);
        $this->db->set('alamat', $alamat);
        $this->db->set('password', $password);
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');
    }
}
