<?php

class Si extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_si');
    $this->load->model('m_umum');
  }
  
    



}
	?>