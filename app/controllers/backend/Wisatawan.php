<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisatawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        not_login();
        chek_admin();
    }
    public function index()
    {
        $data = array(
            'title'     => 'Wisatawan',
            'left'      => 'Wisatawan',
            'wisatawan' => $this->wisatawan->getAllWisatawan(),
            'isi'       => 'backend/wisatawan/home'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
    public function create()
    {
        $data = array(
            'title'     => 'Create',
            'left'      => 'Create',
            'isi'       => 'backend/wisatawan/create'
        );
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[t_user.email]');
        $this->form_validation->set_rules('telp', 'Telp', 'trim|required|numeric');
        $this->form_validation->set_rules('password', 'Email', 'trim|required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Email', 'trim|required|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $tabel = [
                'email'         => $this->input->post('email', true),
                'password'      => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'nama'          => $this->input->post('nama', true),
                'nohp'          => $this->input->post('telp', true),
                'alamat'        => '',
                'role'          => 2,
                'foto'          => 'default.png',
                'is_online'     => 0
            ];
            $this->wisatawan->insert_wisatawan($tabel);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
				Berhasil Disimpan
				</div>');
            redirect('admin/wisatawan');
        }
    }
    public function edit($id)
    {
        $data = array(
            'title'     => 'Edit',
            'left'      => 'Edit',
            'wisatawan' => $this->wisatawan->getAllWisatawanById($id),
            'isi'       => 'backend/wisatawan/edit'
        );
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('telp', 'Telp', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $tabel = [
                'email'         => $this->input->post('email', true),
                'password'      => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'nama'          => $this->input->post('nama', true),
                'nohp'          => $this->input->post('telp', true),
                'alamat'        => $this->input->post('alamat', true)
            ];
            $this->wisatawan->update_wisatawan($id, $tabel);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
            Berhasil Diubah
            </div>');
            redirect('admin/wisatawan');
        }
    }
    public function delete($id)
    {
        $this->wisatawan->delete_wisatawan($id);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
            Berhasil Dihapus
            </div>');
        redirect('admin/wisatawan');
    }
}
