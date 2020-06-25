<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        not_login();
        chek_admin();
    }
    public function index()
    {
        $data = array(
            'title'     => 'Transaksi',
            'left'      => 'Transaksi',
            'transaksi' => $this->transaksi->getAllTransaksi(),
            'isi'       => 'backend/transaksi/home'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
}
