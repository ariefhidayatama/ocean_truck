<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{
    public function save()
    {
        $pass = md5($this->input->post('new_pass'));
        $data = array (
            'password' => $pass
        );
        // var_dump($data); die();
        $this->db->where('id', $this->session->userdata('id'));
        $this->db->update('users', $data);
    }

    //fungsi untuk mengecek password lama :
    public function cek_old()
    {
        $old = md5($this->input->post('old_pass'));    
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->where('password',$old);
        $query = $this->db->get('users');
        return $query->result();;
    }
}