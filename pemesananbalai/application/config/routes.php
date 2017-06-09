<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'H_beranda';
$route['404_override'] 				= 'H_beranda/not_found';
$route['translate_uri_dashes'] 		= FALSE;


$route['balai-diklat']					= 'H_balai_diklat';
	$route['balai-diklat/:any/:num']	= 'H_balai_diklat/detail_balai_diklat';
	$route['balai-diklat/:any/:num/pemesanan']	= 'H_balai_diklat/proses_pemesanan';

$route['gedung-serbaguna']			= 'H_gedung_serbaguna';
	$route['gedung-serbaguna/:any/:num']	= 'H_gedung_serbaguna/detail_gedung_serbaguna';
	$route['gedung-serbaguna/:any/:num/pemesanan']	= 'H_gedung_serbaguna/proses_pemesanan';

$route['login'] 					= 'U_login';
$route['user'] 						= 'U_beranda';
$route['user/pemesanan']			= 'U_pemesanan';
	$route['user/detail-tempat/:any/:num']		= 'U_daftar_tempat/detail_tempat';

$route['user/penyedia/'] 					= 'P_pemesanan';

$route['user/penyedia/tempat'] 					= 'P_tempat';
	$route['user/penyedia/tempat/:any/:num'] = 'P_tempat/detail_tempat';
	$route['user/penyedia/tempat/tambah'] 			= 'P_tempat/tambah_provider_tempat';
	$route['user/penyedia/tempat/edit/:num'] 		= 'P_tempat/edit_provider_tempat';

$route['user/profil'] 				= 'U_profil';

$route['administrator']	= 'A_beranda';
$route['administrator/pengajuan-tempat']	= 'A_tempat';
$route['administrator/proses-tempat']		= 'A_tempat/proses_tempat';
$route['administrator/tempat-diizinkan']	= 'A_tempat/tempat_diizinkan';
$route['administrator/tempat-ditolak']		= 'A_tempat/tempat_ditolak';
