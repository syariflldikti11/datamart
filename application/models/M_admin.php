<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model{
    

 function get_dokumen_pts($id){
  
    $this->db->select('*');
    $this->db->from('dokumen_pts a');
    $this->db->join('jenis_dokumen b','a.id_jenis_dokumen=b.id_jenis_dokumen','');
    $this->db->join('pt c','a.kode_pt=c.kode_pt','');
     $this->db->where('a.kode_pt',$id);
    $query = $this->db->get();
        return $query->result();
    }
    
     function get_dokumen_prodi($kode_pt, $kode_prodi)
    {
        $this->db->select('*');
        $this->db->from('dokumen_prodi a');
        $this->db->join('jenis_dokumen b', 'a.id_jenis_dokumen = b.id_jenis_dokumen');
        $this->db->join('prodi c', 'a.kode_pt = c.kode_pt AND a.kode_prodi = c.kode_prodi');
        $this->db->where('a.kode_pt', $kode_pt);
        $this->db->where('a.kode_prodi', $kode_prodi);
        $query = $this->db->get();
        return $query->result();
    }
 
}
?>