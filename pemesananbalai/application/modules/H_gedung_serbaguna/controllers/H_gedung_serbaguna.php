<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_gedung_serbaguna extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gedung_serbaguna');
    }

    public function index(){
        $data = array();
        $data['data']=$this->M_gedung_serbaguna->select_data_gedung_serbaguna();
        $this->home_view('V_gedung_serbaguna',$data);
    }   

    public function invoice(){
        $this->load->view('V_invoice');
    }

    //--------- proses pengolahan data ----------

    public function load_data_gedung_serbaguna(){ // khusus untuk load button
        $data['data']=$this->M_gedung_serbaguna->select_load_data_gedung_serbaguna();
        $this->load->view('V_load_gedung_serbaguna',$data);
    }

    public function detail_gedung_serbaguna(){ //menampilkan detail dari setiap tempat
        $data = array();
        $data['detail'] = $this->M_gedung_serbaguna->select_data_detail_gedung_serbaguna();
        $this->home_view('V_detail_gedung_serbaguna',$data);
    }
    public function load_search_gedung_serbaguna(){
        $data['data'] = $this->M_gedung_serbaguna->select_data_search_gedung_serbaguna();
        $this->load->view('V_load_search_gedung_serbaguna',$data);
    }
    public function pencarian_tempat(){
        $data['data'] = $this->M_gedung_serbaguna->select_data_pencarian_tempat();
        $this->load->view('V_pencarian_tempat',$data);
    }
    public function proses_pemesanan(){
        $data['data'] = array();
        $this->home_view('V_pemesanan',$data);   
    }

    public function cek_tanggal_detail_tempat(){ // cek tanggal di detail produk untuk 
        $data['data']=$this->M_gedung_serbaguna->cek_tanggal_detail_tempat();
        $this->load->view('V_hasil_pencarian', $data);
    }

        public function insert_data_gedung_serbaguna(){
            $this->M_gedung_serbaguna->insert_data_gedung_serbaguna();
        }
    
}
?>