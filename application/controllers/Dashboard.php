<?php

class Dashboard extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_umum');
    $this->load->model('m_prodi');
    $this->load->model('m_dosen');
    $this->load->model('m_mhs');
    $this->load->model('m_pts');
        $this->load->model('m_pelaporan_pt');
  }
  
    
 function index()
    {
    
        $data = array(
            'judul' => 'Dashboard',
            'sync' => $this->m_umum->get_sync(),
             'pt' => $this->m_umum->hitung('pt'),
             'prodi' => $this->m_umum->hitung('prodi'),
             'provinsi' => $this->m_umum->hitung('view_provinsi_pt'),
             'kab_pt' => $this->m_umum->hitung('view_kab_pt'),
             'pts' => $this->m_umum->get_data('pt'),
             'dosen' => $this->m_umum->hitung('dosen'),
             'mhs' => $this->m_umum->row_data('view_jumlah_mhs'),
            'gf_provinsi_pt' => $this->m_umum->get_dataa('view_provinsi_pt'),
             'gf_kab_pt' => $this->m_umum->get_dataa('view_kab_pt'),
        );       
        $this->template->load('dashboard/template', 'dashboard/home', $data);
}
function detail_pt($kode_pt)
    {
        $data = array(
            'judul' => 'Profil Perguruan Tinggi',
            'menu' => 'kelembagaan',
            'sub_menu' => 'profil_pt',
            'get_detail_pt' => $this->m_pts->get_detail_pt($kode_pt),
          'dt_prodi' => $this->m_prodi->get_prodi($kode_pt),
             'gf_bidang_prodi' => $this->m_prodi->view_bidang_prodi($kode_pt),
             'gf_akred_prodi' => $this->m_prodi->view_akred_prodi($kode_pt),
             'gf_jenjang_prodi' => $this->m_prodi->view_jenjang_prodi($kode_pt),
             'gf_nama_prodi' => $this->m_prodi->view_nama_prodi($kode_pt),
            
        );
        // print_r($data);
        $this->template->load('dashboard/template', 'dashboard/detail_pt', $data);
    }
