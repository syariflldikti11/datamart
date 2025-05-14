<?php
	
class M_dosen extends CI_model{
	
		

    function view_dosen_ikatan_kerja($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT nm_ikatan_kerja,count(nm_ikatan_kerja) as jumlah from dosen
                    where kode_pt=$kode_pt group by nm_ikatan_kerja
                ");
             return $query->result();
        }
         function view_dosen_jabfung($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT jabatan_akademik,count(jabatan_akademik) as jumlah from dosen
                    where kode_pt=$kode_pt group by jabatan_akademik
                ");
             return $query->result();
        }
         function view_dosen_jenjang_tertinggi($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT jenjang_tertinggi,count(jenjang_tertinggi) as jumlah from dosen
                    where kode_pt=$kode_pt group by jenjang_tertinggi
                ");
             return $query->result();
        }
         function view_dosen_jk($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT jk,count(jk) as jumlah from dosen
                    where kode_pt=$kode_pt group by jk
                ");
             return $query->result();
        }
        function view_dosen_kelompok($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT Kelompok_No_Reg,count(Kelompok_No_Reg) as jumlah from dosen
                    where kode_pt=$kode_pt group by Kelompok_No_Reg
                ");
             return $query->result();
        }
         function view_dosen_stat_aktif($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT nm_stat_aktif,count(nm_stat_aktif) as jumlah from dosen
                    where kode_pt=$kode_pt group by nm_stat_aktif
                ");
             return $query->result();
        }
         function view_dosen_stat_pegawai($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT nm_stat_pegawai,count(nm_stat_pegawai) as jumlah from dosen
                    where kode_pt=$kode_pt group by nm_stat_pegawai
                ");
             return $query->result();
        }
         function view_jumlah_dosen($kode_pt)
         {      
            $query =$this->db->query("
                    SELECT kode_pt,nama_pt,provinsi_pt,count(kode_pt) as jumlah from dosen
                    where kode_pt=$kode_pt group by kode_pt,nama_pt,provinsi_pt
                ");
             return $query->result();
        }
        function view_dosen_ikatan_kerja_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT nm_ikatan_kerja,count(nm_ikatan_kerja) as jumlah from dosen
                    where provinsi_pt='$provinsi' group by nm_ikatan_kerja
                ");
             return $query->result();
        }
         function view_dosen_jabfung_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT jabatan_akademik,count(jabatan_akademik) as jumlah from dosen
                    where provinsi_pt='$provinsi' group by jabatan_akademik
                ");
             return $query->result();
        }
         function view_dosen_jenjang_tertinggi_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT jenjang_tertinggi,count(jenjang_tertinggi) as jumlah from dosen
                    where provinsi_pt='$provinsi' group by jenjang_tertinggi
                ");
             return $query->result();
        }
         function view_dosen_jk_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT jk,count(jk) as jumlah from dosen
                    where provinsi_pt='$provinsi' group by jk
                ");
             return $query->result();
        }
        function view_dosen_kelompok_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT Kelompok_No_Reg,count(Kelompok_No_Reg) as jumlah from dosen
                    where provinsi_pt='$provinsi' group by Kelompok_No_Reg
                ");
             return $query->result();
        }
         function view_dosen_stat_aktif_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT nm_stat_aktif,count(nm_stat_aktif) as jumlah from dosen
                    where provinsi_pt='$provinsi' group by nm_stat_aktif
                ");
             return $query->result();
        }
         function view_dosen_stat_pegawai_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT nm_stat_pegawai,count(nm_stat_pegawai) as jumlah from dosen
                    where provinsi_pt='$provinsi' group by nm_stat_pegawai
                ");
             return $query->result();
        }
         function view_jumlah_dosen_provinsi($provinsi)
         {      
            $query =$this->db->query("
                    SELECT kode_pt,nama_pt,provinsi_pt,count(provinsi_pt) as jumlah from dosen
                    where provinsi_pt='$provinsi' group by kode_pt,nama_pt,provinsi_pt
                ");
             return $query->result();
        }
  
	
}