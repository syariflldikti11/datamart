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
            $query =$this->db->query("
                    SELECT id_smt,sum(jumlah_mhs) as jumlah from pelaporan_pt
                    where provinsi_pt='$provinsi' group by id_smt
                ");
             return $query->result();
        }
        function view_jumlah_dosen_smt_provinsi($provinsi)
         {      
         $query =$this->db->query("
                    SELECT id_smt,sum(jumlah_dosen) as jumlah from pelaporan_pt
                    where provinsi_pt='$provinsi' group by id_smt
                ");
             return $query->result();
        }
          function view_jumlah_dosen_ajar_smt_provinsi($provinsi)
         {      
          $query =$this->db->query("
                    SELECT id_smt,sum(jumlah_dosen_ajar) as jumlah_dosen from pelaporan_pt
                    where provinsi_pt='$provinsi' group by id_smt
                ");
             return $query->result();
        }
         function view_jumlah_mhs_smt($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT id_smt,sum(jumlah_mhs) as jumlah from pelaporan_pt
                    where kode_pt='$kode_pt' group by id_smt
                ");
             return $query->result();
        }
        function view_jumlah_dosen_smt($kode_pt)
         {      
         $query =$this->db->query("
                    SELECT id_smt,sum(jumlah_dosen) as jumlah from pelaporan_pt
                    where kode_pt='$kode_pt' group by id_smt
                ");
             return $query->result();
        }
          function view_jumlah_dosen_ajar_smt($kode_pt)
         {      
          $query =$this->db->query("
                    SELECT id_smt,sum(jumlah_dosen_ajar) as jumlah_dosen from pelaporan_pt
                    where kode_pt='$kode_pt' group by id_smt
                ");
             return $query->result();
        }
      
        
	
}