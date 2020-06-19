<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata extends CI_Controller
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
            'title'     => 'Paket Wisata',
            'left'      => 'Paket Wisata',
            'isi'       => 'backend/wisata/wisata',
            'wisata'    => $this->wisata->getAllWisata()
        );
        $this->load->view('backend/template/wrap', $data, false);
    }

    public function add()
    {
        $data = array(
            'title'     => 'Paket Wisata',
            'left'      => 'Paket Wisata',
            'kategori'  => $this->wisata->getAllKategotiWisata(),
            'isi'       => 'backend/wisata/add_w'
        );
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('namatempat', 'Nama Tempat', 'required|trim');
        $this->form_validation->set_rules('ketwisata', 'Ket Wisata', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $config['upload_path'] = './public/assets/back/dist/img/wisata/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                ' . $this->upload->display_errors() . '
              </div>');
                redirect('admin/tempat_wisata');
            } else {
                $data = [
                    'kategori_id'       => htmlspecialchars($this->input->post('kategori', true)),
                    'nama_tempat'       => htmlspecialchars($this->input->post('namatempat', true)),
                    'ket_wisata'        => htmlspecialchars($this->input->post('ketwisata', true)),
                    'alamat'            => htmlspecialchars($this->input->post('alamat', true)),
                    'harga'             => htmlspecialchars($this->input->post('harga', true)),
                    'gambar'            => $this->upload->data('file_name')
                ];
            }
            $this->wisata->insert_data($data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
				Data Berhasil Disimpan
                </div>');
                redirect('admin/tempat_wisata');
            } else {
                $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
				Data Gagal Disimpan
                </div>');
                redirect('admin/tempat_wisata');
            }
        }
    }

    public function edit($id)
    {
        $data = array(
            'title'     => 'Edit Wisata',
            'left'      => 'Paket Wisata',
            'kategori'  => $this->wisata->getAllKategotiWisata(),
            'wisata'    => $this->wisata->getAllWisataById($id),
            'isi'       => 'backend/wisata/edit_w'
        );
        $this->form_validation->set_rules('namatempat', 'Nama Tempat', 'required|trim');
        $this->form_validation->set_rules('ketwisata', 'Ket Wisata', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $data = [
                'kategori_id'       => htmlspecialchars($this->input->post('kategori', true)),
                'nama_tempat'       => htmlspecialchars($this->input->post('namatempat', true)),
                'ket_wisata'        => htmlspecialchars($this->input->post('ketwisata', true)),
                'alamat'            => htmlspecialchars($this->input->post('alamat', true)),
                'harga'             => htmlspecialchars($this->input->post('harga', true))
            ];
            $this->wisata->update_data($id, $data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
				Data Berhasil Diupdate
                </div>');
            redirect('admin/tempat_wisata');
        }
    }

    public function delete($id)
    {
        $this->wisata->delete_data($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
            Data Berhasil Dihapus
            </div>');
            redirect('admin/tempat_wisata');
        } else {
            $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
            Data Gagal Dihapus
            </div>');
            redirect('admin/tempat_wisata');
        }
    }


    // ? Kategori
    public function kategori()
    {
        $data = array(
            'title'     => 'Wisata',
            'left'      => 'Dashboard',
            'isi'       => 'backend/wisata/kategori',
            'ktwisata'  => $this->wisata->getAllKategotiWisata()
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
    public function addkategori()
    {
        $data = array(
            'title'     => 'Tambah Kategori',
            'isi'       => 'backend/wisata/addkategori',
            'ktwisata'  => $this->wisata->getAllKategotiWisata()
        );
        $this->form_validation->set_rules('namatempat', 'Nama Tempat', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {

            $config['upload_path'] = './public/assets/back/dist/img/kategori/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file')) {
                $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                ' . $this->upload->display_errors() . '
              </div>');
                redirect('admin/tempat_wisata');
            } else {
                $dataw = [
                    'jenis_kategori'    => $this->input->post('namatempat', true),
                    'gambar'            => $this->upload->data('file_name')
                ];
                $this->wisata->insert_kategori($dataw);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Data Berhasil Disimpan
                  </div>');
                    redirect('admin/kategori_wisata');
                } else {
                    $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                    Data Gagal Disimpan
                  </div>');
                    redirect('admin/kategori_wisata');
                }
            }
        }
    }
    public function editkategori($id)
    {
        $data = array(
            'title'     => 'Edit Kategori',
            'left'      => 'Dashboard',
            'isi'       => 'backend/wisata/edit_kategori',
            'ktwisata'  => $this->wisata->getAllKategoryById($id)
        );
        $this->form_validation->set_rules('namatempat', 'Nama Tempat', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/template/wrap', $data, false);
        } else {
            $config['upload_path'] = './public/assets/back/dist/img/kategori/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $dataw = [
                    'jenis_kategori'    => $this->input->post('namatempat', true),
                    'gambar'            => $this->upload->data('file_name')
                ];
                $this->wisata->update_kategori($id, $dataw);
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Data Berhasil Diupdate
                  </div>');
                redirect('katWisata');
            } else {
                $query = $this->wisata->getAllKategoryById($id);
                $folder = FCPATH . './public/assets/back/dist/img/wisata/';
                $file = $query->gambar;
                $upload = $folder . $file;
                if (@unlink($upload)) {
                    $dataw = [
                        'jenis_kategori'    => $this->input->post('namatempat', true),
                        'gambar'            => $this->upload->data('file_name'),
                    ];
                    $this->wisata->update_kategori($id, $dataw);
                    $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                        Data Berhasil Diupdate
                      </div>');
                    redirect('katWisata');
                } else {
                    $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Gambar Tidak ditemukan
                  </div>');
                    redirect('katWisata');
                }
            }
        }
    }
    public function delete_kategori($id)
    {
        $query = $this->wisata->getAllKategoryById($id);
        $folder = FCPATH . './public/assets/back/dist/img/wisata/';
        $file = $query->gambar;
        $upload = $folder . $file;
        if (@unlink($upload)) {
            $this->wisata->delete_kategori($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                Data Berhasil Dihapus
              </div>');
                redirect('katWisata');
            } else {
                $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                Data Gagal Dihapus
              </div>');
                redirect('katWisata');
            }
        } else {
            $this->wisata->delete_kategori($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                Data Berhasil Dihapus
              </div>');
                redirect('katWisata');
            } else {
                $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                Data Gagal Dihapus
              </div>');
                redirect('katWisata');
            }
        }
    }
}
