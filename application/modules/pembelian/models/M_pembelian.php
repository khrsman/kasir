<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembelian extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

    }

    public function get($id = NULL){
      if($id){
        $this->db->where('id_pembelian', $id);
        $this->db->limit(1);
      }
      $query = $this->db->get('pembelian');

      return $query->result_array();
    }

    public function insert($data){
        $query = $this->db->insert('pembelian',$data);
        return $query;
    }

    public function update_by_id($data, $id){
        $this->db->where('id_pembelian','$id');
        $query = $this->db->update('pembelian',$data);
    }

    public function delete_by_id($id){
        $this->db->where('id_pembelian',$id);
        $query = $this->db->delete('pembelian');
    }


}
