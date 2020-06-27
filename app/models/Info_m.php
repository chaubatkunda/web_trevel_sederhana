<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_m extends CI_Model
{
    public function getAllInfo()
    {
        return $this->db->get('t_info')->result();
    }
    public function getAllInfoById($id)
    {
        return $this->db->get('t_info', ['id' => $id])->row();
    }
    public function insert_data($data)
    {
        return $this->db->insert('t_info', $data);
    }
    public function update_data($id, $data)
    {
        return $this->db->update('t_info', $data, ['id' => $id]);
    }
    public function delete_data($id)
    {
        return $this->db->delete('t_info', ['id' => $id]);
    }
}
