<?php
class TokenModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Verifikasi token
    public function verifyToken($token) {
        $this->db->where('token', $token);
        $query = $this->db->get('api_tokens');
        
        if ($query->num_rows() > 0) {
            return true;
        }
        return false;
    }
}
