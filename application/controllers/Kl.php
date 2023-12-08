<?php

class Kl extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_kl');
    $this->load->model('m_umum');
  }
  
   function profil_pt()
    {
    
        $data = array(
            'judul' => 'Dafar Perguruan Tinggi Swasta',
             'dt_pt'=>$this->m_umum->get_data('rekap_pt'),
        );       
        $this->template->load('template/template', 'kl/profil_pt', $data);
} 
function detail_pt($kode_pt)
    {
        $data = array(
            'judul' => 'Profil Perguruan Tinggi',
            'menu' => 'kelembagaan',
            'sub_menu' => 'profil_pt',
            'get_detail_pt' => $this->m_kl->get_detail_pt($kode_pt),
            'get_akred_ps_by_pt' => $this->m_kl->get_akred_ps_by_pt($kode_pt),
            
        );
        // print_r($data);
        $this->template->load('template/template', 'kl/detail_pt', $data);
    }
 function daftar_pt()
    {
    
        $data = array(
            'judul' => 'Dafar Perguruan Tinggi Swasta',
             'dt_pt'=>$this->m_umum->get_data('rekap_pt'),
        );       
        $this->template->load('template/template', 'kl/daftar_pt', $data);
}
function daftar_prodi()
    {
    
        $data = array(
            'judul' => 'Dafar Program Studi Perguruan Tinggi Swasta',
             'dt_pr'=>$this->m_umum->get_data('rekap_prodi'),
        );       
        $this->template->load('template/template', 'kl/daftar_prodi', $data);
}


}
	?>