<?php
	
class M_pelaporan_pt extends CI_model{
	
		
function get_pelaporan_pt_provinsi($provinsi)
    {
        $this->db->select('*');
        $this->db->from('pelaporan_pt a');
         $this->db->where('a.provinsi_pt',$provinsi);
        $query = $this->db->get();
        return $query->result();
    }
    function get_pelaporan_pt($kode_pt)
    {
        $this->db->select('*');
        $this->db->from('pelaporan_pt a');
         $this->db->where('a.kode_pt',$kode_pt);
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
    function view_jumlah_dosen_smt_provinsi($provinsi)
    {
        $this->db->select('id_smt, SUM(jumlah_dosen) as jumlah');
        $this->db->from('pelaporan_pt');
        $this->db->where('provinsi_pt', $provinsi);
        $this->db->group_by('id_smt');
        $query = $this->db->get();
        return $query->result();
    }
    function view_jumlah_dosen_ajar_smt_provinsi($provinsi)
    {
        $this->db->select('id_smt, SUM(jumlah_dosen_ajar) as jumlah_dosen');
        $this->db->from('pelaporan_pt');
        $this->db->where('provinsi_pt', $provinsi);
        $this->db->group_by('id_smt');
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
    function view_jumlah_dosen_smt($kode_pt)
    {
        $this->db->select('id_smt, SUM(jumlah_dosen) as jumlah');
        $this->db->from('pelaporan_pt');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('id_smt');
        $query = $this->db->get();
        return $query->result();
    }
    function view_jumlah_dosen_ajar_smt($kode_pt)
    {
        $this->db->select('id_smt, SUM(jumlah_dosen_ajar) as jumlah_dosen');
        $this->db->from('pelaporan_pt');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('id_smt');
        $query = $this->db->get();
        return $query->result();
    }
      
        
	
}