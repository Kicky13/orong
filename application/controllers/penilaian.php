<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_penilaian');
    }
    public function tabelNilai($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $posisi = $this->m_penilaian->getPosisi();
                $data = $this->m_penilaian->getDataTable($id);
                $this->load->view('admin/viewPenilaian', array('data' => $data, 'posisi' => $posisi, 'id' => $id));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function getNilaiPersonal($rekrutmen, $kriteria)
    {
        $data = $this->m_penilaian->getNilaiPersonal($rekrutmen, $kriteria);
        echo $data;
    }
    public function inputNilai($id)
    {
        $cek = $this->m_penilaian->cekNilai($id);
        if ($cek <= 0){
            $this->nilaiBaru($id);
        } else {
            $this->nilaiSunting($id);
        }
    }
    public function nilaiBaru($id)
    {
        $kriteria = $this->m_penilaian->getKriteria($id);
        $this->load->view('admin/addPenilaian', array('kriteria' => $kriteria, 'id' => $id));
    }
    public function nilaiSunting($id)
    {
        $kriteria = $this->m_penilaian->getKriteria($id);
        $data = $this->m_penilaian->getDataedit($id);
        $this->load->view('admin/editPenilaian', array('kriteria' => $kriteria, 'data' => $data, 'id' => $id));
    }
    public function tambah($id)
    {
        $kriteria = $this->m_penilaian->getKriteria($id);
        foreach ($kriteria as $item){
            $nilai = $_POST[$item['id_kriteria']];
            $this->m_penilaian->insert($id, $item['id_kriteria'], $nilai);
        }
        redirect('/penilaian/tabelNilai/AL');
    }
    public function edit($id)
    {
        $this->m_penilaian->alterNilai($id);
        $kriteria = $this->m_penilaian->getKriteria($id);
        foreach ($kriteria as $item){
            $nilai = $_POST[$item['id_kriteria']];
            $this->m_penilaian->insert($id, $item['id_kriteria'], $nilai);
        }
        redirect('/penilaian/tabelNilai/AL');
    }
}
