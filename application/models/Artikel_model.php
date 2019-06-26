<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{

  public function listing($search, $offset, $total)
  {
    $this->db->select('a.*, b.nama_kategori');
    $this->db->join('kategori_artikel b', 'b.id = a.id_kategori');
    $this->db->like('a.judul', $search);
    $this->db->or_like('a.isi', $search);
    $query = $this->db->get('artikel a', $total, $offset);
    return $query->result();
  }

  public function data_kategori()
  {
    $query = $this->db->get('kategori_artikel');
    return $query->result();
  }

  public function tambah($data)
  {
    $this->db->insert('artikel', $data);
  }

  public function detail($id)
  {
    $query = $this->db->get_where('artikel', array('id' => $id));
    return $query->row();
  }

  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('artikel', $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('artikel');
  }

  public function getNews()
  {
    $limit = 1;
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get_where('artikel', ['id_kategori' => 11], $limit)->result();
    return $query;
  }

  public function loadNews($page)
  {
    $limit = 1;
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get_where('artikel', ['id_kategori' => 11, 'id <' => $page], $limit)->result();
    return $query;
  }

  public function getComment($id)
  {
    $query = $this->db->get_where('komentar', ['id_artikel' => $id, 'parent_id' => 0]);
    return $query;
  }

  public function commentAll($id_artikel)
  {
    $query = $this->db->get_where('komentar', ['id_artikel' => $id_artikel])->result();
    foreach ($query as $row) {
      $data[] = $row;
    }
    return $data;
  }

  public function subComment($id_artikel, $in_parent)
  {
    $query = $this->db->get_where('komentar', ['id_artikel' => $id_artikel, 'parent_id' => $in_parent])->result();
    foreach ($query as $row) {
      $data[] = $row;
    }
    return $data;
  }
}
