<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chained_dropdown extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('chained_dropdown_m');
    }

    public function index()
    {
        $dusun = $this->chained_dropdown_m;
        $data['dusun'] = $dusun->getDusun();
        $this->load->view('chained/index', $data);
    }

    public function getRt()
    {
        $rt = $this->chained_dropdown_m;
        $id = $this->input->post('id_dusun');
        $data['rt'] = $rt->getRt($id);
        $this->load->view('chained/list_rt', $data);
    }
}
