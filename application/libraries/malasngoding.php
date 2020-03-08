<!-- File ini adalah suatu pustaka yang dapat digunakan dicontroller manapun -->
<?php 

class Malasngoding{
    // Code ini adalah sebuah contoh method pada library/pustaka yang dapat dipakai oleh controller lain
	function nama_saya(){
		echo "Nama saya adalah Rendy Wisnu !";
	}
    // Code dibawah adalah sebuah contoh method yang membutuhkan parameter untuk dijalankan
	function nama_kamu($nama){
		echo "Nama kamu adalah ". $nama ." !";
	}
}