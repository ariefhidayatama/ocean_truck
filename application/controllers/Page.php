<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function index(){
        // $seo =  $this->uri->segment(2);
        $artikel = $this->db->get_where('artikel',array('id' => 1))->row();
        // $data['artikel'] = $this->db->get('artikel')->result();
        // echo "<pre>";
        // print_r($data['artikel']); die();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$data =	array(
			'title' => 'PT. INDONESIA OCEAN TRUCK',
			'konfigurasi' => $konfig,
            'parent' => $parent,
            'artikel' => $artikel
		);

        $this->load->view('frontend/header',$data);
        $this->load->view('frontend/about',$data);
        $this->load->view('frontend/footer',$data);
    }

}