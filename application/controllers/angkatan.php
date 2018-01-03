<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angkatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_angkatan');
    }
    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_angkatan->getDataTable();
                $n = $this->m_angkatan->countOpenAngkatan();
                $this->load->view('admin/viewAngkatan', array('data' => $data, 'open' => $n));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function formAdd()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $tahun = $this->m_angkatan->getYearSelect();
                $posisi = $this->m_angkatan->getPosisi();
                $this->load->view('admin/addAngkatan', array('tahun' => $tahun, 'posisi' => $posisi));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function formEdit($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $tahun = $this->m_angkatan->getYearSelect();
                $angkatan = $this->m_angkatan->getAngkatanEdit($id);
                $requires = $this->m_angkatan->getRequiresEdit($id);
                $this->load->view('admin/editAngkatan', array('tahun' => $tahun, 'posisi' => $requires, 'angkatan' => $angkatan));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function cekTahun()
    {
        $tahun = $_POST['tahun'];
        $cek = $this->m_angkatan->cekTahun($tahun);
        if ($cek >= 1){
            echo 'Tahun telah Digunakan';
        } else {
            echo 'Tahun tersedia';
        }
    }
    public function add()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $nama = $_POST['nama'];
                $tahun = $_POST['tahun'];
                $posisi = $this->m_angkatan->getPosisi();
                $id = $this->m_angkatan->addAngkatan($nama, $tahun);
                foreach ($posisi as $value){
                    $jumlah = $_POST['jumlah'.$value['id_posisi']];
                    $this->m_angkatan->addRequires($id, $value['id_posisi'], $jumlah);
                }
                redirect('/angkatan');
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function sunting($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $nama = $_POST['nama'];
                $posisi = $this->m_angkatan->getPosisi();
                $this->m_angkatan->editAngkatan($id, $nama);
                foreach ($posisi as $value){
                    $jumlah = $_POST['jumlah'.$value['id_posisi']];
                    $this->m_angkatan->editRequires($id, $value['id_posisi'], $jumlah);
                }
                redirect('/angkatan');
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function lockAngkatan($id)
    {
        $this->m_angkatan->lockAngkatan($id);
        redirect('/angkatan');
    }
    public function unlockAngkatan($id)
    {
        $this->m_angkatan->unlockAngkatan($id);
        redirect('/angkatan');
    }
    public function countAngkatan()
    {
        $open = $this->m_angkatan->countOpenAngkatan();
        echo $open;
    }
}
