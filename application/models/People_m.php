<?php
defined('BASEPATH') or exit('No direct script access allowed');

class People_m extends CI_Model
{
	public function getAllPeople()
	{
		return $this->db->get('peoples')->result_array();
	}

	public function getPeople($limit, $start, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('name', $keyword);
			$this->db->or_like('email', $keyword);
		}

		return $this->db->get('peoples', $limit, $start)->result_array();
	}

	public function countAllPeople()
	{
		return $this->db->get('peoples')->num_rows();
	}
}
