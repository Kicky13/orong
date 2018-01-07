<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->model('m_log');
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['level'] == 1) {
                $log = $this->m_log->getDataLog();
                $myLog = $this->m_log->getCurrentLog($_SESSION['id']);
                $this->load->view('admin/dashboard', array('data' => $log, 'personal' => $myLog));
            } else if ($_SESSION['level'] == 2) {
                $this->load->view('pelatih/dashboard');
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
}
