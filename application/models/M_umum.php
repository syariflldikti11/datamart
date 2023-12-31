<?php
	
class M_umum extends CI_model{
	
		
function get_data($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result();		
	}
function ambil_data($tabel, $kolom = FALSE, $id = FALSE)
	{
		if ($id === FALSE) {
			$q = $this->db->get($tabel);	//ambil seluruh data tabel
			return $q->result();		//kembalikan
		}
		$q = $this->db->get_where($tabel, array($kolom => $id)); //ambil satu baris data dengan $kolom=$id
		return $q->row();				//kembalikan
	}
	function hapus($tabel,$kolom,$id)
	{
		$this->db->delete($tabel,array($kolom => $id));
	}
	function set_data($tabel)
	{
		$data=$this->input->post(null,TRUE);
		array_pop($data);
		return $this->db->insert($tabel, $data);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 function UpdateData($tabelName, $data, $where){
		$res = $this->db->update($tabelName, $data, $where);
		return $res;
	}
	function update_data($tabel)
	{
		$data=$this->input->post(null,TRUE);  
		$primary=array_slice($data,0,1);	
		array_shift($data);		
		array_pop($data);		
	    $this->db->where($primary);
	    $this->db->update($tabel, $data);	
	}
	

	
}