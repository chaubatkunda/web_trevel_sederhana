<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_m extends CI_Model
{
    public function getAllTransaksi()
    {
        $this->db->order_by('tgl_transaksi', 'desc');
        return $this->db->get('t_transaksi')->result();
    }
    public function getAllTransaksiById($id)
    {
        return $this->db->get_where('t_transaksi', ['invoice' => $id])->row();
    }
    public function getAllTransaksiDetailById($id)
    {
        return $this->db->get_where('t_transaksi_detail', ['invoice' => $id])->row();
    }
}
