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
            $query =$this->db->query("
                    SELECT nm_kel_bidang,count(nm_kel_bidang) as jumlah from prodi
                    where kode_pt=$kode_pt group by nm_kel_bidang
                ");
             return $query->result();
        }
         function view_akred_prodi($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT nm_akred,count(nm_akred) as jumlah from prodi
                    where kode_pt=$kode_pt group by nm_akred
                ");
             return $query->result();
        }
         function view_jenjang_prodi($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT nm_jenj_didik,count(nm_jenj_didik) as jumlah from prodi
                    where kode_pt=$kode_pt group by nm_jenj_didik
                ");
             return $query->result();
        }
         function view_nama_prodi($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT nm_prodi,count(nm_prodi) as jumlah from prodi
                    where kode_pt=$kode_pt group by nm_prodi
                ");
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
            $query =$this->db->query("
                    SELECT nm_kel_bidang,count(nm_kel_bidang) as jumlah from prodi
                    where provinsi='$provinsi' group by nm_kel_bidang
                ");
             return $query->result();
        }
         function view_akred_prodi_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT nm_akred,count(nm_akred) as jumlah from prodi
                    where provinsi='$provinsi' group by nm_akred
                ");
             return $query->result();
        }
         function view_jenjang_prodi_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT nm_jenj_didik,count(nm_jenj_didik) as jumlah from prodi
                    where provinsi='$provinsi' group by nm_jenj_didik
                ");
             return $query->result();
        }
         function view_nama_prodi_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT nm_prodi,count(nm_prodi) as jumlah from prodi
                    where provinsi='$provinsi' group by nm_prodi
                ");
             return $query->result();
        }
	
}