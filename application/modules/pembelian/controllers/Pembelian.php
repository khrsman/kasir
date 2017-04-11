<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Pembelian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pembelian');
    }

    public function index()
    {
        $data = array(
            'table_content' => $this->M_pembelian->get() ,
            'title' => 'Daftar transaksi pembelian',
            'page' => 'v_pembelian.php'
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
            $insert = $this->M_pembelian->insert($data);
            if (!$insert) {
                $msg = $this->db->_error_message();
                $num = $this->db->_error_number();
            }
        } else {
            $data = array(
                'table_content' => $this->M_pembelian->get() ,
                'title' => 'Transaksi pembelian',
                'page' => 'v_add_pembelian.php'
            );
            $this->load->view('main.php', $data);
        }
    }

    // halaman edit
    public function edit()
    {
        $id = $this->input->get('id');
        $data = array(
            'table_content' => $this->M_pembelian->get($id) ,
            'title' => 'Edit pembelian',
            'page' => 'v_edit_pembelian.php'
        );
        $this->load->view('main.php', $data);
    }

    // proses edit
    public function update()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $id = $data['#primary_key'];
        $update = $this->M_pembelian->update_by_id($data, $id);
    }

    // proses hapus
    public function delete()
    {
        $id = $this->input->get('id');
        $delete = $this->M_pembelian->delete_by_id($id);
    }
}
