<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfig_model extends CI_Model {

    public function listing($search,$offset,$total){
        $this->db->select('a.*');
        $this->db->like('a.nama_perusahaan', $search);
        $query = $this->db->get('konfigurasi a',$total,$offset);
        return $query->result();
    }

    public function tambah($data)
    {
    	$this->db->insert('konfigurasi',$data);
    }

    public function detail($id)
    {
      $query = $this->db->get_where('konfigurasi',array('id' => $id));
      return $query->row();
    }

    public function edit($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('konfigurasi',$data);
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('konfigurasi');
    }

}