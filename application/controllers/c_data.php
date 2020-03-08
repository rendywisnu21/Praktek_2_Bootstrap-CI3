<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_data extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
// Fungsi user ini adalah untuk mengambil data dari m_data.php/ambil_data
// Jadi pada intinya, fungsi ini mengambil data dari m_data.php setelah itu hasil
// datanya ditampilkan pada v_user.php
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}

}