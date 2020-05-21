<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function user_login($email)
    {
        return $this->db->get_where('t_user', ['email' => $email])->row();
    }
    public function is_online($email)
    {
        $this->db->set('is_online', 1);
        $this->db->where('email', $email);
        return $this->db->update('t_user');
    }

    public function insert_daftar($daftar)
    {
        return $this->db->insert('t_user', $daftar);
    }

    public function update_profil($data, $email)
    {
        return $this->db->update('t_user', $data, ['email' => $email]);
    }

    public function ganti_password($email, $passverify)
    {
        $this->db->set('password', $passverify);
        $this->db->where('email', $email);
        return $this->db->update('t_user');
    }
}
