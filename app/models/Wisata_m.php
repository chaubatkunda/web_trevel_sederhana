<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata_m extends CI_Model
{
    public function getAllWisata()
    {
        return $this->db->get('t_wisata')->result();
    }
    public function getAllWisataById($id)
    {
        return $this->db->get_where('t_wisata', ['id_wisata' => $id])->row();
    }
    public function insert_data($data)
    {
        return $this->db->insert('t_wisata', $data);
    }
    public function update_data($id, $data)
    {
        return $this->db->update('t_wisata', $data, ['id_wisata' => $id]);
    }
    public function delete_data($id)
    {
        return $this->db->delete('t_wisata', ['id_wisata' => $id]);
    }
    public function getAllKategotiWisata()
    {
        return $this->db->get('t_kategori_wisata')->result();
    }
    public function insert_kategori($dataw)
    {
        return $this->db->insert('t_kategori_wisata', $dataw);
    }
    public function update_kategori($id, $dataw)
    {
        return $this->db->update('t_kategori_wisata', $dataw, ['id_kategori' => $id]);
    }
    public function delete_kategori($id)
    {
        return $this->db->delete('t_kategori_wisata', ['id_kategori' => $id]);
    }
    public function getAllKategoryById($id)
    {
        return $this->db->get_where('t_kategori_wisata', ['id_kategori' => $id])->row();
    }
}
