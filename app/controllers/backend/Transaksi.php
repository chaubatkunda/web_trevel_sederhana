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
    public function konfirmasi($id)
    {
        $data = array(
            'title'     => 'Konfirmasi Pembayaran',
            'left'      => 'Transaksi',
            'detail'    => $this->transaksi->getAllTransaksiDetailById($id),
            'transaksi' => $this->transaksi->getAllTransaksiById($id),
            'isi'       => 'backend/transaksi/konfirmasi'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
    public function simpan()
    {
        $invoice = $this->input->post('invoice', true);
        $data = [
            'is_success'       => $this->input->post('verify', true)
        ];
        $this->db->update('t_transaksi', $data, ['invoice' => $invoice]);
        redirect('admin/transaksi');
    }
}
