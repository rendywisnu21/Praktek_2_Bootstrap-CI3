<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
        </tr>
<!-- Disini kita menampilkan data menggunakan foreach, variabel $user akan menjadi $u. -->
<!-- $user adalah variabel yang diparsing dari controller c_data dan berisi data tabel user dalam bentuk array -->
<!-- Kita dapat mengaksesnya ke http://localhost/Praktek_2_Bootstrap-CI3/index.php/c_data/user -->
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>