<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('video_model');
    }

    public function index()
    {
        $search = $this->input->post('search');
        $offset = $this->uri->segment(4); //offset adalah untuk menentukan status data yang ingin ditampilkan
        $total = 10; // batas limit data yg akan di tampilkan
        $result = $this->video_model->listing($search,$offset,$total);

        $jml = $this->db->get('video');
        $data['jmldata'] = $jml->num_rows();

        $config['uri_segment'] = 4;
        $config['base_url'] = base_url().'admin/video/index/';
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
        $status = array('Draft','Publish');

        $data['halaman'] = $this->pagination->create_links();
        $data['title'] = 'Data Video';
        $data['result'] = $result;
        $data['status'] = $status;

        $this->load->view('admin/header',$data);
        $this->load->view('admin/video/index', $data);
        $this->load->view('admin/footer',$data);
    }

    public function validation_rule() {
        $this->form_validation->set_rules('judul', 'Nama Video', 'required',array('required' =>  'Nama Video Harus di isi'));
    }

    public function tambah()
    {
        $kategori = $this->video_model->get_dropdown();
        $status = array('Draft','Publish');
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()==FALSE) {
            // END validasi
            $data = array(
                'title'     => 'Tambah Video',
                'kategori'  => $kategori,
                'status'    => $status
            );
            $this->load->view('admin/header',$data);
            $this->load->view('admin/video/tambah', $data);
            $this->load->view('admin/footer',$data);
            //masuk database
        } else {
            $i = $this->input;
            $data = array(
                'judul'         => $i->post('judul'),
                'video'         => $i->post('video'),
                'status'        => $i->post('status'),
                'id_kategori'   => $i->post('id_kategori'),
            );

            $this->video_model->tambah($data);
            $this->session->set_flashdata('sukses','Data Video telah ditambahkan');
            redirect(base_url('admin/video'));
        }
    }

    public function edit($id)
    {
        $detail = $this->video_model->detail($id);
        $kategori = $this->video_model->get_dropdown();
        $status = array('Draft','Publish');
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()==FALSE) {
            // END validasi
            $data = array(
                'title'     => 'Edit Video', 
                'detail'    => $detail,
                'kategori'  => $kategori,
                'status'    => $status
            );
            $this->load->view('admin/header',$data);
            $this->load->view('admin/video/edit', $data);
            $this->load->view('admin/footer',$data);
            //masuk database
        } else {
            $i = $this->input;
            $data = array(
                'id'            => $id,
                'judul'         => $i->post('judul'),
                'video'         => $i->post('video'),
                'status'        => $i->post('status'),
                'id_kategori'   => $i->post('id_kategori'),
            );
            //var_dump($data); die();
            $this->video_model->edit($data);
            $this->session->set_flashdata('sukses','Data Video telah diedit');
            redirect(base_url('admin/video'));
        }
    }

    public function hapus($id)
    {
        $data = array('id' =>  $id);
        $this->video_model->delete($data);
        $this->session->set_flashdata('sukses','Data Video telah dihapus');
        redirect(base_url('admin/video'));
    }

}
