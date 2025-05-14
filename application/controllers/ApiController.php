<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// application/controllers/ApiController.php
class ApiController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TokenModel');
        $this->load->model('DataModel');
        $this->load->helper('url');
          $this->load->database();
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    public function truncate_pt(){
         $this->db->query("truncate pt");
    }
      public function truncate_dosen(){
         $this->db->query("truncate dosen");
    }
    public function truncate_pelaporan_pt(){
         $this->db->query("truncate pelaporan_pt");
    }
    public function truncate_prodi(){
         $this->db->query("truncate prodi");
    }
    public function truncate_mhs_masuk(){
         $this->db->query("truncate rekap_mahasiswa_masuk");
    }
     public function truncate_mhs_keluar(){
         $this->db->query("truncate rekap_mahasiswa_keluar");
    }
      public function receivePelaporanpt() {
           $headers = $this->input->request_headers();
        if (!isset($headers['Authorization'])) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Authorization header not found']));
            return;
        }

        // Mengambil token dari header
        $authHeader = $headers['Authorization'];
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
        } else {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid Authorization header']));
            return;
        }

        // Verifikasi token
        if (!$this->TokenModel->verifyToken($token)) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid or expired token']));
            return;
        }
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        // Tambahkan log untuk debugging
        log_message('debug', 'Received JSON: ' . print_r($data, true));

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Invalid JSON']));
            return;
        }

        if (!isset($data['kode_pt']) || !isset($data['nama_pt'])) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Missing fields']));
            return;
        }

        // Sanitasi data
        $data = $this->security->xss_clean($data);

        // Cek apakah data berhasil disimpan
        if ($this->DataModel->insertPelaporanpt($data)) {
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode(['success' => 'Data successfully saved']));
        } else {
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode(['error' => 'Failed to save data']));
        }
    }
      public function receiveDosen() {
           $headers = $this->input->request_headers();
        if (!isset($headers['Authorization'])) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Authorization header not found']));
            return;
        }

        // Mengambil token dari header
        $authHeader = $headers['Authorization'];
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
        } else {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid Authorization header']));
            return;
        }

        // Verifikasi token
        if (!$this->TokenModel->verifyToken($token)) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid or expired token']));
            return;
        }
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        // Tambahkan log untuk debugging
        log_message('debug', 'Received JSON: ' . print_r($data, true));

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Invalid JSON']));
            return;
        }

        if (!isset($data['kode_pt']) || !isset($data['nama_pt'])) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Missing fields']));
            return;
        }

        // Sanitasi data
        $data = $this->security->xss_clean($data);

        // Cek apakah data berhasil disimpan
        if ($this->DataModel->insertDosen($data)) {
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode(['success' => 'Data successfully saved']));
        } else {
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode(['error' => 'Failed to save data']));
        }
    }
    // Endpoint untuk menerima data
    public function receiveMhsmasuk() {
           $headers = $this->input->request_headers();
        if (!isset($headers['Authorization'])) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Authorization header not found']));
            return;
        }

        // Mengambil token dari header
        $authHeader = $headers['Authorization'];
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
        } else {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid Authorization header']));
            return;
        }

        // Verifikasi token
        if (!$this->TokenModel->verifyToken($token)) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid or expired token']));
            return;
        }
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        // Tambahkan log untuk debugging
        log_message('debug', 'Received JSON: ' . print_r($data, true));

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Invalid JSON']));
            return;
        }

        if (!isset($data['kode_pt']) || !isset($data['nama_pt'])) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Missing fields']));
            return;
        }

        // Sanitasi data
        $data = $this->security->xss_clean($data);

        // Cek apakah data berhasil disimpan
        if ($this->DataModel->insertMhsmasuk($data)) {
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode(['success' => 'Data successfully saved']));
        } else {
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode(['error' => 'Failed to save data']));
        }
    }
     public function receiveMhskeluar() {
               $headers = $this->input->request_headers();
        if (!isset($headers['Authorization'])) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Authorization header not found']));
            return;
        }

        // Mengambil token dari header
        $authHeader = $headers['Authorization'];
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
        } else {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid Authorization header']));
            return;
        }

        // Verifikasi token
        if (!$this->TokenModel->verifyToken($token)) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid or expired token']));
            return;
        }
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        // Tambahkan log untuk debugging
        log_message('debug', 'Received JSON: ' . print_r($data, true));

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Invalid JSON']));
            return;
        }

        if (!isset($data['kode_pt']) || !isset($data['nama_pt'])) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Missing fields']));
            return;
        }

        // Sanitasi data
        $data = $this->security->xss_clean($data);

        // Cek apakah data berhasil disimpan
        if ($this->DataModel->insertMhskeluar($data)) {
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode(['success' => 'Data successfully saved']));
        } else {
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode(['error' => 'Failed to save data']));
        }
    }
    // Endpoint untuk menerima data
    public function receivePTS() {
       $headers = $this->input->request_headers();
        if (!isset($headers['Authorization'])) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Authorization header not found']));
            return;
        }

        // Mengambil token dari header
        $authHeader = $headers['Authorization'];
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
        } else {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid Authorization header']));
            return;
        }

        // Verifikasi token
        if (!$this->TokenModel->verifyToken($token)) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid or expired token']));
            return;
        }


        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        // Tambahkan log untuk debugging
        log_message('debug', 'Received JSON: ' . print_r($data, true));

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Invalid JSON']));
            return;
        }

        if (!isset($data['kode_pt']) || !isset($data['nama_pt'])) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Missing fields']));
            return;
        }

        // Sanitasi data
        $data = $this->security->xss_clean($data);

        // Cek apakah data berhasil disimpan
        if ($this->DataModel->insertPT($data)) {
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode(['success' => 'Data successfully saved']));
        } else {
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode(['error' => 'Failed to save data']));
        }
    }
        public function receiveProdi() {
                  $headers = $this->input->request_headers();
        if (!isset($headers['Authorization'])) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Authorization header not found']));
            return;
        }

        // Mengambil token dari header
        $authHeader = $headers['Authorization'];
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
        } else {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid Authorization header']));
            return;
        }

        // Verifikasi token
        if (!$this->TokenModel->verifyToken($token)) {
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(['error' => 'Invalid or expired token']));
            return;
        }
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        // Tambahkan log untuk debugging
        log_message('debug', 'Received JSON: ' . print_r($data, true));

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Invalid JSON']));
            return;
        }

        if (!isset($data['kode_pt']) || !isset($data['nama_pt'])) {
            $this->output
                ->set_status_header(400)
                ->set_output(json_encode(['error' => 'Missing fields']));
            return;
        }

        // Sanitasi data
        $data = $this->security->xss_clean($data);

        // Cek apakah data berhasil disimpan
        if ($this->DataModel->insertProdi($data)) {
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode(['success' => 'Data successfully saved']));
        } else {
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode(['error' => 'Failed to save data']));
        }
    }
}
