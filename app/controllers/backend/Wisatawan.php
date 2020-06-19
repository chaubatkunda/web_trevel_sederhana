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
}
