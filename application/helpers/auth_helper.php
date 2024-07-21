<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function check_login()
{
    // Dapatkan instans CI & load library session
    $CI =& get_instance();
    $CI->load->library('session');

    // Cek apakah userdata 'logged_in' sudah ter-set atau belum
    if (!$CI->session->userdata('logged_in')) {
        // Jika belum login, arahkan ke halaman login
        redirect('login');
    }
}
