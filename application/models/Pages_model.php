<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {

  	public function listing($search,$offset,$total)
  	{
      $this->db->select('a.*');
      $this->db->like('a.judul', $search);
      $this->db->or_like('a.isi',$search);
      $query = $this->db->get('page a',$total,$offset);
      return $query->result();

  	}

    // public function data_kategori()
    // {
    //   $query = $this->db->get('kategori_page');
    //   return $query->result();
    // }

    public function tambah($data)
    {
    	$this->db->insert('page',$data);
    }

    public function detail($id)
    {
      $query = $this->db->get_where('page',array('id' => $id));
      return $query->row();
    }

    public function edit($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('page',$data);
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('page');
    }
}
