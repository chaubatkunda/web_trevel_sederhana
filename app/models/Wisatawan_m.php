<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisatawan_m extends CI_Model
{
    public function getAllWisatawan()
    {
        return $this->db->get_where('t_user', ['role' => 2])->result();
    }
    public function getAllWisatawanById($id)
    {
        return $this->db->get_where('t_user', ['id_user' => $id])->row();
    }
    public function insert_wisatawan($tabel)
    {
        return $this->db->insert('t_user', $tabel);
    }
    public function update_wisatawan($id, $tabel)
    {
        return $this->db->update('t_user', $tabel, ['id_user' => $id]);
    }
    public function delete_wisatawan($id)
    {
        return $this->db->delete('t_user', ['id_user' => $id]);
    }
}
