<?php
class M_login extends CI_Model{

	function auth_admin($username){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
		}
	
 
 
}