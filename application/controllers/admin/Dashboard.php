<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['artikel'] = $this->db->get('artikel')->num_rows();
		$data['galeri'] = $this->db->get('galeri')->num_rows();
		$data['video'] = $this->db->get('video')->num_rows();
		$data['klien'] = $this->db->get('klien')->num_rows();
		$data['title'] = 'Dashboard';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/dashboard/index');
		$this->load->view('admin/footer');
	}
}
