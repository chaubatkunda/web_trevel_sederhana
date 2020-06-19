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
}
