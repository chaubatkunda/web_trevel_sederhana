<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Home',
            'isi'   => 'home/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }
}
