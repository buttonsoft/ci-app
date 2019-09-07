<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chained_dropdown_m extends CI_Model
{

    public function getDusun()
    {
        $q = $this->db->query("select * from dusun");
        return $q;
    }

    function getRt($id)
    {
        $q = $this->db->query("select * from rt left join dusun on rt.id_dusun=dusun.id_dusun where rt.id_dusun='$id'");
        return $q;
    }
}
