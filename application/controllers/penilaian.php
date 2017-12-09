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
}
