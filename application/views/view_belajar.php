<!-- File ini berisi code html untuk menampilkan sebuah tampilan web -->
<!-- File ini akan dikontrol atau dibuka oleh file controller yang bernama belajar.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Cara Membuat View Pada CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Cara Membuat Parsing Data</h1>
	<h2>Ini adalah view view_belajar.php</h2>
    <h3>Ini adalah view yang di tampilkan pada controller belajar, method buka_view</h3>
<!-- Ini adalah contoh parsing data -->
<!-- Dari sini kita tinggal mengakses variabel nama_pemilik yang sudah dibuat di controller belajar -->
    <h1><?php echo $nama_pemilik; ?></h1>
</body>
</html>