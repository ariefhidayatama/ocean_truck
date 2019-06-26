<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klien_model extends CI_Model
{

    public function listing($search, $offset, $total)
    {
        $this->db->select('a.*, b.nama_kategori');
        $this->db->join('kategori_artikel b', 'b.id = a.id_kategori');
        $this->db->like('a.nama_perusahaan', $search);
        $query = $this->db->get('klien a', $total, $offset);
        return $query->result();
    }

    public function data_kategori()
    {
        // $this->db->where('a.id =','5');
        $query = $this->db->get('kategori_artikel a');
        $dropdowns = $query->result();
        foreach ($dropdowns as $dropdown) {
            $dropdownList[$dropdown->id] = $dropdown->nama_kategori;
        }
        $finaldropdown = array_merge(array('0' => 'Please Select'), $dropdownList);
        return $finaldropdown;
    }

    public function tambah($data)
    {
        $this->db->insert('klien', $data);
    }

    public function detail($id)
    {
        $query = $this->db->get_where('klien', array('id' => $id));
        return $query->row();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('klien', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('klien');
    }
}
