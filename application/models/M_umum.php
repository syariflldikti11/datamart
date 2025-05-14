<?php
	
class M_umum extends CI_model{


	
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(null,null, 'kode_pt', 'nama_pt', 'provinsi_pt','kode_prodi','nm_prodi','jenjang_prodi','Kelompok_No_Reg','nuptk','nidn','nama_dosen','jk','jenjang_tertinggi','jabatan_akademik','tmt_sk_jabfung','nm_ikatan_kerja','nm_stat_aktif','nm_stat_pegawai','thn_sert');

    var $column_search = array('kode_pt', 'nama_pt', 'kode_prodi','nm_prodi','nidn','nama_dosen');
    // default order 
    var $order = array('kode_pt' => 'asc');

	private function _get_datatables_query()
    {
     $tabel=$this->session->userdata('tabel'); 
        $this->db->from($tabel);
    
        $i = 0;
        foreach ($this->column_search as $item) // loop kolom 
        {
            if ($this->input->post('search')['value']) // jika datatable mengirim POST untuk search
            {
                if ($i === 0) // looping pertama
                {
                    $this->db->group_start();
                    $this->db->like($item, $this->input->post('search')['value']);
                } else {
                    $this->db->or_like($item, $this->input->post('search')['value']);
                }
                if (count($this->column_search) - 1 == $i) //looping terakhir
                    $this->db->group_end();
            }
            $i++;
        }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $this->db->order_by($this->column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_sync(){

    $this->db->select('*');
    $this->db->from('pt a');
     $this->db->limit(1);
    $query = $this->db->get();
        return $query->row();
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();
        return $query->result();
    }


    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
    	  $tabel=$this->session->userdata('tabel'); 
        $this->db->from($tabel);
        return $this->db->count_all_results();
    }


	
	public function hitung($tabel)
{   
   $query = $this->db->get($tabel);
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}	
function row_data($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->row();		
	}
function get_data($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result();		
	}
	function get_dataa($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result();		
	}
		function get_datar($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result_array();		
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