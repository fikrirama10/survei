<?php

class Response_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function cek_responses($data) {

    }
    public function save_responses($data) {
        $this->db->trans_start(); // Start transaction

        foreach ($data['pilihan'] as $pertanyaan_id => $nilai_i) {
            // $nilai_p = $data['performance_response'][$pertanyaan_id];

            // Insert query
            $this->db->insert('jawaban_survei', array(
                'response_id' => $data['response_id'],
                'mahasiswa_id' => $data['mahasiswa_id'],
                'periode_id' => $data['periode_id'], // Assume you set the correct period ID
                'pertanyaan_id' => $pertanyaan_id,
                'nilai_p' => $nilai_i,
                'tgl_mengisi' => date('Y-m-d H:i:s'), // Current date and time
                'nilai_i' => $nilai_i
            ));
        }

        $this->db->trans_complete(); // Complete the transaction

        if ($this->db->trans_status() === FALSE) {
            return false; // Transaction failed
        } else {
            return true; // Transaction successful
        }
    }
}
