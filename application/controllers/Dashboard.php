<?php

class Dashboard extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->database();
     $this->load->model('m_si');
    $this->load->model('m_dashboard');
  }
  
    
 function index()
    {
    
        $data = array(
            'judul' => 'Dashboard',
             'get_jumlah_akred_seluruh_pt' => $this->m_dashboard->get_jumlah_akred_seluruh_pt(),
             'get_jumlah_akred_seluruh_ps' => $this->m_dashboard->get_jumlah_akred_seluruh_ps(),
             'get_jumlah_pt' => $this->m_dashboard->get_jumlah_pt(),

        );       
        $this->template->load('template/template', 'dashboard/home', $data);
}

}
	?>