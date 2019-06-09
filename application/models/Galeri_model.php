<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model {

  	public function listing($search,$offset,$total)
  	{
      $this->db->select('a.*, b.nama_kategori');
      $this->db->join('kategori_artikel b','b.id = a.id_kategori');
      $this->db->like('a.judul', $search);
      $query = $this->db->get('galeri a',$total,$offset);
      return $query->result();

  	}

    public function get_dropdown()
    {
        $query = $this->db->get('kategori_artikel');
        $dropdowns = $query->result();
        foreach ($dropdowns as $dropdown) {
            $dropdownList[$dropdown->id] = $dropdown->nama_kategori;
        }
        $finaldropdown = $dropdownList;
        return $finaldropdown;
    }

    public function tambah($data)
    {
    	$this->db->insert('galeri',$data);
    }

    public function detail($id)
    {
      $query = $this->db->get_where('galeri',array('id' => $id));
      return $query->row();
    }

    public function edit($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('galeri',$data);
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('galeri');
    }

    public function getSlider(){
        $this->db->select('a.*');
        $this->db->from('galeri a');
        $this->db->where('a.id_kategori', 4);
        $this->db->where('a.status', 1);
        $query = $this->db->get()->result();
        return $query;
    }

    public function getCrane(){
        $this->db->select('a.*');
        $this->db->join('kategori_artikel b','b.id = a.id_kategori');
        $this->db->where('a.id_kategori', 6);
        $this->db->where('a.status', 1);
        $query = $this->db->get('galeri a');
        return $query->result();
    }

    public function getPrime(){
        $this->db->select('a.*');
        $this->db->join('kategori_artikel b','b.id = a.id_kategori');
        $this->db->where('a.id_kategori', 7);
        $this->db->where('a.status', 1);
        $query = $this->db->get('galeri a');
        return $query->result();
    }

    public function getBarge(){
        $this->db->select('a.*');
        $this->db->join('kategori_artikel b','b.id = a.id_kategori');
        $this->db->where('a.id_kategori', 8);
        $this->db->where('a.status', 1);
        $query = $this->db->get('galeri a');
        return $query->result();
    }

    public function getForklift(){
        $this->db->select('a.*');
        $this->db->join('kategori_artikel b','b.id = a.id_kategori');
        $this->db->where('a.id_kategori', 9);
        $this->db->where('a.status', 1);
        $query = $this->db->get('galeri a');
        return $query->result();
    }

    public function getLowbed(){
        $this->db->select('a.*');
        $this->db->join('kategori_artikel b','b.id = a.id_kategori');
        $this->db->where('a.id_kategori', 10);
        $this->db->where('a.status', 1);
        $query = $this->db->get('galeri a');
        return $query->result();
    }

    public function getClient(){
        $this->db->select('a.*');
        $this->db->join('kategori_artikel b','b.id = a.id_kategori');
        $this->db->where('a.id_kategori', 5);
        $this->db->where('a.status', 1);
        $query = $this->db->get('klien a');
        return $query->result();
    }

}
