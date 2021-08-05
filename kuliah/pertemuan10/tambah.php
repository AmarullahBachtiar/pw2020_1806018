<?php
require 'functions.php';
// cek apakah tombol tabah data sudah di tekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan';
            document.location.href = 'latihan1.php';
          </script>";
  } else {
    echo "data gagal ditamahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah data alumni</title>
</head>

<body>
  <h3>form tambah data alumi</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          nama :
          <input type="text" name="nama" required>
        </label>
      </li>
      <li><label>
          alamat :
          <input type="text" name="alamat" required>
        </label>
      </li>
      <li>
        <label>
          No Whatsapp :
          <input type="text" name="nowa" required>
        </label>
      </li>
      <li>
        <label>
          Tahun lulus :
          <input type="text" name="lulus" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="tambah">tambah data</button>
      </li>
    </ul>
  </form>
</body>

</html>