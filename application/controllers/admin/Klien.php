<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('klien_model');
    }

    public function index()
    {
        $status = array('Draft','Publish');
        $search = $this->input->post('search');
        $offset = $this->uri->segment(4); //offset adalah untuk menentukan urutan data yang ingin ditampilkan
        $total = 10; // batas limit data yg akan di tampilkan
        $result = $this->klien_model->listing($search,$offset,$total);

        $jml = $this->db->get('klien');
        $data['jmldata'] = $jml->num_rows();

        $config['uri_segment'] = 4;
        $config['base_url'] = base_url().'admin/klien/index/';
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
        $data['result'] = $result;
        $data['title'] = 'Data Klien';
        $data['status'] = $status;

        $this->load->view('admin/header',$data);
        $this->load->view('admin/klien/index', $data);
        $this->load->view('admin/footer',$data);
    }

    public function validation_rule() {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required',array('required' =>  'Nama Perusahaan Tidak Boleh Kosong'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',array('required' =>  'Alamat Tidak Boleh Kosong'));
        $this->form_validation->set_rules('telepon', 'Telepon', 'required',array('required' =>  'Telepon Tidak Boleh Kosong'));
        $this->form_validation->set_rules('email', 'Email', 'required',array('required' =>  'Email Tidak Boleh Kosong'));
    }

    public function tambah()
    {
        $status = array('Draft','Publish');
        $kategori = $this->klien_model->data_kategori();
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()) {
            
            $config['upload_path']      = 'assets/upload/image/';
            $config['allowed_types']    = 'gif|jpg|png|svg';
            $config['max_size']         = '120000'; // KB    
            $this->load->library('upload', $config);

            if( $this->upload->do_upload('gambar')) {
                $upload_data                = array('uploads' => $this->upload->data());
                // Image Editor bikin thumbnail
                $config['image_library']    = 'gd2';
                $config['source_image']     = 'assets/upload/image/'.$upload_data['uploads']['file_name']; 
                $config['new_image']        = 'assets/upload/image/thumbs/';
                $config['create_thumb']     = TRUE;
                $config['quality']          = "100%";
                $config['maintain_ratio']   = TRUE;
                $config['width']            = 360; // Pixel
                $config['height']           = 360; // Pixel
                $config['x_axis']           = 0;
                $config['y_axis']           = 0;
                $config['thumb_marker']     = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $i    = $this->input;
                $data = array(  'nama_perusahaan'   =>  $i->post('nama_perusahaan'),
                                'gambar'            =>  $upload_data['uploads']['file_name'],
                                'id_kategori'       =>  $i->post('id_kategori'),
                                'telepon'           =>  $i->post('telepon'),
                                'email'             =>  $i->post('email'),
                                'status'            =>  $i->post('status'),
                                'alamat'            =>  $i->post('alamat'),
                            );
                // var_dump($data); die();
                $this->klien_model->tambah($data);
                $this->session->set_flashdata('sukses','Klien berhasil ditambahkan');
                redirect(base_url('admin/klien'));
            } else {
                $i    = $this->input;
                $data = array(  'nama_perusahaan'   =>  $i->post('nama_perusahaan'),
                                'id_kategori'       =>  $i->post('id_kategori'),
                                'telepon'           =>  $i->post('telepon'),
                                'email'             =>  $i->post('email'),
                                'status'            =>  $i->post('status'),
                                'alamat'            =>  $i->post('alamat'),
                            );
                // var_dump($data); die();
                $this->klien_model->tambah($data);
                $this->session->set_flashdata('sukses','Klien berhasil ditambahkan');
                redirect(base_url('admin/klien'));
            }
        }
        // End masuk database
        $data['title'] = 'Tambah Klien';
        $data['kategori'] = $kategori;
        $data['status'] = $status;
        $this->load->view('admin/header',$data);
        $this->load->view('admin/klien/tambah',$data);
        $this->load->view('admin/footer',$data);
    }

    public function edit($id)
    {
        $klien = $this->klien_model->detail($id);
        $status = array('Draft','Publish');
        $kategori = $this->klien_model->data_kategori();
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()) {

            if (!empty($_FILES['gambar']['name'])) {

                $config['upload_path']      = 'assets/upload/image/';
                $config['allowed_types']    = 'gif|jpg|png|svg';
                $config['max_size']         = '120000'; // KB    
                $this->load->library('upload', $config);

                if($this->upload->do_upload('gambar')) {
                    $upload_data                = array('uploads' =>$this->upload->data());
                    // Image Editor bikin thumbnail
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = 'assets/upload/image/'.$upload_data['uploads']['file_name']; 
                    $config['new_image']        = 'assets/upload/image/thumbs/';
                    $config['create_thumb']     = TRUE;
                    $config['quality']          = "100%";
                    $config['maintain_ratio']   = TRUE;
                    $config['width']            = 360; // Pixel
                    $config['height']           = 360; // Pixel
                    $config['x_axis']           = 0;
                    $config['y_axis']           = 0;
                    $config['thumb_marker']     = '';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    // Hapus gambar lama
                    if ($klien->gambar != "") {
                        unlink('assets/upload/image/'.$klien->gambar);
                        unlink('assets/upload/image/thumbs/'.$klien->gambar);
                    }
                    // end hapus
                        
                    $i      = $this->input;
                    $data = array(  
                        'id'                =>  $id,
                        'nama_perusahaan'   =>  $i->post('nama_perusahaan'),
                        'id_kategori'       =>  $i->post('id_kategori'),
                        'telepon'           =>  $i->post('telepon'),
                        'email'             =>  $i->post('email'),
                        'status'            =>  $i->post('status'),
                        'alamat'            =>  $i->post('alamat'),
                        'gambar'            =>  $upload_data['uploads']['file_name'],
                    );
                    $this->klien_model->edit($id,$data);
                    $this->session->set_flashdata('sukses','klien berhasil di edit');
                    redirect(base_url('admin/klien'));
                } // End masuk database
            } else {
                // update tanpa ganti gambar
                $i    = $this->input;
                $data = array(  
                    'id'                =>  $id,
                    'nama_perusahaan'   =>  $i->post('nama_perusahaan'),
                    'id_kategori'       =>  $i->post('id_kategori'),
                    'telepon'           =>  $i->post('telepon'),
                    'email'             =>  $i->post('email'),
                    'status'            =>  $i->post('status'),
                    'alamat'            =>  $i->post('alamat'),
                );
                //var_dump($data); die();
                $this->klien_model->edit($id,$data);
                $this->session->set_flashdata('sukses','Klien berhasil di edit');
                redirect(base_url('admin/klien'));
            }
        }   
        // End masuk database
        $data['title'] = 'Edit Klien';
        $data['klien'] = $klien;
        $data['kategori'] = $kategori;
        $data['status'] = $status;
        $this->load->view('admin/header',$data);
        $this->load->view('admin/klien/edit', $data);
        $this->load->view('admin/footer',$data);
    }

    public function hapus($id)
    {
        $data = $this->klien_model->detail($id);
        // var_dump($data->gambar); die();
        if ($data->gambar != "") {
            unlink('assets/upload/image/'.$data->gambar);
            unlink('assets/upload/image/thumbs/'.$data->gambar);
        }
        $this->klien_model->delete($id);
        $this->session->set_flashdata('sukses','Data Kategori Klien telah dihapus');
        redirect(base_url('admin/klien'));
    }

}
