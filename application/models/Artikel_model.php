<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

  	public function listing($search,$offset,$total)
  	{
      $this->db->select('a.*, b.nama_kategori');
      $this->db->join('kategori_artikel b','b.id = a.id_kategori');
      $this->db->like('a.judul', $search);
      $this->db->or_like('a.isi',$search);
      $query = $this->db->get('artikel a',$total,$offset);
      return $query->result();

  	}

    public function data_kategori()
    {
      $query = $this->db->get('kategori_artikel');
      return $query->result();
    }

    public function tambah($data)
    {
    	$this->db->insert('artikel',$data);
    }

    public function detail($id)
    {
      $query = $this->db->get_where('artikel',array('id' => $id));
      return $query->row();
    }

    public function edit($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('artikel',$data);
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('artikel');
    }
}
