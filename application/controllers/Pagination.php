<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagination extends CI_Controller
{

	public function index()
	{
		$data['title'] = "Pagination";
		$this->load->model('people_m', 'people', true);

		// load library
		$this->load->library('pagination');

		// get data keyword
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('name', $data['keyword']);
		$this->db->or_like('email', $data['keyword']);
		$this->db->from('peoples');
		$config['total_rows'] = $this->db->count_all_results();
		// $config['total_rows'] = $this->people->countAllPeople();
		$config['per_page'] = 6;

		// initialize config
		$this->pagination->initialize($config);

		$data['total_rows'] = $config['total_rows'];
		$data['start'] = $this->uri->segment(3);
		$data['peoples'] = $this->people->getPeople($config['per_page'], $data['start'], $data['keyword']);
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/top_menu', $data);
		$this->load->view('pagination/index');
		$this->load->view('_partials/footer');
	}
}
