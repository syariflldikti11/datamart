<?php
class AuthController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TokenModel');
        $this->load->helper('url');
    }

    // Endpoint untuk menghasilkan token
    public function generateToken() {
        // Validasi kredensial di sini (misalnya, username dan password)
        // Jika kredensial valid, buat token
        $token = bin2hex(random_bytes(32)); // Buat token acak
        $data = array(
            'token' => $token,
        );

        // Simpan token ke database
        if ($this->db->insert('api_tokens', $data)) {
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode(['token' => $token]));
        } else {
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode(['error' => 'Failed to generate token']));
        }
    }
}
