<?php
class User_model extends CI_Model {

    public function check_user($username, $password)
    {
        // $this->db->where('username', $username);
        // $this->db->where('password', MD5($password));
        // $query = $this->db->get('users');

        // if ($query->num_rows() == 1) {
        //     return $query->row();
        // } else {
        //     return false;
        // }
        $this->db->select('users.username, mahasiswa.id as idmahasiswa, mahasiswa.nama_mahasiswa,users.role');
        $this->db->from('users');
        $this->db->join('mahasiswa', 'mahasiswa.user_id = users.id', 'left'); // Adjust the join condition based on your database schema
        $this->db->where('users.username', $username);
        $this->db->where('users.password', md5($password)); // Assuming password is MD5 encrypted. Consider using stronger hashing techniques.
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row(); // returns the user row if user found
        } else {
            return false; // returns false if user not found
        }
    }
}
