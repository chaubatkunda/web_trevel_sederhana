<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class Kontak extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Kontak',
            'isi'   => 'kontak/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }
}
