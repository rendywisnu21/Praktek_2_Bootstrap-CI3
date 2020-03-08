<!-- File ini adalah controller dari v_form.php -->
<?php 

class Form extends CI_Controller{
// Code ini berfungsi me-load library bernama form_validation
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
// Code ini berfungsi menampilkan v_form.php
	function index(){
		$this->load->view('v_form');
	}
// Code ini berfungsi memastikan bahwa tiap form telah terisi
// Untuk membuat form validation kita harus menentukan dulu form yang akan diberikan validasi
// set_rules berfungsi menetapkan peraturan untuk form
	public function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');
		}
	}
}