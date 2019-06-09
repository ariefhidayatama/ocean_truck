<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('galeri_model');
    }

	public function index()
	{
		$silder = $this->galeri_model->getSlider();
		$client = $this->galeri_model->getClient();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$data =	array(
			'title' => 'PT. INDONESIA OCEAN TRUCK',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'slider' => $silder,
			'client' => $client,
		);
        $this->load->view('frontend/header',$data);
        $this->load->view('frontend/home',$data);
        $this->load->view('frontend/footer',$data);
	}

	public function about(){
        $artikel = $this->db->get_where('artikel',array('id' => 1))->row();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$data =	array(
			'title' => 'About us',
			'konfigurasi' => $konfig,
            'parent' => $parent,
            'artikel' => $artikel
		);

        $this->load->view('frontend/header',$data);
        $this->load->view('frontend/about',$data);
        $this->load->view('frontend/footer',$data);
	}
	
	public function contact(){
        $artikel = $this->db->get_where('artikel',array('id' => 3))->row();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$data =	array(
			'title' => 'Contact us',
			'konfigurasi' => $konfig,
            'parent' => $parent,
            'artikel' => $artikel
		);

        $this->load->view('frontend/header',$data);
        $this->load->view('frontend/contact',$data);
        $this->load->view('frontend/footer',$data);
	}
	
	public function equipment(){
        $artikel = $this->db->get_where('artikel',array('id' => 2))->row();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$crane = $this->galeri_model->getCrane();
		$prime = $this->galeri_model->getPrime();
		$barge = $this->galeri_model->getBarge();
		$forklift = $this->galeri_model->getForklift();
		$lowbed = $this->galeri_model->getLowbed();
		$data =	array(
			'title' => 'Equipment',
			'konfigurasi' => $konfig,
            'parent' => $parent,
			'artikel' => $artikel,
			'crane' => $crane,
			'prime' => $prime,
			'barge' => $barge,
			'forklift' => $forklift,
			'lowbed' => $lowbed
		);

        $this->load->view('frontend/header',$data);
        $this->load->view('frontend/equipment',$data);
        $this->load->view('frontend/footer',$data);
    }


}