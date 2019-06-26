<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function listing($search, $offset, $total)
    {
        $this->db->select('a.*');
        $this->db->like('a.nama', $search);
        $this->db->or_like('a.username', $search);
        $query = $this->db->get('users a', $total, $offset);
        return $query->result();
    }

    // public function data_kategori()
    // {
    //     // $this->db->where('a.id =','5');
    //     $query = $this->db->get('kategori_artikel a');
    //     $dropdowns = $query->result();
    //     foreach ($dropdowns as $dropdown) {
    //         $dropdownList[$dropdown->id] = $dropdown->nama_kategori;
    //     }
    //     $finaldropdown = array_merge(array('0' => 'Please Select'), $dropdownList);
    //     return $finaldropdown;
    // }

    public function tambah($data)
    {
        $this->db->insert('users', $data);
    }

    public function detail($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
