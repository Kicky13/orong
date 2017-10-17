<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            redirect('/dashboard');
        } else {
            $this->load->view('login');
        }
    }
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->m_login->getUserData($username, $password);
        $cek = count($user);
        if ($cek >= 1){
            $_SESSION['name'] = $user['nama'];
            $_SESSION['id'] = $user['id_user'];
            $_SESSION['level'] = $user['id_akses'];
            redirect('/dashboard');
        } else {
            redirect('/login');
        }
    }
    public function cekUsername()
    {
        $username = $_POST['username'];
        $cek = $this->m_login->cekUsername($username);
        if ($cek >= 1){
            echo 'Username Aktif';
        } else {
            echo 'Username Tidak Tersedia';
        }
    }
}
