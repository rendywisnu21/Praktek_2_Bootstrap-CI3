<!-- Pada overview.php ini berisi file yang akan menampilkan halaman Admin
http://localhost/Praktek2_E41181766/index.php/admin
dengan cara melalui controller yang ada pada controllers/admin/Overview.php -->

<!DOCTYPE html>
<head>
  <title>Admin | Rendy</title>
<!-- Mengapa harus menggunakan base_url()? Karena kita perlu menyisipkan file agar bisa bekerja. -->
<!-- Jika tidak begitu, maka file .css nya tidak akan ditemukan, disarankan menggunakan cara ini
 ketika kita masih mengembangkan web lewat localhost kita sendiri -->
  <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css');?>">
<!-- Link Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Spartan|Trade+Winds&display=swap" rel="stylesheet"> 
<!-- Internal CSS -->
<style type="text/css">
    body{
      margin:16px;
      font-family:'Spartan', sans-serif;
    }
    h1{
      font-family: 'Trade Winds', cursive;
    }
  </style>
</head>
<body>
  <input type="button" class="btn btn-primary" value="Login">
  <br><br>
  <h1>Ini adalah halaman Admin</h1>
  <h4>oleh Rendy Wisnu</h4>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
    Veniam velit voluptatibus officiis dolore nisi odio ipsum optio similique ad corporis possimus iusto dolorem, error delectus. 
    <br> Eos nemo sunt accusamus perferendis?</p>
</body>
<footer>
  <h3>Copyright 2020 by rndyx21</h3>
</footer>