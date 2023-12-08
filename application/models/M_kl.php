<?php
	
class M_kl extends CI_model{
	
		
function get_detail_pt($kode_pt)
    {
        $sql = "SELECT * from rekap_pt pt where
        pt.kode_pt='$kode_pt'
        
        ORDER BY pt.kode_pt";
        return $this->db->query($sql)->row();
    }
    function get_akred_ps_by_pt($kode_pt)
    {
        $sql = "SELECT 
        (SELECT COUNT(pt.kode_pt) FROM rekap_prodi pt
        WHERE
        pt.nm_akred='Unggul' and  pt.kode_pt='$kode_pt') AS Unggul,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_prodi pt
        WHERE
        pt.nm_akred='Baik Sekali' and  pt.kode_pt='$kode_pt') AS Baik_Sekali,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_prodi pt
        WHERE
        pt.nm_akred='Baik' and  pt.kode_pt='$kode_pt') AS Baik,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_prodi pt
        WHERE
        pt.nm_akred='A' and  pt.kode_pt='$kode_pt') AS A,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_prodi pt
        WHERE
        pt.nm_akred='B' and  pt.kode_pt='$kode_pt') AS B,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_prodi pt
        WHERE
        pt.nm_akred='C' and  pt.kode_pt='$kode_pt') AS C,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_prodi pt
        WHERE
        pt.nm_akred IS NULL and  pt.kode_pt='$kode_pt') AS Belum_akred";
        return $this->db->query($sql)->row();
    }
	
}