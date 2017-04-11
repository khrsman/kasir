<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
    }

    public function index()
    {
        $data = array(
            'table_content' => $this->M_barang->get() ,
            'title' => 'Data Barang',
            'page' => 'v_barang.php'
        );
        $this->load->view('main.php', $data);
    }
    public function autocomplete()
    {


      $this->db->like('nama', $this->input->post('nama_barang'));
      $this->db->select('id_barang, nama nama');
      $query = $this->db->get('barang')->result_array();


      echo json_encode($query);


    }

    // tambah data
    public function add()
    {

        // periksa method
        // apabila post -> insert data, get -> halaman view
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // ambil data hasil serialize jquery, kemudian masukan kedalam array $data
            $data = array();
            parse_str($_POST['data'], $data);
            $insert = $this->M_barang->insert($data);
            if (!$insert) {
                $msg = $this->db->_error_message();
                $num = $this->db->_error_number();
            }
        } else {
            $data = array(
                'table_content' => $this->M_barang->get() ,
                'title' => 'Tambah Barang',
                'page' => 'v_add_barang.php'
            );
            $this->load->view('main.php', $data);
        }
    }

    // halaman edit
    public function edit()
    {
        $id = $this->input->get('id');
        $data = array(
            'table_content' => $this->M_barang->get($id) ,
            'title' => 'Edit Barang',
            'page' => 'v_edit_barang.php'
        );
        $this->load->view('main.php', $data);
    }

    // proses edit
    public function update()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $id = $data['#primary_key'];
        $update = $this->M_barang->update_by_id($data, $id);
    }

    // proses hapus
    public function delete()
    {
        $id = $this->input->get('id');
        $delete = $this->M_barang->delete_by_id($id);
    }
}
