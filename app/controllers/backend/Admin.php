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
            'title' => 'Home',
            'left'  => 'Dashboard',
            'isi'   => 'backend/home/home'
        );
        $this->load->view('backend/template/wrap', $data, false);
    }
}
