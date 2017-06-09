<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_pemesanan extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pemesanan');
    }
    
    public function index(){
        $data['tempat']=$this->M_pemesanan->select_data_permintaan();
        $this->user_view('V_permintaan',$data);
    }    
}
?>