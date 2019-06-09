<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		/*load Model*/
		$this->load->helper('url');
		$this->load->model('login_model');
	} 

	public function index()
	{
		// validasi form
		$valid = $this->form_validation;
		$valid->set_rules('username','Username','required',
			array('required'	=>	'Username harus di isi'));

		$valid->set_rules('password','Password','required',
			array('required'	=>	'Password harus di isi'));

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($valid->run()) {
			$this->simple_login->login($username,$password, base_url('admin/dashboard'), base_url('login'));
		}

		$data = array('title'	=>	'Login Administrator');
		$this->load->view('admin/login_view',$data);
	}

	public function logout()
	{
		$this->simple_login->logout();
	}

    public function validation_rule() {
        $this->form_validation->set_rules('old_pass', 'Password Lama', 'required|min_length[6]',array('required' =>  'Password Lama Harus di isi'));
		$this->form_validation->set_rules('new_pass', 'Password Baru', 'required|min_length[6]',array('required' =>  'Password Baru Harus di isi'));
		$this->form_validation->set_rules('confirm_pass', 'Password Konfrimasi', 'required|matches[new_pass]');
    }

	public function change_pass()
	{
		// validasi
		$valid = $this->validation_rule();
		$this->form_validation->set_rules($valid);
		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Ubah Password';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/change_pass',$data);
			$this->load->view('admin/footer',$data);
		}else{
			$cek_old = $this->login_model->cek_old();
			// var_dump($cek_old); die();
			if ($cek_old == False){
				$this->session->set_flashdata('error','Old password not match!' );
				$data['title'] = 'Ubah Password';
				$this->load->view('admin/header',$data);
				$this->load->view('admin/change_pass',$data);
				$this->load->view('admin/footer',$data);
			}else{
				$this->login_model->save();
				$this->session->sess_destroy();
				$this->session->set_flashdata('error','Your password success to change, please relogin !' );
				$data = array('title'	=>	'Login Administrator');
				$this->load->view('admin/login_view',$data);
			}
		}
	}

}
