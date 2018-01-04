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
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_admin->getDataTable($_SESSION['id']);
                $this->load->view('admin/viewAdmin', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function formAdd()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $posisi = $this->m_admin->getDataPosisi();
                $this->load->view('admin/addAdmin', array('posisi' => $posisi));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function tambah()
    {
        if (isset($_POST['posisi'])){
            $posisi = $_POST['posisi'];
        } else {
            $posisi = '';
        }
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];
        $this->m_admin->tambah($nama, $jabatan, $posisi, $email, $alamat, $password);
        redirect('/admin');
    }
    public function formEdit($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_admin->getDetailUser($id);
                $this->load->view('admin/editAdmin', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function edit($id)
    {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];
        $this->m_admin->update($id, $nama, $email, $alamat, $password);
        redirect('/admin');
    }
}
