<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori');
    }

    public function index()
    {
        $data = array(
            'table_content' => $this->M_kategori->get() ,
            'title' => 'Data kategori',
            'page' => 'v_kategori.php'
        );
        $this->load->view('main.php', $data);
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
            $insert = $this->M_kategori->insert($data);
            if (!$insert) {
                $msg = $this->db->_error_message();
                $num = $this->db->_error_number();
            }
        } else {
            $data = array(
                'table_content' => $this->M_kategori->get() ,
                'title' => 'Tambah kategori',
                'page' => 'v_add_kategori.php'
            );
            $this->load->view('main.php', $data);
        }
    }

    // halaman edit
    public function edit()
    {
        $id = $this->input->get('id');
        $data = array(
            'table_content' => $this->M_kategori->get($id) ,
            'title' => 'Edit kategori',
            'page' => 'v_edit_kategori.php'
        );
        $this->load->view('main.php', $data);
    }

    // proses edit
    public function update()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $id = $data['#primary_key'];
        $update = $this->M_kategori->update_by_id($data, $id);
    }

    // proses hapus
    public function delete()
    {
        $id = $this->input->get('id');
        $delete = $this->M_kategori->delete_by_id($id);
    }
}
