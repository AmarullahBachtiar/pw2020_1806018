<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>" width="100"></li>
    <li>Nama : <?= $mhs['nama']; ?></li>
    <li>Alamat : <?= $mhs['alamat']; ?></li>
    <li>Tahun Lulus : <?= $mhs['lulus']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan1.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>