<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }

    public function index()
    {
        $search = $this->input->post('search');
        $offset = $this->uri->segment(4); //offset adalah untuk menentukan urutan data yang ingin ditampilkan
        $total = 10; // batas limit data yg akan di tampilkan
        $result = $this->menu_model->listing($search,$offset,$total);

        $jml = $this->db->get('front_menu');
        $data['jmldata'] = $jml->num_rows();

        $config['uri_segment'] = 4;
        $config['base_url'] = base_url().'admin/menu/index/';
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
        $data['title'] = 'Menu Frontend';
        $data['frontend'] = $result;

        $this->load->view('admin/header',$data);
        $this->load->view('admin/menu/index', $data);
        $this->load->view('admin/footer',$data);
    }

    public function validation_rule() {
        $this->form_validation->set_rules('menu_title', 'Nama Menu', 'required',array('required' =>  'Nama Menu Harus di isi'));
        $this->form_validation->set_rules('link', 'Link Menu', 'required',array('required' =>  'Link Menu Harus di isi'));
        $this->form_validation->set_rules('parent', 'Jenis Menu', 'required',array('required' =>  'Jenis Menu Harus di isi'));
        $this->form_validation->set_rules('menu_title_seo', 'SEO Menu', 'required',array('required' =>  'SEO Menu Harus di isi'));
    }

    public function tambah()
    {
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()==FALSE) {
            // END validasi
            $parent =  $this->menu_model->select_parent();
            $data = array('title' => 'Tambah Menu Frontend','parent' => $parent);
            $this->load->view('admin/header',$data);
            $this->load->view('admin/menu/tambah', $data);
            $this->load->view('admin/footer',$data);
            //masuk database
        } else {
            $i = $this->input;
            $data = array(
                'menu_title' => $i->post('menu_title'),
                'link' => $i->post('link'),
                'parent' => $i->post('parent'),
                'menu_title_seo' => $i->post('menu_title_seo'),
            );

            $this->menu_model->tambah($data);
            $this->session->set_flashdata('sukses','Data Menu FrontEnd telah ditambahkan');
            redirect(base_url('admin/menu'));
        }
    }

    public function edit($id)
    {
        $detail = $this->menu_model->detail($id);
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()==FALSE) {
            // END validasi
            $parent =  $this->menu_model->select_parent();
            $data = array('title' => 'Edit Menu FrontEnd', 'detail' => $detail,'parent' => $parent);
            $this->load->view('admin/header',$data);
            $this->load->view('admin/menu/edit', $data);
            $this->load->view('admin/footer',$data);
            //masuk database
        } else {
            $i = $this->input;
            $data = array(
                'id' =>  $id,
                'menu_title' => $i->post('menu_title'),
                'link' => $i->post('link'),
                'parent' => $i->post('parent'),
                'menu_title_seo' => $i->post('menu_title_seo'),
            );
            //var_dump($data); die();
            $this->menu_model->edit($data);
            $this->session->set_flashdata('sukses','Data Menu FrontEnd telah diedit');
            redirect(base_url('admin/menu'));
        }
    }

    public function hapus($id)
    {
        $data = array('id' =>  $id);
        $this->menu_model->delete($data);
        $this->session->set_flashdata('sukses','Data Menu FrontEnd telah dihapus');
        redirect(base_url('admin/menu'));
    }

}