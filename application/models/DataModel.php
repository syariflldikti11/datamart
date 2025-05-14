<?php
class DataModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertPT($data) {
        return $this->db->insert('pt', $data);
    }
    
    public function insertProdi($data) {
        return $this->db->insert('prodi', $data);
    }
      public function insertDosen($data) {
        return $this->db->insert('dosen', $data);
    }
      public function insertMhsmasuk($data) {
        return $this->db->insert('rekap_mahasiswa_masuk', $data);
    }
     public function insertMhskeluar($data) {
        return $this->db->insert('rekap_mahasiswa_keluar', $data);
    }
     public function insertPelaporanpt($data) {
        return $this->db->insert('pelaporan_pt', $data);
    }
}
