<?php

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        //$this->load->model('m_chat');

    }

    function index(){
      $data = array('title' => 'Dashboard',
                    'page' => 'v_main.php');
		$this->load->view('dashboard.php',$data);
    }


}
?>
