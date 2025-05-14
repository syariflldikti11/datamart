<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_login');
    }
 
    function index(){
         $akses = $this->session->userdata('akses');
        if ($akses == 1) {
            redirect(site_url('admin'));
        }
          
         else {
        $data = array(
            'judul' => 'Halaman Login',
            'menu'=> 'login',
            'action' => 'login/auth',
        
        );  
        $this->load->view('login/index', $data);
        }
    }

    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
         $this->form_validation->set_rules('username','username','required');
         $this->form_validation->set_rules('password','password','required');
        $cek_admin=$this->m_login->auth_admin($username);
    
         if($this->form_validation->run() === FALSE){
              redirect('login');
         }
         else {
        if($cek_admin->num_rows() > 0){ 
                        $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
   if($data['akses']=='1' && password_verify($password, $data['password'])){ 
                    $this->session->set_userdata('akses','1');
                       $this->session->set_userdata('ses_id',$data['username']);
                          
                    redirect('admin');
                 }
                 
        }
     
        else {
            $notif = "username/Password Salah";
            $this->session->set_flashdata('gagal', $notif);
            redirect('login');
        }
         }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
 
}

 