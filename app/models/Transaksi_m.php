<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_m extends CI_Model
{
    public function getAllTransaksi()
    {
        return $this->db->get_where('t_transaksi', ['is_success' => 2])->result();
    }
}
