<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Mahasiswa_model');
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

    public function create()
    {
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('npm', 'NIM', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            // Handle validation errors
            $this->session->set_flashdata('error', validation_errors());
            redirect('mahasiswa');
        } else {
            $data = array(
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'npm' => $this->input->post('npm'),
            );

            $insert_id = $this->Mahasiswa_model->insert_mahasiswa($data);
            if ($insert_id) {
                $this->session->set_flashdata('success', 'Data mahasiswa berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat menambahkan data mahasiswa.');
            }
            redirect('mahasiswa/mahasiswa');
        }
    }
}
