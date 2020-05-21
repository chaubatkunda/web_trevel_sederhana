<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Tentang Kami',
            'isi'   => 'about/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }
}
