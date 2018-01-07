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
        $this->load->model('m_angkatan');
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $open = $this->m_angkatan->countOpenAngkatan();
                if ($open < 1){
                    $this->load->view('notFoundError');
                } else {
                    $data = $this->m_peserta->getDataTable($sort);
                    $this->load->view('admin/viewPeserta', array('data' => $data));
                }
            } elseif ($_SESSION['level'] == 2) {
                $open = $this->m_angkatan->countOpenAngkatan();
                if ($open < 1){
                    $this->load->view('notFoundError');
                } else {
                    $data = $this->m_peserta->getTablePelatih($sort, $_SESSION['role']);
                    $this->load->view('pelatih/peserta', array('data' => $data));
                }
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
            } elseif ($_SESSION['level'] == 2){
                $jumlah = $this->m_peserta->getCountPosisi();
                $data = $this->m_peserta->getDataPosisi();
                $posisi = $_SESSION['role'];
                $this->load->view('pelatih/addPeserta', array('data' => $data, 'jumlah' => $jumlah, 'posisi' => $posisi));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function viewTambahPeserta()
    {
        $this->load->model('m_angkatan');
        $open = $this->m_angkatan->countOpenAngkatan();
        if ($open > 0){
            $data = $this->m_peserta->getDataPosisi();
            $this->load->view('tambahPeserta', array('data' => $data));
        } else {
            $this->load->view('errorPendaftar');
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
            } elseif ($_SESSION['level'] == 2){
                $jumlah = $this->m_peserta->getCountPosisi();
                $data = $this->m_peserta->getDataPosisi();
                $detail = $this->m_peserta->getDetailRekrut($id);
                $this->load->view('pelatih/editPeserta', array('data' => $data, 'jumlah' => $jumlah, 'detail' => $detail));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function tambah()
    {
        $this->load->model('m_log');
        if (isset($_POST['posisi'])) {
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $absen = $_POST['absen'];
            $submitter = $_SESSION['name'];
            $tanggal = explode('/', $_POST['ttl']);
            $ttl = $tanggal[2].'-'.$tanggal[0].'-'.$tanggal[1];
            $posisi = $_POST['posisi'];
            $peserta = $this->m_peserta->getIDPeserta($nama, $kelas, $absen, $ttl);
            foreach ($posisi as $value) {
                $this->m_peserta->addRekrutmen($value, $peserta, $submitter);
            }
            $aktivitas = 'Menambahkan calon peserta '.$nama;
            $this->m_log->insert($_SESSION['id'], $aktivitas);
            redirect('peserta/table/id_rekrutmen');
        } else {
            redirect('peserta/viewTambah');
        }
    }
    public function pesertaTambah($submitter)
    {
        $this->load->model('m_log');
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $absen = $_POST['absen'];
        $tanggal = explode('/', $_POST['ttl']);
        $ttl = $tanggal[2].'-'.$tanggal[0].'-'.$tanggal[1];
        $posisi = $_POST['posisi'];
        $peserta = $this->m_peserta->getIDPeserta($nama, $kelas, $absen, $ttl);
        $this->m_peserta->addRekrutmen($posisi, $peserta, $submitter);
        if (isset($_SESSION['loggedIn'])){
            $aktivitas = 'Menambahkan calon peserta '.$nama;
            $this->m_log->insert($_SESSION['id'], $aktivitas);
            redirect('/peserta/table/id_rekrutmen');
        } else {
            redirect('peserta/viewTambahPeserta');
        }
    }
    public function deleteRekrut($id)
    {
        $this->load->model('m_log');
        $this->m_peserta->deleteRekrut($id);
        $aktivitas = 'Menghapus calon peserta';
        $this->m_log->insert($_SESSION['id'], $aktivitas);
        redirect('/peserta/table/id_rekrutmen');
    }
    public function edit($rekrut, $peserta)
    {
        $this->load->model('m_log');
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $absen = $_POST['absen'];
        $tanggal = explode('/', $_POST['ttl']);
        $ttl = $tanggal[2].'-'.$tanggal[0].'-'.$tanggal[1];
        $posisi = $_POST['posisi'];
        $aktivitas = 'Menyunting informasi calon peserta '.$nama;
        $this->m_log->insert($_SESSION['id'], $aktivitas);
        $this->m_peserta->editPeserta($peserta, $nama, $kelas, $absen, $ttl);
        $this->m_peserta->editRekrut($rekrut, $posisi);
        redirect('/peserta/table/id_rekrutmen');
    }
    public function validasiData()
    {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $absen = $_POST['absen'];
        $count = $this->m_peserta->validasiPeserta($nama, $kelas, $absen);
        if ($count == 0){
            echo 'Akun Tersedia';
        } else {
            echo 'Akun Telah Digunakan';
        }
    }
}
