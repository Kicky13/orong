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
        $this->load->model('m_angkatan');
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $open = $this->m_angkatan->countOpenAngkatan();
                if ($open < 1){
                    $this->load->view('notFoundError');
                } else {
                    $posisi = $this->m_penilaian->getPosisi();
                    $data = $this->m_penilaian->getDataTable($id);
                    $this->load->view('admin/viewPenilaian', array('data' => $data, 'posisi' => $posisi, 'id' => $id));
                }
            } elseif ($_SESSION['level'] == 2){
                $open = $this->m_angkatan->countOpenAngkatan();
                if ($open < 1){
                    $this->load->view('notFoundError');
                } else {
                    $posisi = $this->m_penilaian->getPosisi();
                    $data = $this->m_penilaian->getDataTable($id);
                    $this->load->view('pelatih/penilaian', array('data' => $data, 'posisi' => $posisi, 'id' => $id));
                }
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
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $kriteria = $this->m_penilaian->getKriteria($id);
                $this->load->view('admin/addPenilaian', array('kriteria' => $kriteria, 'id' => $id));
            } elseif ($_SESSION['level'] == 2){
                $kriteria = $this->m_penilaian->getKriteria($id);
                $this->load->view('pelatih/addPenilaian', array('kriteria' => $kriteria, 'id' => $id));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function nilaiSunting($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $kriteria = $this->m_penilaian->getKriteria($id);
                $data = $this->m_penilaian->getDataedit($id);
                $this->load->view('admin/editPenilaian', array('kriteria' => $kriteria, 'data' => $data, 'id' => $id));
            } elseif ($_SESSION['level'] == 2){
                $kriteria = $this->m_penilaian->getKriteria($id);
                $data = $this->m_penilaian->getDataedit($id);
                $this->load->view('pelatih/editPenilaian', array('kriteria' => $kriteria, 'data' => $data, 'id' => $id));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function tambah($id)
    {
        $this->load->model('m_log');
        $kriteria = $this->m_penilaian->getKriteria($id);
        foreach ($kriteria as $item){
            $nilai = $_POST[$item['id_kriteria']];
            $this->m_penilaian->insert($id, $item['id_kriteria'], $nilai);
        }
        $aktivitas = 'Menambahkan nilai calon peserta';
        $this->m_log->insert($_SESSION['id'], $aktivitas);
        if ($_SESSION[''] == 1){
            redirect('/penilaian/tabelNilai/AL');
        } else {
            redirect('/penilaian/tabelNilai/'.$_SESSION['role']);
        }
    }
    public function edit($id)
    {
        $this->load->model('m_log');
        $this->m_penilaian->alterNilai($id);
        $kriteria = $this->m_penilaian->getKriteria($id);
        foreach ($kriteria as $item){
            $nilai = $_POST[$item['id_kriteria']];
            $this->m_penilaian->insert($id, $item['id_kriteria'], $nilai);
        }
        $aktivitas = 'Menyunting nilai calon peserta';
        $this->m_log->insert($_SESSION['id'], $aktivitas);
        if ($_SESSION['role'] == 1){
            redirect('/penilaian/tabelNilai/AL');
        } else {
            redirect('/penilaian/tabelNilai/'.$_SESSION['role']);
        }
    }
}
