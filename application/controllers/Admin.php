<?php

class Admin extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_umum');
    $this->load->model('m_admin');
    $this->load->model('m_prodi');
    $this->load->model('m_dosen');
    $this->load->model('m_mhs');
    $this->load->model('m_pts');
        $this->load->model('m_pelaporan_pt');
        if($this->session->userdata('akses') <> 1){
        redirect(base_url('login_sakip'));
        }
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
        $this->template->load('admin/template', 'admin/home', $data);
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
      

        $this->template->load('admin/template', 'admin/pts', $data);
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



        $this->template->load('admin/template', 'admin/prodi', $data);
}

function dokumen_pts($id)
{
  

  $data = array(
      'judul' => 'Dokumen PTS',
      'id' => $id,
      'dt_dokumen_pts'=> $this->m_admin->get_dokumen_pts($id),
        'dt_jenis_dokumen'=> $this->m_umum->get_data('jenis_dokumen'),
    
  );  
  $this->template->load('admin/template', 'admin/dokumen_pts', $data);
  
}
function dokumen_prodi($kode_pt,$kode_prodi)
{
  

  $data = array(
      'judul' => 'Dokumen Prodi',
      'kode_pt' => $kode_pt,
       'kode_prodi' => $kode_prodi,
      'dt_dokumen_prodi'=> $this->m_admin->get_dokumen_prodi($kode_pt,$kode_prodi),
        'dt_jenis_dokumen'=> $this->m_umum->get_data('jenis_dokumen'),
    
  );  
  $this->template->load('admin/template', 'admin/dokumen_prodi', $data);
  
}
function simpan_dokumen_prodi()
  {
  $this->form_validation->set_rules('kode_pt', 'kode_pt', 'required');
  $this->form_validation->set_rules('kode_prodi', 'kode_prodi', 'required');
    $this->db->set('id_dokumen_prodi', 'UUID()', FALSE);
$kode_pt = $this->input->post('kode_pt');
$kode_prodi = $this->input->post('kode_prodi');
$no_sk = $this->input->post('no_sk');
$tgl_sk = $this->input->post('tgl_sk');
    $id_jenis_dokumen=$this->input->post('id_jenis_dokumen');
    $file = $this->uploadFile();
    if ($this->form_validation->run() === FALSE) {
    redirect(base_url() . "admin/dokumen_prodi/" . $kode_pt.'/'.$kode_prodi);
    } else {


      $data = array(
        'id_jenis_dokumen' => $id_jenis_dokumen,
        'kode_pt' => $kode_pt,
          'kode_prodi' => $kode_prodi,
             'no_sk' => $no_sk,
                'tgl_sk' => $tgl_sk,
        'file' => $file
      );
      $this->m_umum->input_data($data, 'dokumen_prodi');
      $notif = " Data berhasil ditambahkan";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "admin/dokumen_prodi/" . $kode_pt.'/'.$kode_prodi);
    }

  }
  
function delete_dokumen_prodi($id,$kode_pt,$kode_prodi)
{
  
    $this->m_umum->hapus('dokumen_prodi','id_dokumen_prodi',$id);
     $notif = " Data berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect(base_url() . "admin/dokumen_prodi/" . $kode_pt.'/'.$kode_prodi);
 
}

  function simpan_dokumen_pts()
  {
  $this->form_validation->set_rules('kode_pt', 'kode_pt', 'required');
    $this->db->set('id_dokumen_pts', 'UUID()', FALSE);
$kode_pt = $this->input->post('kode_pt');
    $id_jenis_dokumen=$this->input->post('id_jenis_dokumen');
    $no_sk = $this->input->post('no_sk');
$tgl_sk = $this->input->post('tgl_sk');
    $file = $this->uploadFile();
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "admin/dokumen_pts/" . $kode_pt);
    } else {


      $data = array(
        'id_jenis_dokumen' => $id_jenis_dokumen,
        'kode_pt' => $kode_pt,
         'no_sk' => $no_sk,
                'tgl_sk' => $tgl_sk,
        'file' => $file
      );
      $this->m_umum->input_data($data, 'dokumen_pts');
      $notif = " Data berhasil ditambahkan";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "admin/dokumen_pts/" . $kode_pt);
    }

  }
  function delete_dokumen_pts($id,$kode_pt)
{
  
    $this->m_umum->hapus('dokumen_pts','id_dokumen_pts',$id);
     $notif = " Data berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect(base_url() . "admin/dokumen_pts/" . $kode_pt);
 
}


public function uploadFile()
  {
    $config['upload_path']          = 'upload';
    $config['allowed_types']        = 'pdf|jpg|jpeg|png|pdf|xls|xlsx|doc|docx';
    $config['overwrite']      = false;
     $config['max_size']             = 50000; // 1MB
$config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);
  $this->upload->initialize($config);

      if ($this->upload->do_upload('file')) 
      {
          return $this->upload->data("file_name");
      }
       $error = $this->upload->display_errors();
       echo $error;
       exit;
      // return "default.jpg";
  }



  

}
  ?>