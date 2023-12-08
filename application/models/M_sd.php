<?php
	
class M_sd extends CI_model{
	
 var $table = 'dosen_list_dosen';
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(null,null, 'kode_pt', 'nama_pt', 'provinsi_pt','Kelompok_No_Reg','nidn','nama_dosen','jk','jenjang_tertinggi','jabatan_akademik','nm_ikatan_kerja','nm_stat_aktif');

    var $column_search = array('kode_pt', 'nama_pt', 'provinsi_pt','Kelompok_No_Reg','nidn','nama_dosen');
    // default order 
    var $order = array('kode_pt' => 'asc');

	private function _get_datatables_query()
    {
        $dosen = $this->session->userdata('dosen');
        $this->db->from($this->table);
        $this->db->where("".$dosen."");
    
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
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


			function get_dosen_jenjang_dindik()
	{
		$query=$this->db->query("SELECT
ds.kode_pt,
ds.nama_pt,
ds.provinsi_pt,
SUM(CASE ds.jenjang_tertinggi WHEN 'D3' THEN 1 ELSE 0 END) as D3,
SUM(CASE ds.jenjang_tertinggi WHEN 'D4' THEN 1 ELSE 0 END) as D4,
SUM(CASE ds.jenjang_tertinggi WHEN 'S1' THEN 1 ELSE 0 END) as S1,
SUM(CASE ds.jenjang_tertinggi WHEN 'S2' THEN 1 ELSE 0 END) as S2,
SUM(CASE ds.jenjang_tertinggi WHEN 'S3' THEN 1 ELSE 0 END) as S3,
SUM(CASE ds.jenjang_tertinggi WHEN 'Profesi' THEN 1 ELSE 0 END) as Profesi,
SUM(CASE ds.jenjang_tertinggi WHEN 'Sp-1' THEN 1 ELSE 0 END) as Sp1,
SUM(CASE ds.jenjang_tertinggi WHEN 'Sp-2' THEN 1 ELSE 0 END) as Sp2,
SUM(CASE ds.jenjang_tertinggi WHEN 'S2 Terapan' THEN 1 ELSE 0 END) as S2_Terapan,
SUM(CASE ds.jenjang_tertinggi WHEN 'S3 Terapan' THEN 1 ELSE 0 END) as S3_Terapan,
SUM(CASE ds.jenjang_tertinggi WHEN NULL THEN 1 ELSE 0 END) as Tanpa_Jenjang,
count(jk) as Jumlah
FROM 
dosen_list_dosen ds

WHERE 
ds.id_ikatan_kerja in ('A','B','I')

GROUP BY ds.kode_pt,ds.nama_pt,ds.provinsi_pt
ORDER BY ds.kode_pt"); 
		return $query->result();
	}

	function get_dosen_jabfung()
	{
		$query=$this->db->query("SELECT
ds.kode_pt,
ds.nama_pt,
ds.provinsi_pt,
SUM(CASE ds.jabatan_akademik WHEN 'Asisten Ahli' THEN 1 ELSE 0 END) as Asisten_Ahli,
SUM(CASE ds.jabatan_akademik WHEN 'Lektor' THEN 1 ELSE 0 END) as Lektor,
SUM(CASE ds.jabatan_akademik WHEN 'Lektor Kepala' THEN 1 ELSE 0 END) as Lektor_Kepala,
SUM(CASE ds.jabatan_akademik WHEN 'Profesor' THEN 1 ELSE 0 END) as Profesor,
SUM(CASE ds.jabatan_akademik WHEN NULL THEN 1 ELSE 0 END) as Tanpa_Jabatan,
count(jk) as Jumlah
FROM 
dosen_list_dosen ds

WHERE 
ds.id_ikatan_kerja in ('A','B','I')

GROUP BY ds.kode_pt,ds.nama_pt,ds.provinsi_pt
ORDER BY ds.kode_pt"); 
		return $query->result();
	}
		function get_dosen_jk()
	{
		$query=$this->db->query("SELECT
ds.kode_pt,
ds.nama_pt,
ds.provinsi_pt,
SUM(CASE ds.jk WHEN 'L' THEN 1 ELSE 0 END) as L,
SUM(CASE ds.jk WHEN 'P' THEN 1 ELSE 0 END) as P,
count(jk) as Jumlah
FROM 
dosen_list_dosen ds

WHERE 
ds.id_ikatan_kerja in ('A','B','I')

GROUP BY ds.kode_pt,ds.nama_pt,ds.provinsi_pt
ORDER BY ds.kode_pt"); 
		return $query->result();
	}
	function get_dosen_status_kepegawaian()
	{
		$query=$this->db->query("SELECT
ds.kode_pt,
ds.nama_pt,
ds.provinsi_pt,
SUM(CASE ds.id_ikatan_kerja WHEN 'A' THEN 1 ELSE 0 END) as Dosen_Tetap,
SUM(CASE ds.id_ikatan_kerja WHEN 'B' THEN 1 ELSE 0 END) as Dosen_PNS_DPK,
SUM(CASE ds.id_ikatan_kerja WHEN 'I' THEN 1 ELSE 0 END) as NIDK,
SUM(CASE ds.jabatan_akademik WHEN NULL THEN 1 ELSE 0 END) as Tanpa_Status,
count(jk) as Jumlah
FROM 
dosen_list_dosen ds

WHERE 
ds.id_ikatan_kerja in ('A','B','I')

GROUP BY ds.kode_pt,ds.nama_pt,ds.provinsi_pt
ORDER BY ds.kode_pt"); 
		return $query->result();
	}



	
}