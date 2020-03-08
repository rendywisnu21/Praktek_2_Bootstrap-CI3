<?php
// Code ini adalah code yang mencegah akses langsung pada controller
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	// Fungsi construct adalah fungsi yang dijalankan otomatis ketika file ini diakses
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
	// Code ini berisi method yang akan diakses oleh controller walau tanpa menyertakan method
	public function index(){		
		$this->load->view('v_download');
	}
	// Code ini berisi method yang dijalankan ketika link 'download file' di klik
	public function lakukan_download(){			
		// Code ini berisi method yang akan memungkinkan pengguna mengunduh file yang tertera pada parameter force_download
		force_download('gambar/Stark.jpg',NULL);
	}	

}