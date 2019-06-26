<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategori_artikel_model extends CI_Model
{

  public function listing($search, $offset, $total)
  {
    if ($search) {
      $this->db->like('nama_kategori', $search);
      $this->db->or_like('keterangan', $search);
    }
    $query = $this->db->get('kategori_artikel', $total, $offset);
    return $query->result();
  }

  public function list_data()
  {
    $query = $this->db->get('kategori_artikel');
    return $query->result();
  }

  public function tambah($data)
  {
    $this->db->insert('kategori_artikel', $data);
  }

  public function detail($id)
  {
    $query = $this->db->get_where('kategori_artikel', array('id' => $id));
    return $query->row();
  }

  public function edit($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('kategori_artikel', $data);
  }

  public function delete($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->delete('kategori_artikel', $data);
  }
}
