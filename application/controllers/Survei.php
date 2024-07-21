<?php
class Survei extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('response_model');
        $this->load->model('Periode_model');
    }
    public function survei_ipa($id_periode) {
        //hasil IPA per periode
        $data['results_ipa'] = $this->Periode_model->get_data_ipa($id_periode);
        $data['results_ipa_json'] = $this->Periode_model->get_json_data_with_ipa($id_periode);
        $data['title'] = 'Hasil Survei IPA';
        $data['content'] = 'survei/survei-ipa';
        $this->load->view('layouts/main', $data);
    }
    public function submit_survey() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Menangkap semua data POST
            $postData = $this->input->post();

            // Menampilkan data POST
            if ($this->response_model->save_responses($postData)) {
                $this->session->set_flashdata('success', 'Data survei berhasil dikirim');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Data survei gagal dikirim');
                redirect('dashboard');
            }
        }
    }
    public function view($id) {
        // Memuat model
        $this->load->model('survei_model');

        // Mengambil data dari model
        $data['results'] = $this->survei_model->get_data();
        $data['results_periode'] = $this->Periode_model->get_data_by_periode($id);

        $data['title'] = 'Pengisian Survei';
        $data['content'] = 'survei/survei';
        $this->load->view('layouts/main', $data);
    }
}
