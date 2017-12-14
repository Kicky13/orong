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
        $data = $this->m_hitung->getDataTable($id);
        $kriteria = $this->m_hitung->getKriteria($id);
        $posisi = $this->m_hitung->getPosisi();
        $limit = $this->m_hitung->getLimit($id);
        $this->load->view('admin/viewHitung', array('id' => $id, 'posisi' => $posisi, 'data' => $data, 'kriteria' => $kriteria, 'limit' => $limit));
    }
    public function hitungNilai($id)
    {
        $this->m_hitung->hitungNilai($id);
        redirect('/perhitungan/tabelNilai/'.$id);
    }
}
