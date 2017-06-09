<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_login extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index(){
        $this->M_login->cek_login();

        $this->home_view('V_login');
    }    

    public function login(){
        $this->M_login->cek_login();
        $this->M_login->login();

    }
    public function insert_data_pendaftaran(){
       $this->M_login->insert_data_pendaftaran();
    }

    public function logout(){
        $newdata = array('id_user','nama_user','email_user','logged_in_y','foto_profil');
        $this->session->unset_userdata($newdata);
        redirect('login');
    }


}
?>