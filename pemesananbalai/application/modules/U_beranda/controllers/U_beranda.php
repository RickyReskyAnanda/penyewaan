<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_beranda extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_beranda');

    }
    
    public function index(){
        $this->user_view('V_beranda');
    }    


}
?>