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
                   echo 'Halaman ini tidak tersedia untuk saat ini';
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
        $this->m_hitung->hitungNilai($id);
        redirect('/perhitungan/tabelNilai/'.$id);
    }
    public function simpanPerhitungan()
    {
        $this->m_hitung->analisaAnggota();
        $rekrut = $this->m_hitung->onRequired();
        $anggota = $this->m_hitung->cekAnggota();
        if ($anggota > 0){
            echo 1;
        } elseif ($rekrut == 1) {
            echo 2;
        } else {
            $this->m_hitung->getPosisiMember();
            $this->m_hitung->lockAngkatan();
            echo 3;
        }

    }
}
