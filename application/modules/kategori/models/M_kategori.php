<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

    }

    public function get($id = NULL){
      if($id){
        $this->db->where('id_kategori', $id);
        $this->db->limit(1);
      }
      $query = $this->db->get('kategori');

      return $query->result_array();
    }

    public function insert($data){
        $query = $this->db->insert('kategori',$data);
        return $query;
    }

    public function update_by_id($data, $id){
        $this->db->where('id_kategori','$id');
        $query = $this->db->update('kategori',$data);
    }

    public function delete_by_id($id){
        $this->db->where('id_kategori',$id);
        $query = $this->db->delete('kategori');
    }


}
