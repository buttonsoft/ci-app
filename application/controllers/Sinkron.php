<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sinkron extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('sinkron_m');
    }
    function index()
    {
        $kelas = $this->sinkron_m;
        $data['kelas'] = $kelas->nm_kelas();
        $this->load->view('sinkron/depan', $data);
    }
    function siswa()
    {
        $siswa = $this->sinkron_m;
        $id = $this->input->post('id_kelas');
        $data['siswa'] = $siswa->nm_siswa($id);
        $this->load->view('sinkron/siswa', $data);
    }
}
