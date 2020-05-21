<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        is_login();
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->_chek_login();
        }
    }
    private function _chek_login()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $user = $this->user->user_login($email);
        if ($user) {
            if (password_verify($password, $user->password)) {
                $data = [
                    'id_user'   => $user->id_user,
                    'email'     => $user->email,
                    'role'      => $user->role
                ];
                $this->user->is_online($email);
                $this->session->set_userdata($data);
                if ($user->role == 1) {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				Password Salah
				</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				Email Belum Terdaftar
				</div>');
            redirect('auth');
        }
    }

    public function daftar()
    {
        $data = array(
            'title' => 'Daftar',
        );
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[t_user.email]');
        $this->form_validation->set_rules('telp', 'Telp', 'trim|required|numeric');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Conform Password', 'trim|required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/daftar', $data, false);
        } else {
            $daftar = [
                'email'     => htmlspecialchars($this->input->post('email', true)),
                'password'  => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'nama'      => htmlspecialchars($this->input->post('nama', true)),
                'nohp'      => addslashes($this->input->post('telp', true)),
                'role'      => 2,
                'foto'      => 'default.png'
            ];
            $this->user->insert_daftar($daftar);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
				Silahkan Login
				</div>');
                redirect('auth');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				Akun Gagal Didaftarkan
				</div>');
                redirect('auth');
            }
        }
    }
    public function logout()
    {
        $this->db->set('is_online', 0);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('t_user');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
				Berhasil Logout
				</div>');
        redirect('auth');
    }
}
