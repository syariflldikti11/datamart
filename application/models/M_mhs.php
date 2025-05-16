<?php
	
class M_mhs extends CI_model{
	
		
function get_pelaporan_pt($kode_pt)
    {
        $this->db->select('*');
        $this->db->from('pelaporan_pt a');
         $this->db->where('a.kode_pt',$kode_pt);
        $query = $this->db->get();
        return $query->result();
    }
    function get_pelaporan_pt_provinsi($provinsi)
    {
        $this->db->select('*');
        $this->db->from('pelaporan_pt a');
         $this->db->where('a.provinsi_pt',$provinsi);
        $query = $this->db->get();
        return $query->result();
    }
    function rekap_mahasiswa_masuk($kode_pt)
    {
        $this->db->select('*');
        $this->db->from('rekap_mahasiswa_masuk a');
         $this->db->where('a.kode_pt',$kode_pt);
        $query = $this->db->get();
        return $query->result();
    }
     function rekap_mahasiswa_keluar($kode_pt)
    {
        $this->db->select('*');
        $this->db->from('rekap_mahasiswa_keluar a');
         $this->db->where('a.kode_pt',$kode_pt);
        $query = $this->db->get();
        return $query->result();
    }
        function rekap_mahasiswa_masuk_provinsi($provinsi)
    {
        $this->db->select('*');
        $this->db->from('rekap_mahasiswa_masuk a');
         $this->db->where('a.provinsi_pt',$provinsi);
        $query = $this->db->get();
        return $query->result();
    }
     function rekap_mahasiswa_keluar_provinsi($provinsi)
    {
        $this->db->select('*');
        $this->db->from('rekap_mahasiswa_keluar a');
         $this->db->where('a.provinsi_pt',$provinsi);
        $query = $this->db->get();
        return $query->result();
    }
    function view_jumlah_mhs_smt($kode_pt)
    {
        $this->db->select('id_smt, SUM(jumlah_mhs) as jumlah');
        $this->db->from('pelaporan_pt');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('id_smt');
        $query = $this->db->get();
        return $query->result();
    }
    function view_jumlah_mhs_smt_provinsi($provinsi)
    {
        $this->db->select('id_smt, SUM(jumlah_mhs) as jumlah');
        $this->db->from('pelaporan_pt');
        $this->db->where('provinsi_pt', $provinsi);
        $this->db->group_by('id_smt');
        $query = $this->db->get();
        return $query->result();
    }
    function view_mhs_masuk($kode_pt)
    {
        $this->db->select('tahun, SUM(jumlah) as jumlah');
        $this->db->from('rekap_mahasiswa_masuk');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('tahun');
        $query = $this->db->get();
        return $query->result();
    }
    function view_mhs_keluar($kode_pt)
    {
        $this->db->select('tahun, SUM(jumlah) as jumlah');
        $this->db->from('rekap_mahasiswa_keluar');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('tahun');
        $query = $this->db->get();
        return $query->result();
    }
    function view_mhs_masuk_provinsi($provinsi)
    {
        $this->db->select('tahun, SUM(jumlah) as jumlah');
        $this->db->from('rekap_mahasiswa_masuk');
        $this->db->where('provinsi_pt', $provinsi);
        $this->db->group_by('tahun');
        $query = $this->db->get();
        return $query->result();
    }
    function view_mhs_keluar_provinsi($provinsi)
    {
        $this->db->select('tahun, SUM(jumlah) as jumlah');
        $this->db->from('rekap_mahasiswa_keluar');
        $this->db->where('provinsi_pt', $provinsi);
        $this->db->group_by('tahun');
        $query = $this->db->get();
        return $query->result();
    }
        
	
}