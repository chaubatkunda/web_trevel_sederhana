<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fungsi
{
    protected $lb;
    function __construct()
    {
        $this->lb = &get_instance();
    }
    function user_login()
    {
        $session_user = $this->lb->session->userdata('email');
        return $this->lb->user->user_login($session_user);
    }
}
