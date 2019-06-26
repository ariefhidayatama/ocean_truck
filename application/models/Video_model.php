<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_model extends CI_Model
{

    public function listing($search, $offset, $total)
    {
        $this->db->select('a.*, b.nama_kategori');
        $this->db->join('kategori_artikel b', 'b.id = a.id_kategori');
        $this->db->like('a.judul', $search);
        $query = $this->db->get('video a', $total, $offset);
        return $query->result();
    }

    // public function get_dropdown()
    // {
    //     $this->db->where('a.id =', '3');
    //     $query = $this->db->get('kategori_artikel a');
    //     $dropdowns = $query->result();
    //     // $dropdownList[''] = 'Please Select';
    //     foreach ($dropdowns as $dropdown) {
    //         $dropdownList[$dropdown->id] = $dropdown->nama_kategori;
    //     }
    //     $finaldropdown = array_merge(array('0' => 'Please Select'), $dropdownList);
    //     return $finaldropdown;
    // }

    public function get_dropdown()
    {
        $query = $this->db->get('kategori_artikel');
        $dropdowns = $query->result();
        $dropdownList[''] = 'Pilih Kategori';
        foreach ($dropdowns as $dropdown) {
            $dropdownList[$dropdown->id] = $dropdown->nama_kategori;
        }
        $finaldropdown = $dropdownList;
        return $finaldropdown;
    }

    public function tambah($data)
    {
        $this->db->insert('video', $data);
    }

    public function detail($id)
    {
        $query = $this->db->get_where('video', array('id' => $id));
        return $query->row();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('video', $data);
    }

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('video', $data);
    }

    public function getSlider()
    {
        $this->db->select('a.*');
        $this->db->from('video a');
        $this->db->where('a.kategori', 1);
        $this->db->where('a.status', 1);
        $query = $this->db->get()->result();
        return $query;
    }
}
