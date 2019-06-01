<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_artikel extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_artikel_model');
    }

    public function index()
    {
        $search = $this->input->post('search');
        $offset = $this->uri->segment(4); //offset adalah untuk menentukan urutan data yang ingin ditampilkan
        $total = 10; // batas limit data yg akan di tampilkan
        $result = $this->kategori_artikel_model->listing($search,$offset,$total);

        $jml = $this->db->get('kategori_artikel');
        $data['jmldata'] = $jml->num_rows();

        $config['uri_segment'] = 4;
        $config['base_url'] = base_url().'admin/kategori_artikel/index/';
        $config['per_page'] = $total;
        $config['total_rows'] = $jml->num_rows();

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['halaman'] = $this->pagination->create_links();
        $data['title'] = 'Kategori Artikel';
        $data['kategori'] = $result;

        $this->load->view('admin/header',$data);
        $this->load->view('admin/kategori_artikel/index', $data);
        $this->load->view('admin/footer');
    }

    public function validation_rule() {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|is_unique[kategori_artikel.nama_kategori]',array('required' =>  'Nama Kategori Harus di isi'));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required',array('required' =>  'Keterangan Harus di isi'));
    }

    public function tambah()
    {
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()==FALSE) {
            // END validasi
            $data = array('title' => 'Tambah Kategori Artikel');
            $this->load->view('admin/header');
            $this->load->view('admin/kategori_artikel/tambah', $data);
            $this->load->view('admin/footer');
            //masuk database
        } else {
            $i = $this->input;
            $data = array(
                'nama_kategori' => $i->post('nama_kategori'),
                'keterangan' => $i->post('keterangan'),
            );

            $this->kategori_artikel_model->tambah($data);
            $this->session->set_flashdata('sukses','Data Kategori Artikel telah ditambahkan');
            redirect(base_url('admin/kategori_artikel'));
        }
    }

    public function edit($id)
    {
        $detail = $this->kategori_artikel_model->detail($id);
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()==FALSE) {
            // END validasi
            $data = array('title' => 'Edit Kategori Artikel', 'detail' => $detail);
            $this->load->view('admin/header');
            $this->load->view('admin/kategori_artikel/edit', $data);
            $this->load->view('admin/footer');
            //masuk database
        } else {
            $i = $this->input;
            $data = array(
                'id' =>  $id,
                'nama_kategori' => $i->post('nama_kategori'),
                'keterangan' => $i->post('keterangan'),
            );
            //var_dump($data); die();
            $this->kategori_artikel_model->edit($data);
            $this->session->set_flashdata('sukses','Data Kategori Artikel telah diedit');
            redirect(base_url('admin/kategori_artikel'));
        }
    }

    public function hapus($id)
    {
        $data = array('id' =>  $id);
        $this->kategori_artikel_model->delete($data);
        $this->session->set_flashdata('sukses','Data Kategori Artikel telah dihapus');
        redirect(base_url('admin/kategori_artikel'));
    }

}
