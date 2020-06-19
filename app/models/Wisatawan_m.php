<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisatawan_m extends CI_Model
{
    public function getAllWisatawan()
    {
        return $this->db->get_where('t_user', ['role' => 2])->result();
    }
}
