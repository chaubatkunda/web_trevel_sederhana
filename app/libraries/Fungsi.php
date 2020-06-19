<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fungsi
{
    protected $lb;
    function __construct()
    {
        $this->lb = &get_instance();
    }
    function user_login()
    {
        $session_user = $this->lb->session->userdata('email');
        return $this->lb->user->user_login($session_user);
    }

    function kodePesanan()
    {
        $sql = "SELECT MAX(MID(invoice,9,4)) as kode_pesan 
        		FROM t_transaksi 
        		WHERE MID(invoice,3,6) = DATE_FORMAT(CURDATE(),'%d%m%y')";
        $query = $this->lb->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int) $row->kode_pesan) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        return "in" . date('dmy') . $no;
    }
}
