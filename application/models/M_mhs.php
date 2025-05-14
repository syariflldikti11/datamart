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
            $query =$this->db->query("
                    SELECT id_smt,sum(jumlah_mhs) as jumlah from pelaporan_pt
                    where kode_pt=$kode_pt group by id_smt
                ");
             return $query->result();
        }
           function view_jumlah_mhs_smt_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT id_smt,sum(jumlah_mhs) as jumlah from pelaporan_pt
                    where provinsi_pt='$provinsi' group by id_smt
                ");
             return $query->result();
        }
        function view_mhs_masuk($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT tahun,sum(jumlah) as jumlah from rekap_mahasiswa_masuk
                    where kode_pt=$kode_pt group by tahun
                ");
             return $query->result();
        }
         function view_mhs_keluar($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT tahun,sum(jumlah) as jumlah from rekap_mahasiswa_keluar
                    where kode_pt=$kode_pt group by tahun
                ");
             return $query->result();
        }
        
         function view_mhs_masuk_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT tahun,sum(jumlah) as jumlah from rekap_mahasiswa_masuk
                    where provinsi_pt='$provinsi' group by tahun
                ");
             return $query->result();
        }
         function view_mhs_keluar_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT tahun,sum(jumlah) as jumlah from rekap_mahasiswa_keluar
                    where provinsi_pt='$provinsi' group by tahun
                ");
             return $query->result();
        }
        
	
}