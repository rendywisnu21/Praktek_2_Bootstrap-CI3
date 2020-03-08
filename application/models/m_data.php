<?php 
 
class M_data extends CI_Model{
    // Fungsi ambil_data ini untuk mengambil data pada tabel user dalam database malasngoding
    // Fungsi return untuk mengembalikan data yang diambil oleh fungsi ambil_data
	function ambil_data(){
		return $this->db->get('user');
	}
}