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
            $query =$this->db->query("
                    SELECT nm_bp,count(nm_bp) as jumlah from pt
                    where provinsi='$provinsi' group by nm_bp
                ");
             return $query->result();
        }
        function view_akred_pt($provinsi)
         {      
          $query =$this->db->query("
                    SELECT nm_akred,count(nm_akred) as jumlah from pt
                    where provinsi='$provinsi' group by nm_akred
                ");
             return $query->result();
        }
      
        
	
}