<?php
	
class M_dosen extends CI_model{
	
		function get_dosen($kode_pt)
    {
        $this->db->select('*');
        $this->db->from('dosen a');
         $this->db->where('a.kode_pt',$kode_pt);
        $query = $this->db->get();
        return $query->result();
    }

    function view_dosen_ikatan_kerja($kode_pt)
    {
        $this->db->select('nm_ikatan_kerja, COUNT(nm_ikatan_kerja) as jumlah');
        $this->db->from('dosen');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('nm_ikatan_kerja');
        $query = $this->db->get();
        return $query->result();
    }
    function view_dosen_jabfung($kode_pt)
    {
        $this->db->select('jabatan_akademik, COUNT(jabatan_akademik) as jumlah');
        $this->db->from('dosen');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('jabatan_akademik');
        $query = $this->db->get();
        return $query->result();
    }
    function view_dosen_jenjang_tertinggi($kode_pt)
    {
        $this->db->select('jenjang_tertinggi, COUNT(jenjang_tertinggi) as jumlah');
        $this->db->from('dosen');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('jenjang_tertinggi');
        $query = $this->db->get();
        return $query->result();
    }
    function view_dosen_jk($kode_pt)
    {
        $this->db->select('jk, COUNT(jk) as jumlah');
        $this->db->from('dosen');
        $this->db->where('kode_pt', $kode_pt);
        $this->db->group_by('jk');
        $query = $this->db->get();
        return $query->result();
    }
         function view_dosen_serdos($kode_pt)
         {      
            $this->db->select(["CASE WHEN thn_sert > 0 THEN 'Tersertifikasi' ELSE 'Tidak_Tersertifikasi' END AS kategori", 'COUNT(*) AS jumlah']);
            $this->db->from('dosen');
            $this->db->where('kode_pt', $kode_pt);
            $this->db->group_by(["CASE WHEN thn_sert > 0 THEN 'Tersertifikasi' ELSE 'Tidak_Tersertifikasi' END"]);
            $query = $this->db->get();
            return $query->result();
        }
        function view_dosen_kelompok($kode_pt)
        {
            $this->db->select('Kelompok_No_Reg, COUNT(Kelompok_No_Reg) as jumlah');
            $this->db->from('dosen');
            $this->db->where('kode_pt', $kode_pt);
            $this->db->group_by('Kelompok_No_Reg');
            $query = $this->db->get();
            return $query->result();
        }
         function view_dosen_stat_aktif($kode_pt)
         {      
            $this->db->select('nm_stat_aktif, COUNT(nm_stat_aktif) as jumlah');
            $this->db->from('dosen');
            $this->db->where('kode_pt', $kode_pt);
            $this->db->group_by('nm_stat_aktif');
            $query = $this->db->get();
            return $query->result();
        }
         function view_dosen_stat_pegawai($kode_pt)
         {      
            $this->db->select('nm_stat_pegawai, COUNT(nm_stat_pegawai) as jumlah');
            $this->db->from('dosen');
            $this->db->where('kode_pt', $kode_pt);
            $this->db->group_by('nm_stat_pegawai');
            $query = $this->db->get();
            return $query->result();
        }
         function view_jumlah_dosen($kode_pt)
         {      
            $this->db->select('kode_pt, nama_pt, provinsi_pt, COUNT(kode_pt) as jumlah');
            $this->db->from('dosen');
            $this->db->where('kode_pt', $kode_pt);
            $this->db->group_by(array('kode_pt', 'nama_pt', 'provinsi_pt'));
            $query = $this->db->get();
            return $query->result();
        }
        function view_dosen_ikatan_kerja_provinsi($provinsi)
         {      
            $this->db->select('nm_ikatan_kerja, COUNT(nm_ikatan_kerja) as jumlah');
            $this->db->from('dosen');
            $this->db->where('provinsi_pt', $provinsi);
            $this->db->group_by('nm_ikatan_kerja');
            $query = $this->db->get();
            return $query->result();
        }
         function view_dosen_jabfung_provinsi($provinsi)
         {      
            $this->db->select('jabatan_akademik, COUNT(jabatan_akademik) as jumlah');
            $this->db->from('dosen');
            $this->db->where('provinsi_pt', $provinsi);
            $this->db->group_by('jabatan_akademik');
            $query = $this->db->get();
            return $query->result();
        }
         function view_dosen_jenjang_tertinggi_provinsi($provinsi)
         {      
            $this->db->select('jenjang_tertinggi, COUNT(jenjang_tertinggi) as jumlah');
            $this->db->from('dosen');
            $this->db->where('provinsi_pt', $provinsi);
            $this->db->group_by('jenjang_tertinggi');
            $query = $this->db->get();
            return $query->result();
        }
         function view_dosen_jk_provinsi($provinsi)
         {      
            $this->db->select('jk, COUNT(jk) as jumlah');
            $this->db->from('dosen');
            $this->db->where('provinsi_pt', $provinsi);
            $this->db->group_by('jk');
            $query = $this->db->get();
            return $query->result();
        }
        function view_dosen_kelompok_provinsi($provinsi)
         {      
            $this->db->select('Kelompok_No_Reg, COUNT(Kelompok_No_Reg) as jumlah');
            $this->db->from('dosen');
            $this->db->where('provinsi_pt', $provinsi);
            $this->db->group_by('Kelompok_No_Reg');
            $query = $this->db->get();
            return $query->result();
        }
         function view_dosen_stat_aktif_provinsi($provinsi)
         {      
            $this->db->select('nm_stat_aktif, COUNT(nm_stat_aktif) as jumlah');
            $this->db->from('dosen');
            $this->db->where('provinsi_pt', $provinsi);
            $this->db->group_by('nm_stat_aktif');
            $query = $this->db->get();
            return $query->result();
        }
         function view_dosen_stat_pegawai_provinsi($provinsi)
         {      
            $this->db->select('nm_stat_pegawai, COUNT(nm_stat_pegawai) as jumlah');
            $this->db->from('dosen');
            $this->db->where('provinsi_pt', $provinsi);
            $this->db->group_by('nm_stat_pegawai');
            $query = $this->db->get();
            return $query->result();
        }
         function view_jumlah_dosen_provinsi($provinsi)
         {      
            $this->db->select('kode_pt, nama_pt, provinsi_pt, COUNT(provinsi_pt) as jumlah');
            $this->db->from('dosen');
            $this->db->where('provinsi_pt', $provinsi);
            $this->db->group_by(array('kode_pt', 'nama_pt', 'provinsi_pt'));
            $query = $this->db->get();
            return $query->result();
        }
  
	
}