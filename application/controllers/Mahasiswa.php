<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function mahasiswa()
    {
        // Load the Mahasiswa model
        $this->load->model('Mahasiswa_model');

        // Retrieve all Mahasiswa from the database
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all();
        $data['title'] = 'Daftar Mahasiswa';
        $data['content'] = 'mahasiswa/mahasiswa';
        $this->load->view('layouts/main', $data);
        // Load the Mahasiswa view and pass the data


    }
}
