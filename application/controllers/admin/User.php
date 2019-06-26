<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $search = $this->input->post('search');
        $offset = $this->uri->segment(4); //offset adalah untuk menentukan urutan data yang ingin ditampilkan
        $total = 10; // batas limit data yg akan di tampilkan
        $result = $this->user_model->listing($search, $offset, $total);

        $jml = $this->db->get('users');
        $data['jmldata'] = $jml->num_rows();

        $config['uri_segment'] = 4;
        $config['base_url'] = base_url() . 'admin/user/index/';
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
        $data['title'] = 'Data User';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/footer', $data);
    }

    public function validation_rule()
    {
        $this->form_validation->set_rules('nama', 'Nama User', 'required', array('required' =>  'Nama User Tidak Boleh Kosong'));
        $this->form_validation->set_rules('email', 'Email User', 'required', array('required' =>  'Email User Tidak Boleh Kosong'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' =>  'Username Tidak Boleh Kosong'));
    }

    public function tambah()
    {
        $kategori = $this->user_model->data_kategori();
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()) {

            $config['upload_path']      = 'assets/upload/image/';
            $config['allowed_types']    = 'gif|jpg|png|svg';
            $config['max_size']         = '120000'; // KB    
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data                = array('uploads' => $this->upload->data());
                // Image Editor bikin thumbnail
                $config['image_library']    = 'gd2';
                $config['source_image']     = 'assets/upload/image/' . $upload_data['uploads']['file_name'];
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
                $slug = url_title($this->input->post('judul'), 'dash', TRUE);
                $data = array(
                    'judul'      =>  $i->post('judul'),
                    'slug'       =>  $slug,
                    'gambar'     =>  $upload_data['uploads']['file_name'],
                    'id_kategori' =>  $i->post('id_kategori'),
                    'isi'        =>  $i->post('isi')
                );
                // var_dump($data); die();
                $this->user_model->tambah($data);
                $this->session->set_flashdata('sukses', 'User berhasil ditambahkan');
                redirect(base_url('admin/user'));
            } else {
                $i    = $this->input;
                $slug = url_title($this->input->post('judul'), 'dash', TRUE);
                $data = array(
                    'judul'      =>  $i->post('judul'),
                    'slug'       =>  $slug,
                    'id_kategori' =>  $i->post('id_kategori'),
                    'isi'        =>  $i->post('isi')
                );
                // var_dump($data); die();
                $this->user_model->tambah($data);
                $this->session->set_flashdata('sukses', 'User berhasil ditambahkan');
                redirect(base_url('admin/user'));
            }
        }
        // End masuk database
        $data['title'] = 'Tambah User';
        $data['kategori'] = $kategori;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/user/tambah', $data);
        $this->load->view('admin/footer', $data);
    }

    public function edit($id)
    {
        $user = $this->user_model->detail($id);
        // validasi
        $valid = $this->validation_rule();
        $this->form_validation->set_rules($valid);

        if ($this->form_validation->run()) {

            if (!empty($_FILES['gambar']['name'])) {

                $config['upload_path']      = 'assets/upload/image/';
                $config['allowed_types']    = 'gif|jpg|png|svg';
                $config['max_size']         = '120000'; // KB    
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $upload_data                = array('uploads' => $this->upload->data());
                    // Image Editor bikin thumbnail
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = 'assets/upload/image/' . $upload_data['uploads']['file_name'];
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
                    if ($user->gambar != "") {
                        unlink('assets/upload/image/' . $user->gambar);
                        unlink('assets/upload/image/thumbs/' . $user->gambar);
                    }
                    // end hapus

                    $i      = $this->input;
                    $data = array(
                        'id'        =>  $id,
                        'nama'      =>  $i->post('nama'),
                        'email'     =>  $i->post('email'),
                        'username'  =>  $i->post('username'),
                        'gambar'    =>  $upload_data['uploads']['file_name'],
                    );
                    $this->user_model->edit($id, $data);
                    $this->session->set_flashdata('sukses', 'user berhasil di edit');
                    redirect(base_url('admin/user'));
                } // End masuk database
            } else {
                // update tanpa ganti gambar
                $i    = $this->input;
                $data = array(
                    'id'        =>  $id,
                    'nama'      =>  $i->post('nama'),
                    'email'     =>  $i->post('email'),
                    'username'  =>  $i->post('username'),
                );
                $this->user_model->edit($id, $data);
                $this->session->set_flashdata('sukses', 'User berhasil di edit');
                redirect(base_url('admin/user'));
            }
        }
        // End masuk database
        $data['title'] = 'Edit User';
        $data['user'] = $user;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/user/edit', $data);
        $this->load->view('admin/footer', $data);
    }

    public function hapus($id)
    {
        $data = $this->user_model->detail($id);
        // var_dump($data->gambar); die();
        if ($data->gambar != "") {
            unlink('assets/upload/image/' . $data->gambar);
            unlink('assets/upload/image/thumbs/' . $data->gambar);
        }
        $this->user_model->delete($id);
        $this->session->set_flashdata('sukses', 'Data Kategori User telah dihapus');
        redirect(base_url('admin/user'));
    }
}
