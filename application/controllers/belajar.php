<!-- File ini berisi contoh fungsi pada controller CodeIgniter -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Code dibawah berfungsi mewariskan class belajar dengan CI_Controller
// Nama class harus diawali dengan huruf besar dan nama class harus sesuai dengan nama controller 
class Belajar extends CI_Controller {
	// Biasanya pada fungsi construct diletakkan fungsi untuk memanggil helper / library
	function __construct(){
		parent::__construct();
		
	}
    // Sebagai contoh, disini kita menggunakan fungsi echo 
    // Fungsi ini dapat dipanggil dengan cara memasukan alamat 
    // http://localhost/Praktek_2_Bootstrap-CI3/index.php/belajar/index
	public function index(){
		echo "ini method index pada controller belajar";
	}
    // Sedangkan untuk fungsi halo bisa dipanggil dengan alamat
    // http://localhost/Praktek_2_Bootstrap-CI3/index.php/belajar/halo
	public function halo(){
		echo "ini method halo pada controller belajar";
	}
	// Code dibawah berfungsi membuka file view_belajar.php yang berisi tampilan sederhana sebuah html
	// Yang ditekankan disini bukan sebuah tampilan, namun penerapan sebuah hubungan 
	// controller dan view pada CodeIgniter
	// 
	// Kemudian kita akan membuat parsing data di CodeIgniter 
	// Parsing adalah suatu cara memecah-mecah suatu rangkaian masukan
	// Disini kita membuat variabel data nama_pemilik untuk dipanggil dalam view_belajar
	public function buka_view(){
		$data['nama_pemilik'] = "Rendy Wisnu";
			$this->load->view('view_belajar', $data);

	}
	public function parsing(){
		$diti = array(
			'judul' => "Ini adalah array 1",
			'isi' 	=> "Ini adalah array 2"
		);
			$this->load->view('view_parsing', $diti);
	}
}