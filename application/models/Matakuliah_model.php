<?php
class Matakuliah_model extends CI_Model {
    public function __construct() {
        // Memanggil constructor CI_Model
        parent::__construct();
    }

    public function get_data_matakuliah_mahasiswa() {
        $this->db->select('matakuliah.kode, matakuliah.matakuliah , matakuliah.id as idmatkul ,matakuliah_mahasiswa.nilai,matakuliah_mahasiswa.id as idmatkulmahasiswa,matakuliah_mahasiswa.id_mahasiswa as maha_id');
        $this->db->from('matakuliah_mahasiswa');
        $this->db->join('matakuliah', 'matakuliah.kode = matakuliah_mahasiswa.kode_matkul');
        $this->db->where('matakuliah_mahasiswa.npm', $this->session->userdata('username'));
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
        
    }
}
