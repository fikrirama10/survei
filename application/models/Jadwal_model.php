<?php
class Jadwal_model extends CI_Model
{
    public function __construct()
    {
        // Memanggil constructor CI_Model
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('periode_survey');
        $query = $this->db->get();
        return $query->result_array();
    }
}
