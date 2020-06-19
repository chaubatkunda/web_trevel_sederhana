<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        not_login();
        // chek_admin();
    }
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
    public function booking_wisata($id)
    {
        $data = array(
            'title'     => 'Paket Wisata',
            'left'      => 'Paket Wisata',
            'wisata'    => $this->wisata->getAllWisataById($id),
            'isi'       => 'backend/user/booking'
        );
        $this->form_validation->set_rules('jmlwisata', 'Jumlah Wisata', 'trim|required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $kode = $this->input->post('booking', true);
            $booking = [
                'user_id'       => $this->input->post('id_user', true),
                'invoice'       => $kode,
                'wisata'       => $this->input->post('paket_wisata', true),
                'chek_in'       => $this->input->post('berangkat', true),
                'chek_out'       => $this->input->post('pulang', true),
                'harga'       => $this->input->post('totalhr', true),
                'total'       => $this->input->post('total', true),
            ];
            $this->booking->insert_booking($booking);
            redirect('konfirmasi?invoice=' . $kode);
        }
    }
    public function konfirmasi()
    {
        $in = $this->input->get('invoice', true);
        $data = array(
            'title'     => 'Konfirmasi Pembayaran',
            'left'      => 'Paket Wisata',
            'konfirm'   => $this->booking->getAllTransById($in),
            'isi'       => 'backend/user/konfirmasi'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
    public function transaksi()
    {
        $id = $this->fungsi->user_login()->id_user;
        // $in = $this->input->get('invoice', true);
        $data = array(
            'title'         => 'Riwayar Transaksi',
            'left'          => 'Riwayar Transaksi',
            'transaksi'     => $this->booking->getAllMyTransById($id),
            'isi'           => 'backend/user/transaksi'
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
