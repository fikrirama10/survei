<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        // Memuat view form login
        $this->load->view('login_view');
    }

    // Fungsi untuk melakukan autentikasi
    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->user_model->check_user($username, $password);

        if ($result) {
            $sess_data = array(
                'username' => $result->username,
                'id_mahasiwa'=>$result->idmahasiswa,
                'mahasiwa'=>$result->nama_mahasiswa,
                'role_id'=>$result->role,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sess_data);

            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('login');
        }
    }

    public function logout()
    {
        // Menghapus semua data sesi
        $this->session->unset_userdata('logged_in');

        // Menghancurkan seluruh sesi
        $this->session->sess_destroy();

        // Mengarahkan pengguna ke halaman login
        redirect('login');
    }
}
