<?php
class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function jadwal()
    {
        // Load the Mahasiswa model
        $this->load->model('Jadwal_model');

        // Retrieve all Mahasiswa from the database
        $data['jadwal'] = $this->Jadwal_model->get_all();
        $data['title'] = 'Jadwal Survey';
        $data['content'] = 'jadwal/jadwal';
        $this->load->view('layouts/main', $data);
        // Load the Mahasiswa view and pass the data


    }
}