function pelaporan_pt()
    {
     $kode_pt = $this->input->post('kode_pt');
          $provinsi = $this->input->post('provinsi');
            if($kode_pt=='' and $provinsi=='') {
        $data = array(
           'kode_pt' => $kode_pt,
                 'provinsi' => $provinsi,
            'judul' => 'Data Pelaporan Perguruan Tinggi Per Semester',
             'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_pelaporan_pt' => $this->m_umum->get_data('pelaporan_pt'),
               'gf_jumlah_mhs_smt' => $this->m_umum->get_dataa('view_jumlah_mhs_smt'),
               'gf_jumlah_dosen_smt' => $this->m_umum->get_dataa('view_jumlah_dosen_smt'),
               'gf_jumlah_dosen_ajar_smt' => $this->m_umum->get_dataa('view_jumlah_dosen_ajar_smt'),
            
        ); 
}

 if($kode_pt!='') {
        $data = array(
           'kode_pt' => $kode_pt,
                 'provinsi' => $provinsi,
            'judul' => 'Data Pelaporan Perguruan Tinggi Per Semester',
             'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_pelaporan_pt' => $this->m_pelaporan_pt->get_pelaporan_pt($kode_pt),
               'gf_jumlah_mhs_smt' => $this->m_pelaporan_pt->view_jumlah_mhs_smt($kode_pt),
               'gf_jumlah_dosen_smt' => $this->m_pelaporan_pt->view_jumlah_dosen_smt($kode_pt),
               'gf_jumlah_dosen_ajar_smt' => $this->m_pelaporan_pt->view_jumlah_dosen_ajar_smt($kode_pt),
            
        ); 
}

 if($provinsi!='') {
        $data = array(
           'kode_pt' => $kode_pt,
                 'provinsi' => $provinsi,
            'judul' => 'Data Pelaporan Perguruan Tinggi Per Semester',
             'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_pelaporan_pt' => $this->m_pelaporan_pt->get_pelaporan_pt_provinsi($provinsi),
               'gf_jumlah_mhs_smt' => $this->m_pelaporan_pt->view_jumlah_mhs_smt_provinsi($provinsi),
               'gf_jumlah_dosen_smt' => $this->m_pelaporan_pt->view_jumlah_dosen_smt_provinsi($provinsi),
               'gf_jumlah_dosen_ajar_smt' => $this->m_pelaporan_pt->view_jumlah_dosen_ajar_smt_provinsi($provinsi),
            
        ); 
}

        $this->template->load('dashboard/template', 'dashboard/pelaporan_pt', $data);
}
 function mhs_smt()
    {
         $kode_pt = $this->input->post('kode_pt');
          $provinsi = $this->input->post('provinsi');
     if($kode_pt=='' and $provinsi=='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Per Semester',
             'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_mhs_pt' => $this->m_umum->get_data('pelaporan_pt'),
             'gf_jumlah_mhs_smt' => $this->m_umum->get_dataa('view_jumlah_mhs_smt'),
        ); 
     }
        if($kode_pt !='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Per Semester',
             'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
              'dt_mhs_pt' => $this->m_mhs->get_pelaporan_pt($kode_pt),
             'gf_jumlah_mhs_smt' => $this->m_mhs->view_jumlah_mhs_smt($kode_pt),
        ); 
     }
   if($provinsi !='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Per Semester',
             'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
            'dt_mhs_pt' => $this->m_mhs->get_pelaporan_pt_provinsi($provinsi),
             'gf_jumlah_mhs_smt' => $this->m_mhs->view_jumlah_mhs_smt_provinsi($provinsi),
        ); 
     }
        $this->template->load('dashboard/template', 'dashboard/mhs_smt', $data);
}

 function mhs_masuk()
    {
      $kode_pt = $this->input->post('kode_pt');
          $provinsi = $this->input->post('provinsi');
          if($kode_pt=='' and $provinsi=='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Masuk',
               'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_mhs_masuk' => $this->m_umum->get_data('rekap_mahasiswa_masuk'),
             'gf_mhs_masuk' => $this->m_umum->get_dataa('view_mhs_masuk'),
        ); 
          }
              if($kode_pt !='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Masuk',
               'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
               'dt_mhs_masuk' => $this->m_mhs->rekap_mahasiswa_masuk($kode_pt),
             'gf_mhs_masuk' => $this->m_mhs->view_mhs_masuk($kode_pt),
        ); 
          }
                 if($provinsi !='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Masuk',
               'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
               'dt_mhs_masuk' => $this->m_mhs->rekap_mahasiswa_masuk_provinsi($provinsi),
             'gf_mhs_masuk' => $this->m_mhs->view_mhs_masuk_provinsi($provinsi),
        ); 
          }

        $this->template->load('dashboard/template', 'dashboard/mhs_masuk', $data);
}
function mhs_keluar()
    {
      $kode_pt = $this->input->post('kode_pt');
          $provinsi = $this->input->post('provinsi');
          if($kode_pt=='' and $provinsi=='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Keluar',
               'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_mhs_keluar' => $this->m_umum->get_data('rekap_mahasiswa_keluar'),
             'gf_mhs_keluar' => $this->m_umum->get_dataa('view_mhs_keluar'),
        ); 
          }
              if($kode_pt !='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Keluar',
               'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
               'dt_mhs_keluar' => $this->m_mhs->rekap_mahasiswa_keluar($kode_pt),
             'gf_mhs_keluar' => $this->m_mhs->view_mhs_keluar($kode_pt),
        ); 
          }
                 if($provinsi !='') {
        $data = array(
            'judul' => 'Data Jumlah Mahasiswa Keluar',
               'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
               'dt_mhs_keluar' => $this->m_mhs->rekap_mahasiswa_keluar_provinsi($provinsi),
             'gf_mhs_keluar' => $this->m_mhs->view_mhs_keluar_provinsi($provinsi),
        ); 
          }

        $this->template->load('dashboard/template', 'dashboard/mhs_keluar', $data);
}

 function pts()
    {
    $provinsi = $this->input->post('provinsi');
    if($provinsi=='') {
        $data = array(
            'provinsi' => $provinsi,
            'judul' => 'Data PTS',
             'dt_pt' => $this->m_umum->get_data('pt'),
             'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'gf_bentuk_pt' => $this->m_umum->get_dataa('view_bentuk_pt'),
             'gf_akred_pt' => $this->m_umum->get_dataa('view_akred_pt'),
        ); 
      }
      else{
 $data = array(
    'provinsi' => $provinsi,
            'judul' => 'Data PTS',
             'dt_pt' => $this->m_pts->get_pt($provinsi),
             'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'gf_bentuk_pt' => $this->m_pts->view_bentuk_pt($provinsi),
             'gf_akred_pt' => $this->m_pts->view_akred_pt($provinsi),
        ); 
      }
      

        $this->template->load('dashboard/template', 'dashboard/pts', $data);
}
function dosen()
    {
     $kode_pt = $this->input->post('kode_pt');
          $provinsi = $this->input->post('provinsi');
          if($kode_pt=='' and $provinsi=='') {
        $data = array(
            'judul' => 'Data Jumlah Dosen',
                     'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'gf_dosen_ikatan_kerja' => $this->m_umum->get_dataa('view_dosen_ikatan_kerja'),
             'gf_dosen_jabfung' => $this->m_umum->get_dataa('view_dosen_jabfung'),
             'gf_dosen_jenjang_tertinggi' => $this->m_umum->get_dataa('view_dosen_jenjang_tertinggi'),
             'gf_dosen_jk' => $this->m_umum->get_dataa('view_dosen_jk'),
             'gf_dosen_kelompok' => $this->m_umum->get_dataa('view_dosen_kelompok'),
             'gf_dosen_stat_aktif' => $this->m_umum->get_dataa('view_dosen_stat_aktif'),
             'gf_dosen_stat_pegawai' => $this->m_umum->get_dataa('view_dosen_stat_pegawai'),
             'dt_jumlah_dosen' => $this->m_umum->get_data('view_jumlah_dosen'),
        ); 
          }
            if($kode_pt !='') {
        $data = array(
            'judul' => 'Data Jumlah Dosen',
                     'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
               'gf_dosen_ikatan_kerja' => $this->m_dosen->view_dosen_ikatan_kerja($kode_pt),
             'gf_dosen_jabfung' => $this->m_dosen->view_dosen_jabfung($kode_pt),
             'gf_dosen_jenjang_tertinggi' => $this->m_dosen->view_dosen_jenjang_tertinggi($kode_pt),
             'gf_dosen_jk' => $this->m_dosen->view_dosen_jk($kode_pt),
             'gf_dosen_kelompok' => $this->m_dosen->view_dosen_kelompok($kode_pt),
             'gf_dosen_stat_aktif' => $this->m_dosen->view_dosen_stat_aktif($kode_pt),
             'gf_dosen_stat_pegawai' => $this->m_dosen->view_dosen_stat_pegawai($kode_pt),
             'dt_jumlah_dosen' => $this->m_dosen->view_jumlah_dosen($kode_pt),
        ); 
          }
          
             if($provinsi !='') {
        $data = array(
            'judul' => 'Data Jumlah Dosen',
                     'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
               'gf_dosen_ikatan_kerja' => $this->m_dosen->view_dosen_ikatan_kerja_provinsi($provinsi),
             'gf_dosen_jabfung' => $this->m_dosen->view_dosen_jabfung_provinsi($provinsi),
             'gf_dosen_jenjang_tertinggi' => $this->m_dosen->view_dosen_jenjang_tertinggi_provinsi($provinsi),
             'gf_dosen_jk' => $this->m_dosen->view_dosen_jk_provinsi($provinsi),
             'gf_dosen_kelompok' => $this->m_dosen->view_dosen_kelompok_provinsi($provinsi),
             'gf_dosen_stat_aktif' => $this->m_dosen->view_dosen_stat_aktif_provinsi($provinsi),
             'gf_dosen_stat_pegawai' => $this->m_dosen->view_dosen_stat_pegawai_provinsi($provinsi),
             'dt_jumlah_dosen' => $this->m_dosen->view_jumlah_dosen_provinsi($provinsi),
        ); 
          }

        $this->template->load('dashboard/template', 'dashboard/dosen', $data);
}

 function prodi()
    {
          $kode_pt = $this->input->post('kode_pt');
          $provinsi = $this->input->post('provinsi');
       if($kode_pt=='' and $provinsi=='') {
        $data = array(
            'judul' => 'Data Prodi',
             'kode_pt' => $kode_pt,
               'provinsi' => $provinsi,
                 'dt_pt' => $this->m_umum->get_data('pt'),
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_prodi' => $this->m_umum->get_data('prodi'),
             'gf_bidang_prodi' => $this->m_umum->get_dataa('view_bidang_prodi'),
             'gf_akred_prodi' => $this->m_umum->get_dataa('view_akred_prodi'),
             'gf_jenjang_prodi' => $this->m_umum->get_dataa('view_jenjang_prodi'),
             'gf_nama_prodi' => $this->m_umum->get_dataa('view_nama_prodi'),
        ); 
      }
       if ($kode_pt!='') {
            $data = array(
            'judul' => 'Data Prodi',
                 'dt_pt' => $this->m_umum->get_data('pt'),
                 'kode_pt' => $kode_pt,
                   'provinsi' => $provinsi,
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_prodi' => $this->m_prodi->get_prodi($kode_pt),
             'gf_bidang_prodi' => $this->m_prodi->view_bidang_prodi($kode_pt),
             'gf_akred_prodi' => $this->m_prodi->view_akred_prodi($kode_pt),
             'gf_jenjang_prodi' => $this->m_prodi->view_jenjang_prodi($kode_pt),
             'gf_nama_prodi' => $this->m_prodi->view_nama_prodi($kode_pt),
        ); 
      }
         if ($provinsi!='') {
            $data = array(
            'judul' => 'Data Prodi',
                 'dt_pt' => $this->m_umum->get_data('pt'),
                  'kode_pt' => $kode_pt,
                 'provinsi' => $provinsi,
                   'dt_provinsi' => $this->m_umum->get_data('view_provinsi'),
             'dt_prodi' => $this->m_prodi->get_prodi_provinsi($provinsi),
             'gf_bidang_prodi' => $this->m_prodi->view_bidang_prodi_provinsi($provinsi),
             'gf_akred_prodi' => $this->m_prodi->view_akred_prodi_provinsi($provinsi),
             'gf_jenjang_prodi' => $this->m_prodi->view_jenjang_prodi_provinsi($provinsi),
             'gf_nama_prodi' => $this->m_prodi->view_nama_prodi_provinsi($provinsi),
        ); 
      }



        $this->template->load('dashboard/template', 'dashboard/prodi', $data);
}


