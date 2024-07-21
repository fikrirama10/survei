<?php
class Survei_model extends CI_Model {
    public function __construct() {
        // Memanggil constructor CI_Model
        parent::__construct();
    }

    public function get_data() {
        $result = array();

        // Query untuk pertanyaan dengan kategori 'Importance'
        $importance_query = $this->db->where('importance', TRUE)->get('pertanyaan');
        $result['importance'] = $importance_query->result();
    
        // Mengatur ulang Query Builder untuk menjalankan query kedua
        $this->db->reset_query();
    
        // Query untuk pertanyaan dengan kategori 'Performance'
        $performance_query = $this->db->where('importance', FALSE)->get('pertanyaan');
        $result['performance'] = $performance_query->result();
    
        // Mengembalikan hasil dari kedua query
        return $result;
    }

    
}
