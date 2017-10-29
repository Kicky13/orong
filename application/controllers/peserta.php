<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_peserta');
        $this->load->library('session');
    }
    public function table($sort)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_peserta->getDataTable($sort);
                $this->load->view('admin/viewPeserta', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function viewTambah()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $jumlah = $this->m_peserta->getCountPosisi();
                $data = $this->m_peserta->getDataPosisi();
                $this->load->view('admin/addPeserta', array('data' => $data, 'jumlah' => $jumlah));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function tambah()
    {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $absen = $_POST['absen'];
        $ttl = $_POST['ttl'];
        $posisi = $_POST['posisi'];
        $peserta = $this->m_peserta->getIDPeserta($nama, $kelas, $absen, $ttl);
    }
}
