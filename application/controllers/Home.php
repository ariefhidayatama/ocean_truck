<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model');
		$this->load->model('artikel_model');
		$this->load->helper('text');
		$this->load->helper('tgl_indo');
	}

	public function index()
	{
		$silder = $this->galeri_model->getSlider();
		$client = $this->galeri_model->getClient();
		$konfig = $this->db->get('konfigurasi')->row();
		$shipping = $this->db->get_where('artikel', array('id' => 4))->row();
		$custom = $this->db->get_where('artikel', array('id' => 5))->row();
		$logistic = $this->db->get_where('artikel', array('id' => 6))->row();
		$stevedoring = $this->db->get_where('artikel', array('id' => 7))->row();
		$about = $this->db->get_where('artikel', array('id' => 1))->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$data =	array(
			'title' => 'PT. INDONESIA OCEAN TRUCK',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'slider' => $silder,
			'client' => $client,
			'shipping' => $shipping,
			'custom' => $custom,
			'logistic' => $logistic,
			'stevedoring' => $stevedoring,
			'about'	=> $about,
		);
		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/home', $data);
		$this->load->view('frontend/footer', $data);
	}

	public function about()
	{
		$artikel = $this->db->get_where('artikel', array('id' => 1))->row();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$data =	array(
			'title' => 'About us',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'artikel' => $artikel
		);

		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/about', $data);
		$this->load->view('frontend/footer', $data);
	}

	public function contact()
	{
		$artikel = $this->db->get_where('artikel', array('id' => 3))->row();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$data =	array(
			'title' => 'Contact us',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'artikel' => $artikel
		);

		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/contact', $data);
		$this->load->view('frontend/footer', $data);
	}

	public function equipment()
	{
		$artikel = $this->db->get_where('artikel', array('id' => 2))->row();
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

		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/equipment', $data);
		$this->load->view('frontend/footer', $data);
	}

	public function galeri_foto()
	{
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$foto_galeri = $this->galeri_model->getGaleriPhoto();
		$data =	array(
			'title' => 'Galeri Foto',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'foto_galeri' => $foto_galeri
		);
		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/foto', $data);
		$this->load->view('frontend/footer', $data);
	}

	public function galeri_video()
	{
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$video = $this->galeri_model->getGaleriVideo();
		$data =	array(
			'title' => 'Galeri Video',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'video' => $video
		);
		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/video', $data);
		$this->load->view('frontend/footer', $data);
	}

	public function news()
	{
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$news = $this->artikel_model->getNews();
		$data =	array(
			'title' => 'Artikel',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'news' => $news
		);
		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/news', $data);
		$this->load->view('frontend/footer', $data);
	}

	public function load_data()
	{
		$page = $_GET['id'];
		$artikel = $this->artikel_model->loadNews($page);
		foreach ($artikel as $value) {
			$tgl = tgl_indo($value->create_at);
			echo '<div class="blog-posts" id="content">
			<article class="post post-large">
			<div class="post-image">
					<div style="text-align:center">
						<div class="img-thumbnail">
							<img class="img-responsive" src="' . base_url() . 'assets/upload/image/' . $value->gambar . '" alt="">
						</div>
					</div>
			</div>

			<div class="post-date">
				<span class="day">' . substr($value->create_at, 8, 2) . '</span>
				<span class="month">' . substr($tgl, 10, 3) . '</span>
			</div>

			<div class="post-content">

				<h2 class="baris" kode="' . $value->id . '">' . $value->judul . '</h2>
				<p>' . substr($value->isi, 0, 250) . ' [...]</p>

				<div class="post-meta">
					<span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>
					<a href="' . base_url('home/detail-artikel/' . $value->id) . '" class="btn btn-xs btn-primary pull-right">Read more...</a>
				</div>

			</div>
		</article>
		</div>';
		}
		exit;
	}

	public function detail($id_artikel)
	{
		$artikel = $this->db->get_where('artikel', array('id' => $id_artikel))->row();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$count = $this->artikel_model->getComment($id_artikel)->num_rows();
		$comment = $this->showComment($id_artikel);
		$data =	array(
			'title' => 'Detail Artikel',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'artikel' => $artikel,
			'count'	=> $count,
			'comment' => $comment,
		);
		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/detail_artikel', $data);
		$this->load->view('frontend/footer', $data);
	}

	public function showComment($id_artikel)
	{
		$comment_all_id = array();
		$id_result = $this->artikel_model->commentAll($id_artikel);
		foreach ($id_result as $id_comment) {
			array_push($comment_all_id, $id_comment->parent_id);
		}
		return $this->in_parent(0, $id_artikel, $comment_all_id);;
	}

	public function in_parent($in_parent, $id_artikel, $comment_all_id)
	{
		$html = '';
		if (in_array($in_parent, $comment_all_id)) {
			$result = $this->artikel_model->subComment($id_artikel, $in_parent);
			$html .= $in_parent == 0 ? '<ul class="comments">' : '<ul>';

			foreach ($result as $res) {
				$html .= '<li><div class="comment">
				<div class="img-thumbnail">
					<img class="avatar" alt="" src="' . base_url('assets/porto/avatar.png') . '">
				</div>
				<div class="comment-block">
					<div class="comment-arrow"></div>
					<span class="comment-by">
						<strong>"' . $res->nama . '"</strong>
						<span class="pull-right">
							<span> <a href="#comment_form" class="reply" id="' . $res->id . '"><i class="fa fa-reply"></i> Reply</a></span>
						</span>
					</span>
					<p>"' . $res->comment . '"</p>
					<span class= "date pull-right">"' . tgl_indo($res->create_at) . '"</span>
				</div>
			</div>';
				$html .= $this->in_parent($res->id, $id_artikel, $comment_all_id);
				$html .= '</li>';
			}

			$html .= '</ul>';
		}
		return $html;
	}

	public function validation_rule()
	{
		$this->form_validation->set_rules('nama', 'Name', 'required', array('required' =>  'Nama Harus di isi'));
		$this->form_validation->set_rules('email', 'Email', 'required', array('required' =>  'Email Harus di isi'));
		$this->form_validation->set_rules('comment', 'Comment', 'required', array('required' =>  'Comment Harus di isi'));
	}

	public function add_comment($id)
	{
		// validasi
		$valid = $this->validation_rule();
		$this->form_validation->set_rules($valid);

		if ($this->form_validation->run() == FALSE) {
			redirect(base_url('home/detail-artikel/' . $id));
		} else {
			$data = array(
				'id_artikel' =>  $this->input->post('id_artikel'),
				'parent_id' => $this->input->post('parent_id'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'comment' => $this->input->post('comment'),
			);
			$this->db->insert('komentar', $data);
			$this->session->set_flashdata('sukses', 'Your comment success added');
			redirect(base_url('home/detail-artikel/' . $id));
		}
	}

	public function detail_info($id_artikel)
	{
		$artikel = $this->db->get_where('artikel', array('id' => $id_artikel))->row();
		$konfig = $this->db->get('konfigurasi')->row();
		$parent = $this->db->get_where('front_menu', array('parent' => 0))->result();
		$data =	array(
			'title' => 'Detail Artikel',
			'konfigurasi' => $konfig,
			'parent' => $parent,
			'artikel' => $artikel,
		);
		$this->load->view('frontend/header', $data);
		$this->load->view('frontend/detail_info', $data);
		$this->load->view('frontend/footer', $data);
	}
}
