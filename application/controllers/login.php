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
        $this->load->model('m_log');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->m_login->getUserData($username, $password);
        $cek = count($user);
        if ($cek >= 1){
            $aktivitas = 'Login';
            $_SESSION['loggedIn'] = 1;
            $_SESSION['name'] = $user['nama'];
            $_SESSION['id'] = $user['id_user'];
            $_SESSION['level'] = $user['id_akses'];
            $_SESSION['role'] = $user['role'];
            $this->m_log->insert($user['id_user'], $aktivitas);
            redirect('/dashboard');
        } else {
            redirect('/login');
        }
    }
    public function logout()
    {
        $this->load->model('m_log');
        $aktivitas = 'Logout';
        $this->m_log->insert($_SESSION['id'], $aktivitas);
        unset($_SESSION['loggedIn']);
        unset($_SESSION['name']);
        unset($_SESSION['id']);
        unset($_SESSION['level']);
        redirect('/login');
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
