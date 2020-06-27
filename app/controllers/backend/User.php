<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        not_login();
        // chek_admin();
    }
    public function index()
    {
        $user = $this->fungsi->user_login()->id_user;
        $data = array(
            'title' => 'User',
            'left'  => 'Dashboard',
            'kategori'  => $this->db->get('t_kategori_wisata')->num_rows(),
            'transaksi'  => $this->db->get_where('t_transaksi', ['user_id' => $user])->num_rows(),
            'isi'   => 'backend/user/user'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
    public function profile()
    {
        $data = array(
            'title' => 'Profil',
            'left'  => 'Dashboard',
            'isi'   => 'backend/user/edit'
        );
        $email      = $this->input->post('email', true);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('telp', 'Telp/Hp', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $data = [
                'nama'      => htmlspecialchars($this->input->post('nama', true)),
                'nohp'      => htmlspecialchars($this->input->post('telp', true)),
                'alamat'    => htmlspecialchars($this->input->post('alamat', true))
            ];
            $this->user->update_profil($data, $email);
            $this->session->set_flashdata('user', '<div class="alert alert-success" role="alert">
				Berhasul Diupdate
				</div>');
            redirect('profil');
        }
    }

    // !Ganti Password
    // ! Ade Kirim Usecasenya ok
    public function gantipass()
    {
        $data = array(
            'title' => 'Ganti Password',
            'left'  => 'Dashboard',
            'isi'   => 'backend/user/gantipass'
        );
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Konform Password Baru', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $email    = $this->input->post('email', true);
            $passlama = $this->fungsi->user_login()->password;
            $password = $this->input->post('password', true);
            $passbaru = $this->input->post('password1', true);
            // $passcon = $this->input->post('password2', true);
            if (password_verify($password, $passlama)) {
                if ($password !== $passbaru) {
                    $passverify = password_hash($passbaru, PASSWORD_DEFAULT);
                    $this->user->ganti_password($email, $passverify);

                    $this->session->set_flashdata('pass', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Password Berhasil Diubah.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('gantiPassword');
                } else {
                    $this->session->set_flashdata('pass', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password  Baru Tidak boleh sama dengan password lama.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('gantiPassword');
                }
            } else {
                $this->session->set_flashdata('pass', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Password Salah.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('gantiPassword');
            }
        }
    }

    public function wisata()
    {
        $data = array(
            'title'     => 'Paket Wisata',
            'left'      => 'Paket Wisata',
            'wisata'    => $this->wisata->getAllWisata(),
            'isi'       => 'backend/user/wisata'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
}