function dosen_serdos()
    {
    $this->session->set_userdata('tabel','view_dosen_serdos');
        $data = array(
            'judula' => 'Data Dosen Tersertifikasi',
            'judul' => 'Data Jumlah Dosen Tersertifikasi',
             'dt_jumlah_dosen_serdos' => $this->m_umum->get_data('view_jumlah_dosen_serdos'),
        ); 

        $this->template->load('dashboard/template', 'dashboard/dosen_serdos', $data);
}
function semua_dosen()
    {
    $this->session->set_userdata('tabel','dosen');
        $data = array(
            'judul' => 'Data Dosen ',
            'judula' => 'Data Jumlah Dosen ',
            'dt_jumlah_dosen' => $this->m_umum->get_data('view_jumlah_dosen'),
           
        ); 

        $this->template->load('dashboard/template', 'dashboard/semua_dosen', $data);
}

public function export_dosen() 
{
    $data = array(

            'dt_dosen' => $this->m_umum->get_data('view_dosen_serdos'),
           
        ); 
          $this->load->view('dashboard/export_dosen', $data);
}
public function export_semua_dosen() 
{
    $data = array(

            'dt_dosen' => $this->m_umum->get_data('dosen'),
           
        ); 
          $this->load->view('dashboard/export_dosen', $data);
}

