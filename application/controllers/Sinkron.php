<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sinkron extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->database();
        $this->load->model('dropdown_m');
    }
    function index()
    {
        $data['kelas'] = $this->dropdown_m->nm_kelas();
        $this->load->view('sinkron/depan', $data);
    }
    function siswa()
    {
        $id = $this->input->post('id_kelas');
        $data['siswa'] = $this->dropdown_m->nm_siswa($id);
        $this->load->view('sinkron/siswa', $data);
    }
}
