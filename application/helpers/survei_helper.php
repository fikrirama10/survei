<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function cek_survey_by_id_matkul_idmhs($conditions){
    $CI =& get_instance();

    foreach ($conditions as $key => $value) {
        $CI->db->where($key, $value);
    }

    $query = $CI->db->get('jawaban_survei');

    if ($query->num_rows() > 0) {
        return $query->result();
    }
    
    // Jika tidak ada data, kembalikan nilai kosong
    return array();
}
function cek_survey_by_id_matkul($conditions)
{
    $CI =& get_instance();

    foreach ($conditions as $key => $value) {
        $CI->db->where($key, $value);
    }

    $query = $CI->db->get('periode_survey');

    if ($query->num_rows() > 0) {
        return $query->result();
    }
    
    // Jika tidak ada data, kembalikan nilai kosong
    return array();

}
