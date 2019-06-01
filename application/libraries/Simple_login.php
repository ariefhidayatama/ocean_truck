<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	// set super global
	var $CI = NULL;
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function login($username, $password)
	{
		// query pencocokan data
		$query = $this->CI->db->get_where('users',array(
				'username'	=>	$username,
				'password'	=>	md5($password)
			));
		//jika ada hasilnya
		if ($query->num_rows() == 1) {
			$row =	$this->CI->db->query('SELECT * FROM users WHERE username = "'.$username.'"');
			$admin	=	$row->row();
			$id		=	$admin->id;

			$nama	=	$admin->nama;
			$level	=	$admin->akses_level;

			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('akses_level',$level);
			$this->CI->session->set_userdata('nama',$nama);
			// $test = $this->CI->session->set_userdata('id_login',uniqid(rand()));
			$this->CI->session->set_userdata('id',$id);

			if ($this->CI->session->userdata('akses_level') == '1') {
				redirect(base_url('admin/dashboard'));
			}

		} else {
			$this->CI->session->set_flashdata('sukses','Maaf.. Username/ Password Salah');
			redirect(base_url('login'));
		}
		return false;
	}

	// cek login
	public function cek_login()
	{
		if ($this->CI->session->userdata('username') == '' && $this->CI->session->userdata('akses_level') == '') {
			$this->CI->session->set_flashdata('sukses','Maaf.. Silahkan Login Dulu');
			redirect(base_url('login'));
		}
	}

	// Logout
	public function logout()
	{
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		$this->CI->session->unset_userdata('nama');
		// $this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('sukses','Terima Kasih Anda Berhasil Logout');
		redirect(base_url('login'));
	}

}