public function ajax_dosen()
  {
 

      $list = $this->m_umum->get_datatables();
      $data = array();
      $no = $this->input->post('start');
      //looping data mahasiswa
      foreach ($list as $d) {
          $no++;
          $row = array();
          //row pertama akan kita gunakan untuk btn edit dan delete
         
          $row[] =  $no;
        //     $row[] = '
        //     <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="' . $d->kode_pt . '" data-nama="' . $d->nama_dosen . '">Edit</button>
        //     <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="' . $d->kode_pt . '">Delete</button>
        // ';
          $row[]= $d->kode_pt; 
         
          $row[]= $d->nama_pt; 
          $row[]= $d->provinsi_pt; 
          $row[]= $d->kode_prodi; 
          $row[]= $d->nm_prodi; 
          $row[]= $d->jenjang_prodi; 
          $row[]= $d->Kelompok_No_Reg; 
           $row[]= $d->nuptk;  
          $row[]= $d->nidn;  
          $row[]= $d->nama_dosen; 
          $row[]= $d->jk; 
          $row[]= $d->jenjang_tertinggi; 
          $row[]= $d->jabatan_akademik; 
                  $row[]= $d->tmt_sk_jabfung; 
          $row[]= $d->nm_ikatan_kerja; 
          $row[]= $d->nm_stat_aktif; 
          $row[]= $d->nm_stat_pegawai; 
          $row[]= $d->thn_sert; 
        
         
           $data[] = $row;
      }
      $output = array(
          "draw" => $this->input->post('draw'),
          "recordsTotal" => $this->m_umum->count_all(),
          "recordsFiltered" => $this->m_umum->count_filtered(),
          "data" => $data,
      );
      //output to json format
      echo json_encode($output);
}
  

}
	?>