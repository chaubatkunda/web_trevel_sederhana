<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    // public function index()
    // {
    //     $this->load->view('welcome_message');
    // }
    public function pesan($id)
    {
        $data = array(
            'title'     => 'Paket Wisata',
            'left'      => 'Paket Wisata',
            'wisata'    => $this->wisata->getAllWisataById($id),
            'isi'       => 'backend/user/pesan'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
}
