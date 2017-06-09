<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_permintaan(){
        $this->db->where('id_user',$this->session->userdata('id_user'));
        $data = $this->db->get('tabel_tempat')->result_array();

        $this->load->library('teknikal');
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['link'] = base_url().'user/provider/detail-tempat/'.$this->teknikal->namakelink($data[$i]['nama_tempat']).'/'.$data[$i]['id_tempat'];
            $data[$i]['link_gambar'] = base_url().'assets/images/tempat/dp/'.$data[$i]['gambar_dp'];
        }
        return $data;
    }


}
?>