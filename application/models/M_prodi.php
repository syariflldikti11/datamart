<?php
	
class M_prodi extends CI_model{
	
		
function get_prodi($kode_pt)
    {
        $this->db->select('*');
        $this->db->from('prodi a');
         $this->db->where('a.kode_pt',$kode_pt);
        $query = $this->db->get();
        return $query->result();
    }
    function view_bidang_prodi($kode_pt)
    {
        $this->db->select('nm_kel_bidang, COUNT(nm_kel_bidang) as jumlah');
        $this->db->from('prodi');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('nm_kel_bidang');
        $query = $this->db->get();
        return $query->result();
    }
    function view_akred_prodi($kode_pt)
    {
        $this->db->select('nm_akred, COUNT(nm_akred) as jumlah');
        $this->db->from('prodi');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('nm_akred');
        $query = $this->db->get();
        return $query->result();
    }
    function view_jenjang_prodi($kode_pt)
    {
        $this->db->select('nm_jenj_didik, COUNT(nm_jenj_didik) as jumlah');
        $this->db->from('prodi');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('nm_jenj_didik');
        $query = $this->db->get();
        return $query->result();
    }
    function view_nama_prodi($kode_pt)
    {
        $this->db->select('nm_prodi, COUNT(nm_prodi) as jumlah');
        $this->db->from('prodi');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('nm_prodi');
        $query = $this->db->get();
        return $query->result();
    }

        function get_prodi_provinsi($provinsi)
    {
        $this->db->select('*');
        $this->db->from('prodi a');
         $this->db->where('a.provinsi',$provinsi);
        $query = $this->db->get();
        return $query->result();
    }
    function view_bidang_prodi_provinsi($provinsi)
    {
        $this->db->select('nm_kel_bidang, COUNT(nm_kel_bidang) as jumlah');
        $this->db->from('prodi');
        $this->db->where('provinsi', $provinsi);
        $this->db->group_by('nm_kel_bidang');
        $query = $this->db->get();
        return $query->result();
    }
    function view_akred_prodi_provinsi($provinsi)
    {
        $this->db->select('nm_akred, COUNT(nm_akred) as jumlah');
        $this->db->from('prodi');
        $this->db->where('provinsi', $provinsi);
        $this->db->group_by('nm_akred');
        $query = $this->db->get();
        return $query->result();
    }
    function view_jenjang_prodi_provinsi($provinsi)
    {
        $this->db->select('nm_jenj_didik, COUNT(nm_jenj_didik) as jumlah');
        $this->db->from('prodi');
        $this->db->where('provinsi', $provinsi);
        $this->db->group_by('nm_jenj_didik');
        $query = $this->db->get();
        return $query->result();
    }
    function view_nama_prodi_provinsi($provinsi)
    {
        $this->db->select('nm_prodi, COUNT(nm_prodi) as jumlah');
        $this->db->from('prodi');
        $this->db->where('provinsi', $provinsi);
        $this->db->group_by('nm_prodi');
        $query = $this->db->get();
        return $query->result();
    }
	
}