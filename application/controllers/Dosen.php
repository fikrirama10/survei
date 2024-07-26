<?php
class Dosen  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->library('form_validation');
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

    // Fungsi untuk menangani permintaan pembuatan dosen baru
    public function create()
    {
        // Aturan validasi
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required|alpha_numeric_spaces');

        if ($this->form_validation->run() === FALSE) {
            // Jika validasi gagal, tampilkan modal kembali dengan pesan kesalahan
            $this->session->set_flashdata('error', validation_errors());
            redirect('dosen');
        } else {
            // Jika validasi berhasil, lakukan proses insert data
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen'),
                // tambahkan field lain jika diperlukan
            );

            $insert_id = $this->Dosen_model->insert_dosen($data);
            if ($insert_id) {
                // Set flash data untuk pesan sukses
                $this->session->set_flashdata('success', 'Data dosen berhasil ditambahkan!');
            } else {
                // Set flash data untuk pesan kesalahan
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat menambahkan data dosen.');
            }
            redirect('dosen/dosen');
        }
    }


    public function delete($id)
    {
        // Pastikan id dosen valid dan ada di database
        if (!$this->Dosen_model->dosen_exists($id)) {
            $this->session->set_flashdata('error', 'Dosen tidak ditemukan.');
            redirect('dosen');
        }

        // Lakukan penghapusan
        $deleted = $this->Dosen_model->delete_dosen($id);
        if ($deleted) {
            $this->session->set_flashdata('success', 'Dosen berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Terjadi kesalahan saat menghapus dosen.');
        }

        // Redirect kembali ke halaman dosen
        redirect('dosen/dosen');
    }
}
