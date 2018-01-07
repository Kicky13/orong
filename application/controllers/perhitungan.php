<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_hitung');
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
                    $data = $this->m_hitung->getDataTable($id);
                    $kriteria = $this->m_hitung->getKriteria($id);
                    $posisi = $this->m_hitung->getPosisi();
                    $limit = $this->m_hitung->getLimit($id);
                    $this->load->view('admin/viewHitung', array('id' => $id, 'posisi' => $posisi, 'data' => $data, 'kriteria' => $kriteria, 'limit' => $limit));
                }
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function hitungNilai($id)
    {
        $this->load->model('m_log');
        $aktivitas = 'Menghitung nilai keseluruhan calon peserta';
        $this->m_log->insert($_SESSION['id'], $aktivitas);
        $this->m_hitung->hitungNilai($id);
        redirect('/perhitungan/tabelNilai/'.$id);
    }
    public function simpanPerhitungan()
    {
        $this->load->model('m_log');
        $this->m_hitung->analisaAnggota();
        $aktivitas = 'Seleksi Data Calon Peserta Yang terdaftar';
        $this->m_log->insert($_SESSION['id'], $aktivitas);
        $rekrut = $this->m_hitung->onRequired();
        $anggota = $this->m_hitung->cekAnggota();
        if ($anggota > 0){
            echo 1;
        } elseif ($rekrut == 1) {
            echo 2;
        } else {
            $aktivitas = 'Menyimpan Data Calon Peserta Diterima';
            $this->m_log->insert($_SESSION['id'], $aktivitas);
            $this->m_hitung->getPosisiMember();
            $this->m_hitung->lockAngkatan();
            echo 3;
        }

    }
}
