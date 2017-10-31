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
    public function viewEdit($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $jumlah = $this->m_peserta->getCountPosisi();
                $data = $this->m_peserta->getDataPosisi();
                $detail = $this->m_peserta->getDetailRekrut($id);
                $this->load->view('admin/editPeserta', array('data' => $data, 'jumlah' => $jumlah, 'detail' => $detail));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function tambah()
    {
        if (isset($_POST['posisi'])) {
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $absen = $_POST['absen'];
            $tanggal = explode('/', $_POST['ttl']);
            $ttl = $tanggal[2].'-'.$tanggal[0].'-'.$tanggal[1];
            $posisi = $_POST['posisi'];
            $peserta = $this->m_peserta->getIDPeserta($nama, $kelas, $absen, $ttl);
            foreach ($posisi as $value) {
                $this->m_peserta->addRekrutmen($value, $peserta);
            }
            redirect('peserta/table/id_rekrutmen');
        } else {
            redirect('peserta/viewTambah');
        }
    }
    public function deleteRekrut($id)
    {
        $this->m_peserta->deleteRekrut($id);
        redirect('/peserta/table/id_rekrutmen');
    }
    public function edit($rekrut, $peserta)
    {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $absen = $_POST['absen'];
        $tanggal = explode('/', $_POST['ttl']);
        $ttl = $tanggal[2].'-'.$tanggal[0].'-'.$tanggal[1];
        $posisi = $_POST['posisi'];
        $this->m_peserta->editPeserta($peserta, $nama, $kelas, $absen, $ttl);
        $this->m_peserta->editRekrut($rekrut, $posisi);
        redirect('/peserta/table/id_rekrutmen');
    }
}
