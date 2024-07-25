<?php
class Dosen  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function dosen()
    {
        // Load the Mahasiswa model
        $this->load->model('Dosen_model');

        // Retrieve all Mahasiswa from the database
        $data['dosen'] = $this->Dosen_model->get_all();
        $data['title'] = 'Daftar Dosen';
        $data['content'] = 'dosen/dosen';
        $this->load->view('layouts/main', $data);
        // Load the Mahasiswa view and pass the data


    }
}
