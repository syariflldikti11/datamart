<?php
	
class M_pts extends CI_model{
	
		
function get_pt($provinsi)
    {
        $this->db->select('*');
        $this->db->from('pt a');
         $this->db->where('a.provinsi',$provinsi);
        $query = $this->db->get();
        return $query->result();
    }


    function view_bentuk_pt($provinsi)
    {
        $this->db->select('nm_bp, COUNT(nm_bp) as jumlah');
        $this->db->from('pt');
        $this->db->where('provinsi', $provinsi);
        $this->db->group_by('nm_bp');
        $query = $this->db->get();
        return $query->result();
    }
    function view_akred_pt($provinsi)
    {
        $this->db->select('nm_akred, COUNT(nm_akred) as jumlah');
        $this->db->from('pt');
        $this->db->where('provinsi', $provinsi);
        $this->db->group_by('nm_akred');
        $query = $this->db->get();
        return $query->result();
    }
       function get_detail_pt($kode_pt)
{
    return $this->db->get_where('pt', ['kode_pt' => $kode_pt])->row();
}

      
        
	
}