<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dropdown_m extends CI_Model
{

    public function nm_kelas()
    {
        $q = $this->db->query("select * from tbl_kelas");
        return $q;
    }

    function nm_siswa($id)
    {
        $q = $this->db->query("select * from tbl_siswa_kelas left join tbl_kelas on tbl_siswa_kelas.id_kelas=tbl_kelas.id_kelas where tbl_siswa_kelas.id_kelas='$id'");
        return $q;
    }
}
