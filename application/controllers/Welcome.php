<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
// File ini merupakan file yang berfungsi membuka halaman welcome_message.php yang ada pada folder views.
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

// Code dibawah berfungsi untuk mengaktifkan helper html CI3 dengan cara memanggilnya langsung
// lewat controller ini. Jangan lupa mengisi helper di autoload menjadi html.
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}
// Batas
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
