<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->library('session');
    }
    public function index()
    {
        $data = $this->m_admin->getDataTable($_SESSION['id']);
        $this->load->view('admin/viewAdmin', array('data' => $data));
    }
    public function formAdd()
    {
        $posisi = $this->m_admin->getDataPosisi();
        $this->load->view('admin/addAdmin', array('posisi' => $posisi));
    }
    public function formEdit($id)
    {
        $this->load->view('admin/editAdmin');
    }
}
