<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model{

    public function listing($search,$offset,$total)
    {
        if ($search) {
            $this->db->like('menu_title', $search);
        }
        $query = $this->db->get('front_menu',$total,$offset);
        return $query->result();
    }

    public function list_data()
    {
        $query = $this->db->get('front_menu');
        return $query->result();
    }

    public function tambah($data)
    {
        $this->db->insert('front_menu',$data);
    }

    public function detail($id)
    {
        $query = $this->db->get_where('front_menu',array('id' => $id));
        return $query->row();
    }

    public function edit($data)
    {
        $this->db->where('id',$data['id']);
        $this->db->update('front_menu',$data);
    }

    public function delete($data)
    {
        $this->db->where('id',$data['id']);
        $this->db->delete('front_menu',$data);
    }

    function select_parent(){
        return $this->db->get_where('front_menu',array('parent'=>0))->result();
    }

}