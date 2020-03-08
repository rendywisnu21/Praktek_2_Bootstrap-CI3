<!-- File ini berisi code html untuk menampilkan sebuah tampilan web -->
<!-- File ini akan dikontrol atau dibuka oleh file controller yang bernama belajar.php -->
<!-- Kita dapat mengaksesnya ke http://localhost/Praktek_2_Bootstrap-CI3/index.php/belajar/parsing -->

<!DOCTYPE html>
<html>
<head>
	<title>Cara Membuat View Pada CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Cara Membuat Parsing Data dengan Array</h1>
	<h2>Ini adalah view view_parsing.php</h2>
    <h3>Ini adalah view yang di tampilkan pada controller belajar, method parsing</h3>
<!-- Ini adalah contoh parsing data dengan array -->
<!-- Dari sini kita tinggal mengakses variabel nama_pemilik yang sudah dibuat di controller belajar -->
    <h1>Parsing Data dengan Array</h1>
    <h2><?php echo $judul;?></h2>
    <h3><?php echo $isi;  ?></h3>
</body>
</html>