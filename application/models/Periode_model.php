<?php
class Periode_model extends CI_Model {
    public function __construct() {
        // Memanggil constructor CI_Model
        parent::__construct();
    }

    public function get_data_ipa($idperiode) {
        $this->db->select('mahasiswa_id, SUM(nilai_i) AS total_nilai_i, SUM(nilai_p) AS total_nilai_p, AVG(nilai_i) AS avg_nilai_i, AVG(nilai_p) AS avg_nilai_p , pertanyaan_id');
        $this->db->from('jawaban_survei');
        $this->db->where('periode_id', $idperiode);
        $this->db->group_by('mahasiswa_id');
        $query = $this->db->get();

        $result = $query->result();
        return $result;

    }
    public function get_json_data_with_ipa($idperiode) {
        // Fetch the average data from the database
        $ipa_data = $this->get_data_ipa($idperiode);
        $data_with_averages = []; // Pastikan variabel ini didefinisikan
        $no=1;
        foreach ($ipa_data as $average) {
            $data = [];
            $data['x'] = (float) $average->avg_nilai_i;
            $data['y'] = (float) $average->avg_nilai_p;
            $data['name'] = $no++;
            $data_with_averages[] = $data; // Tambahkan data ke dalam array
        }
        
        // header('Content-Type: application/json');
        return $data_with_averages;
    }
    public function get_data_all() {
        $this->db->select('matakuliah.matakuliah, dosen.nama_dosen, periode_survey.periode,periode_survey.id as idperiod');
        $this->db->from('periode_survey');
        $this->db->join('matakuliah', 'matakuliah.id = periode_survey.id_matakuliah');
        $this->db->join('dosen', 'dosen.id = periode_survey.id_dosen');
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
        
    }
    public function get_data_by_periode($id) {
        // Query untuk pertanyaan dengan kategori 'Importance'
        $result = $this->db->where('id', $id)->get('periode_survey');
        if ($result->num_rows() == 1) {
            return $result->row(); // returns the user row if user found
        } else {
            return false; // returns false if user not found
        }
    }

    
}
