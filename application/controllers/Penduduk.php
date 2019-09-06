<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk_m');
    }

    public function index()
    {
        $penduduk = $this->penduduk_m;
        $data['penduduk'] = $penduduk->getAllPenduduk();
        // $data['dusun'] = $penduduk->getAllDusun();
        // $data['rt'] = $penduduk->getAllRt();
        // print_r($data['rt']);
        // die;
        $data['title'] = "Penduduk";
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/top_menu', $data);
        $this->load->view('penduduk/index');
        $this->load->view('_partials/footer');
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('dusun', 'Dusun', 'required');
        $this->form_validation->set_rules('rt', 'RT', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Penduduk";
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/top_menu', $data);
            $this->load->view('penduduk/add');
            $this->load->view('_partials/footer');
        } else {
            $this->penduduk->insertPenduduk();
            $this->session->set_flashdata('message', 'Data penduduk berhasil ditambahkan');
            redirect('penduduk');
        }
    }
}
