<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Matakuliah_model');
        $this->load->model('Periode_model');
    }

    public function index()
    {
        check_login();
        // echo print_r($this->session->userdata());
        $data['matakuliah_mahasiswa'] = $this->Matakuliah_model->get_data_matakuliah_mahasiswa();
        $data['all_periode'] = $this->Periode_model->get_data_all();
        $data['title'] = 'Home';
        if($this->session->userdata('role_id') == 'mahasiswa'){
            $data['content'] = 'dashboard/index';
        }elseif($this->session->userdata('role_id') == 'admin'){
            $data['content'] = 'dashboard/index-admin';
        }else{
            $data['content'] = 'dashboard/index';
        }
        
        $this->load->view('layouts/main', $data);
    }
}