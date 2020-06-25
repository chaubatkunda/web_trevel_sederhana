<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_m extends CI_Model
{
    public function insert_booking($booking)
    {
        return $this->db->insert('t_transaksi', $booking);
    }
    public function getAllTransById($in)
    {
        return $this->db->get_where('t_transaksi', ['invoice' => $in])->row();
    }
    public function getAllMyTransById($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get_where('t_transaksi')->result();
    }

    public function insert_dettr($datain)
    {
        return $this->db->insert('t_transaksi_detail', $datain);
    }
}
