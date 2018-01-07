<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_log extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDataLog()
    {
        $today = $this->db->query('SELECT YEAR(CURDATE()) AS tahun, MONTH(CURDATE()) AS bulan, DAY(CURDATE()) AS tgl FROM `tb_log`')->result_array();
        $data = $this->db->query('SELECT *, TIME(tgl_aktivitas) AS jam, DATE(tgl_aktivitas) AS tgl FROM tb_log l JOIN tb_user u ON l.id_user = u.id_user WHERE YEAR(tgl_aktivitas) = '.$today[0]['tahun'].' AND MONTH(tgl_aktivitas) = '.$today[0]['bulan'].' AND DAY(tgl_aktivitas) = '.$today[0]['tgl'].' ORDER BY tgl_aktivitas DESC')->result_array();
        return $data;
    }
    public function getCurrentLog($user)
    {
        $today = $this->db->query('SELECT YEAR(CURDATE()) AS tahun, MONTH(CURDATE()) AS bulan, DAY(CURDATE()) AS tgl FROM `tb_log`')->result_array();
        $data = $this->db->query('SELECT *, TIME(tgl_aktivitas) AS jam, DATE(tgl_aktivitas) AS tgl FROM tb_log WHERE id_user = '.$user.' AND YEAR(tgl_aktivitas) = '.$today[0]['tahun'].' AND MONTH(tgl_aktivitas) = '.$today[0]['bulan'].' AND DAY(tgl_aktivitas) = '.$today[0]['tgl'].' ORDER BY tgl_aktivitas DESC')->result_array();
        return $data;
    }
    public function insert($user, $aktivitas)
    {
        $now = $this->db->query('SELECT NOW() AS today FROM tb_user')->result_array();
        $data = array(
            'id_log' => null,
            'id_user' => $user,
            'aktivitas' => $aktivitas,
            'tgl_aktivitas' => $now[0]['today']
        );
        $this->db->insert('tb_log', $data);
    }
}
