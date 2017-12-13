<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hitung extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getPosisi()
    {
        $data = $this->db->query('SELECT * FROM tb_posisi')->result_array();
        return $data;
    }
    public function getDataTable($id)
    {
        $this->load->model('m_angkatan');
        $angkatan = $this->m_angkatan->getOpenAngkatan();
        $peserta = $this->db->query('SELECT * FROM tb_penilaian p JOIN tb_rekrutmen r ON p.id_rekrutmen = r.id_rekrutmen JOIN tb_peserta ps ON r.id_peserta = ps.id_peserta JOIN tb_posisi pos ON r.id_posisi = pos.id_posisi WHERE pos.id_posisi = "'.$id.'" AND id_angkatan = '.$angkatan.' GROUP BY ps.id_peserta ORDER BY r.skor')->result_array();
        $x = count($peserta);
        if ($x < 1){
            $data[0]['nama_peserta'] = '';
            $data[0]['nama_posisi'] = '';
            $data[0]['skor'] = '';
            $kriteria = $this->getKriteria($id);
            foreach ($kriteria as $value){
                $data[0][$value['id_kriteria']] = '';
            }
        } else {
            $n = 0;
            foreach ($peserta as $value){
                $data[$n]['nama_peserta'] = $value['nama_peserta'];
                $data[$n]['nama_posisi'] = $value['nama_posisi'];
                $data[$n]['skor'] = $value['skor'];
                $nilai = $this->getNilaiPersonal($value['id_rekrutmen']);
                foreach ($nilai as $item){
                    $data[$n][$item['id_kriteria']] = $item['nilai'];
                }
                $n++;
            }
        }
        return $data;
    }
    public function getKriteria($id)
    {
        $data = $this->db->query('SELECT * FROM tb_kriteria WHERE id_posisi = "'.$id.'"')->result_array();
        return $data;
    }
    public function getNilaiPersonal($id)
    {
        $data = $this->db->query('SELECT * FROM tb_penilaian WHERE id_rekrutmen = '.$id)->result_array();
        return $data;
    }
    public function hitungNilai($id)
    {
        $this->load->model('m_angkatan');
        $angkatan = $this->m_angkatan->getOpenAngkatan();
        $peserta = $this->db->query('SELECT * FROM tb_penilaian p JOIN tb_rekrutmen r ON p.id_rekrutmen = r.id_rekrutmen JOIN tb_peserta ps ON r.id_peserta = ps.id_peserta WHERE id_posisi = "'.$id.'" AND id_angkatan = '.$angkatan.' GROUP BY r.id_rekrutmen')->result_array();
        $x = 0;
        foreach ($peserta as $n){
            $pst = $n['id_rekrutmen'];
            $nilai = $this->db->query('SELECT * FROM tb_penilaian p JOIN tb_kriteria k ON p.id_kriteria = k.id_kriteria WHERE id_rekrutmen = '.$pst)->result_array();
            $total = 0;
            foreach ($nilai as $item){
                if ($item['id_jenis'] == 1){
                    $data[$x][$item['id_kriteria']] = $this->hitungBenefit($angkatan, $item['id_kriteria'], $item['nilai']);
                    $total += $data[$x][$item['id_kriteria']];
                } else {
                    $data[$x][$item['id_kriteria']] = $this->hitungCost($angkatan, $item['id_kriteria'], $item['nilai']);
                    $total += $data[$x][$item['id_kriteria']];
                }
            }
            $this->inputSkor($pst, $total);
            $x++;
        }
    }
    public function inputSkor($id, $nilai)
    {
        $this->db->set('skor', $nilai);
        $this->db->where('id_rekrutmen', $id);
        $this->db->update('tb_rekrutmen');
    }
    public function hitungBenefit($angkatan, $kriteria, $nilai)
    {
        $bobot = $this->db->query('SELECT * FROM tb_kriteria WHERE id_kriteria = "'.$kriteria.'"')->result_array();
        $max = $this->db->query('SELECT MAX(nilai) AS max FROM tb_penilaian p JOIN tb_rekrutmen r ON p.id_rekrutmen = r.id_rekrutmen WHERE id_kriteria = "'.$kriteria.'" AND id_angkatan = '.$angkatan)->result_array();
        $nor = $nilai/$max[0]['max'];
        $hasil = $nor*$bobot[0]['bobot'];
        return $hasil;
    }
    public function hitungCost($angkatan, $kriteria, $nilai)
    {
        $bobot = $this->db->query('SELECT * FROM tb_kriteria WHERE id_kriteria = "'.$kriteria.'"')->result_array();
        $min = $this->db->query('SELECT MIN(nilai) AS min FROM tb_penilaian p JOIN tb_rekrutmen r ON p.id_rekrutmen = r.id_rekrutmen WHERE id_kriteria = "'.$kriteria.'" AND id_angkatan = '.$angkatan)->result_array();
        $nor = $min[0]['min']/$nilai;
        $hasil = $nor*$bobot[0]['bobot'];
        return $hasil;
    }
}
