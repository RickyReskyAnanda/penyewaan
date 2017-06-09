<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_beranda extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        
        //$this->load->model('M_admin');
    }
    
    public function index(){
        $this->home_view('V_beranda');
    }    
    
}
?>