<?php
	
class M_dashboard extends CI_model{
	
		
function get_jumlah_akred_seluruh_pt()
    {
        $sql = "SELECT 
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
        pt.nm_akred='Unggul') AS Unggul,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
        pt.nm_akred='Baik Sekali') AS Baik_Sekali,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
        pt.nm_akred='Baik') AS Baik,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
        pt.nm_akred='A') AS A,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
        pt.nm_akred='B') AS B,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
        pt.nm_akred='C') AS C,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
        pt.nm_akred IS NULL) AS Belum_akred";
        return $this->db->query($sql)->row();
    }

        function get_jumlah_akred_seluruh_ps()
    {
        $sql = "SELECT
        (SELECT COUNT(ps.kode_pt) FROM rekap_prodi ps
        WHERE
       
        ps.nm_akred='Unggul') AS Unggul,
         
        (SELECT COUNT(ps.kode_pt) FROM rekap_prodi ps
        WHERE
       
        ps.nm_akred='Baik Sekali') AS Baik_Sekali,
        
        (SELECT COUNT(ps.kode_pt) FROM rekap_prodi ps
        WHERE
       
        ps.nm_akred='Baik') AS Baik,
        
        (SELECT COUNT(ps.kode_pt) FROM rekap_prodi ps
        WHERE
       
        ps.nm_akred='A') AS A,
        
        (SELECT COUNT(ps.kode_pt) FROM rekap_prodi ps
        WHERE
       
        ps.nm_akred='B') AS B,
        
        (SELECT COUNT(ps.kode_pt) FROM rekap_prodi ps
        WHERE
       
        ps.nm_akred='C') AS C,
        
        (SELECT COUNT(ps.kode_pt) FROM rekap_prodi ps
        WHERE
       
        ps.nm_akred IS NULL) AS Belum_akred";
        return $this->db->query($sql)->row();
    }
    function get_jumlah_pt()
    {
        $sql = "SELECT
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
       
        pt.provinsi_pt='Prov. Kalimantan Selatan') AS Kalsel,
         
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
       
        pt.provinsi_pt='Prov. Kalimantan Tengah') AS Kalteng,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
       
        pt.provinsi_pt='Prov. Kalimantan Timur') AS Kaltim,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
       
        pt.provinsi_pt='Prov. Kalimantan Barat') AS Kalbar,
        
        (SELECT COUNT(pt.kode_pt) FROM rekap_pt pt
        WHERE
       
        pt.provinsi_pt='Prov. Kalimantan Utara') AS Kalut";
        return $this->db->query($sql)->row();
    }

	
}