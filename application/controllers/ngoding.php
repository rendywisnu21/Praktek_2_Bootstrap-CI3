<!-- Halaman ini dapat diakses lewat alamat http://localhost/Praktek_2_Bootstrap-CI3/index.php/ngoding -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Ini adalah class yang menerapkan pembuatan library/pustaka
class Ngoding extends CI_Controller {
	
	function index(){
        // Code ini berfungsi untuk me-load library yang bernama malasngoding.php
        $this->load->library('malasngoding');
        // Code ini berguna untuk memanggil method yang ada pada library malasngoding
		$this->malasngoding->nama_saya();
                echo "<br/>";
                // Code ini berguna untuk memanggil method yang ada pada library yang membutuhkan parameter
                $this->malasngoding->nama_kamu("Andi");
	}

}