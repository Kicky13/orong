<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_record');
        $this->load->library('session');
    }
    public function index($angkatan, $posisi)
    {
        if (isset($_SESSION['loggedIn'])){
            $a = $this->m_record->getDataAngkatan();
            $p = $this->m_record->getDataPosisi();
            $kriteria = $this->m_record->getKriteria($posisi);
            $data = $this->m_record->getDataTable($angkatan, $posisi);
            if ($_SESSION['level'] == 1){
                $this->load->view('admin/viewRecord', array('data' => $data, 'posisi' => $p, 'angkatan' => $a, 'kriteria' => $kriteria, 'a' => $angkatan, 'p' => $posisi));
            } elseif ($_SESSION['level'] == 2){
                $this->load->view('pelatih/record', array('data' => $data, 'posisi' => $p, 'angkatan' => $a, 'kriteria' => $kriteria, 'a' => $angkatan, 'p' => $posisi));
            } else {
                $this->load->view('notFoundError');
            }
        } else {
            redirect('/login');
        }
    }
}
