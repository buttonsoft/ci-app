<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_m extends CI_Model
{
    public function getAllPenduduk()
    {
        return $this->db->get('penduduk')->result_array();
    }

    public function insertPenduduk()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $dusun = $this->input->post('dusun');
        $rt = $this->input->post('rt');
        $penduduk = [
            'nik' => $nik,
            'nama' => $nama,
            'alamat' => $alamat,
            'dusun' => $dusun,
            'rt' => $rt
        ];
        $this->db->insert('penduduk', $penduduk);
    }



    public function getAllDusun()
    {
        return $this->db->get('dusun')->result_array();
    }

    public function getAllRt()
    {
        return $this->db->get('rt')->result_array();
    }
}
