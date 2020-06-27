<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
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
            'title'     => 'Info',
            'left'      => 'Info',
            'info'      => $this->info->getAllInfo(),
            'isi'       => 'backend/info/home'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
    public function create()
    {
        $data = array(
            'title'     => 'Info Create',
            'left'      => 'Info Create',
            'isi'       => 'backend/info/create'
        );
        $this->form_validation->set_rules('bank', 'BANK', 'trim|required');
        $this->form_validation->set_rules('rek', 'Rekening', 'trim|required|numeric');
        $this->form_validation->set_rules('pemilik', 'Pemilik', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $data = [
                'nama_bank'     =>  $this->input->post('bank', true),
                'no_rek'           =>  $this->input->post('rek', true),
                'nama_pemilik'       =>  $this->input->post('pemilik', true),
            ];
            $this->info->insert_data($data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
				Data Berhasil Ditambahkan
				</div>');
            redirect('admin/info');
        }
    }
    public function edit($id)
    {
        $data = array(
            'title'     => 'Info Edit',
            'left'      => 'Info Edit',
            'info'      => $this->info->getAllInfoById($id),
            'isi'       => 'backend/info/edit'
        );
        $this->form_validation->set_rules('bank', 'BANK', 'trim|required');
        $this->form_validation->set_rules('rek', 'Rekening', 'trim|required|numeric');
        $this->form_validation->set_rules('pemilik', 'Pemilik', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $data = [
                'nama_bank'     =>  $this->input->post('bank', true),
                'no_rek'        =>  $this->input->post('rek', true),
                'nama_pemilik'  =>  $this->input->post('pemilik', true),
            ];
            $this->info->update_data($id, $data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
				Data Berhasil Diubah
				</div>');
            redirect('admin/info');
        }
    }
    public function delete($id)
    {
        $this->info->delete_data($id);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
            Data Berhasil Dihapus
            </div>');
        redirect('admin/info');
    }
}
