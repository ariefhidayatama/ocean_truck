<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data =	array('title' => 'Halaman Home');
        $this->load->view('frontend/header',$data);
        $this->load->view('frontend/home',$data);
        $this->load->view('frontend/footer');
	}

}