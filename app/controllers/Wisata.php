<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title'     => 'Destinasi',
            'wisata'    => $this->wisata->getAllWisata(),
            'kategori'  => $this->wisata->getAllKategotiWisata(),
            'isi'       => 'wisata/home'
        );
        $this->load->view('layout/wrap', $data, false);
    }
}
