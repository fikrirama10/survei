<?php
class Dosen_model extends CI_Model
{
    public function __construct()
    {
        // Memanggil constructor CI_Model
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert_dosen($data)
    {
        $this->db->insert('dosen', $data);
    }

    public function dosen_exists($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('dosen');
        return $query->num_rows() > 0;
    }

    // Menghapus dosen
    public function delete_dosen($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('dosen');
    }
}
