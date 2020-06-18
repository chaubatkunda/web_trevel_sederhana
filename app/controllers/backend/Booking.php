<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title'     => 'Kategtori Wisata',
            'left'      => 'Paket Wisata',
            'kategori'  => $this->wisata->getAllKategotiWisata(),
            'isi'       => 'backend/user/kategori_wisata'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
    public function paket($id)
    {
        $data = array(
            'title'     => 'Paket Wisata',
            'left'      => 'Paket Wisata',
            'paket'     => $this->wisata->getAllWisataAllById($id),
            'isi'       => 'backend/user/paket_wisata'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
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
