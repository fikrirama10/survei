<?php
class Mahasiswa_model extends CI_Model
{
    public function __construct()
    {
        // Memanggil constructor CI_Model
        $this->load->database();
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $query = $this->db->get();
        return $query->result_array();
    }



    public function insert_mahasiswa($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }
}
