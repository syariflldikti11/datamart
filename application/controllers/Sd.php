<?php

class Sd extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_sd');
    $this->load->model('m_umum');
  }
  
    

public function ajax_dosen()
  {
      
      $list = $this->m_sd->get_datatables();
      $data = array();
      $no = $this->input->post('start');
      //looping data mahasiswa
      foreach ($list as $d) {
          $no++;
          $row = array();
          //row pertama akan kita gunakan untuk btn edit dan delete
          $row[] =  $no;
          $row[]= $d->kode_pt; 
         
          $row[]= $d->nama_pt; 
          $row[]= $d->Kelompok_No_Reg; 
          $row[]= $d->nidn;  
          $row[]= $d->nama_dosen; 
          $row[]= $d->jk; 
          $row[]= $d->jenjang_tertinggi; 
          $row[]= $d->jabatan_akademik; 
          $row[]= $d->nm_ikatan_kerja; 
          $row[]= $d->nm_stat_aktif; 
        
         
           $data[] = $row;
      }
      $output = array(
          "draw" => $this->input->post('draw'),
          "recordsTotal" => $this->m_sd->count_all(),
          "recordsFiltered" => $this->m_sd->count_filtered(),
          "data" => $data,
      );
      //output to json format
      echo json_encode($output);
  }
function semua_dosen()
    {
        $data = array(
            'judul' => 'Daftar Semua Dosen'
        );
       $this->template->load('template/template', 'sd/semua_dosen', $data);
    }
function jenjang_pendidikan()
    {
    
        $data = array(
            'judul' => 'Dafar Dosen Berdasarkan Jenjang Pendidikan',
             'dt_ds'=>$this->m_sd->get_dosen_jenjang_dindik(),
        );       
        $this->template->load('template/template', 'sd/jenjang_pendidikan', $data);
}
function status_kepegawaian()
    {
    
        $data = array(
            'judul' => 'Dafar Dosen Berdasarkan Status Kepegawaian',
             'dt_ds'=>$this->m_sd->get_dosen_status_kepegawaian(),
        );       
        $this->template->load('template/template', 'sd/status_kepegawaian', $data);
}
function jabfung()
    {
    
        $data = array(
            'judul' => 'Dafar Dosen Berdasarkan Jabatan Fungsional',
             'dt_ds'=>$this->m_sd->get_dosen_jabfung(),
        );       
        $this->template->load('template/template', 'sd/jabfung', $data);
}

function jk()
    {
    
        $data = array(
            'judul' => 'Dafar Dosen Berdasarkan Jenis Kelamin',
             'dt_ds'=>$this->m_sd->get_dosen_jk(),
        );       
        $this->template->load('template/template', 'sd/jk', $data);
}
}
	?>