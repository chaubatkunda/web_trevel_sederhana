<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
            'title'     => 'Home',
            'left'      => 'Dashboard',
            'kategori'  => $this->db->get('t_kategori_wisata')->num_rows(),
            'wisata'    => $this->db->get('t_wisata')->num_rows(),
            'wisatawan' => $this->db->get_where('t_user', ['role' => 2])->num_rows(),
            'isi'       => 'backend/home/home'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
}
