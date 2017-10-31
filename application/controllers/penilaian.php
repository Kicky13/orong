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
                $kriteria = $this->m_penilaian->getKriteria($id);
                $this->load->view('admin/viewPenilaian', array('posisi' => $posisi, 'id' => $id, 'kriteria' => $kriteria));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
}