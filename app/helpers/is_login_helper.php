<?php
function is_login()
{
    $log = &get_instance();
    $user_session = $log->session->userdata('id_user');
    $user_sessionl = $log->session->userdata('role');
    if ($user_session) {
        if ($user_sessionl == 1) {
            redirect('admin');
        } else {
            redirect('user');
        }
    }
}

function not_login()
{
    $log = &get_instance();
    $user_session = $log->session->userdata('id_user');
    if (!$user_session) {
        redirect('auth');
    }
}

function chek_admin()
{
    $log = &get_instance();
    if ($log->session->userdata('role') != 1) {
        redirect('user');
    }
    // return $log->session->userdata('role');
}
