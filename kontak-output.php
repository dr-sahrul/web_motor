<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/kontakoutput.css">
</head>
<body>
  <!-- bagian navbar -->
  <nav class="navbar">
        <a href="index.html" class="navbar-logo"
          >Jaya<span>Abadi.</span>
          <h5>Dealer Motor Resmi Yamaha</h5></a>
        <div class="navbar-menu">
          <a href="index.html">Beranda</a>
          <a href="produk.html">Produk</a>
          <a href="index.html">Tentang Kami</a>
          <a href="kontak.php">Kontak</a>
        </div>
      </nav>
  <!-- bagian akhir navbar -->

  <!-- bagian card terima kasih -->
  <section class="container">
    <div class="card-ty">
      <h2>Terima Kasih</h2>
      <br>
      <p>Data anda sudah berhasil terkirim proses selanjutnya biar pihak kami yang menghubungi anda lewat email maupun no telepon anda.</p>
    </div>
  </section>
</body>
</html>

<?php
session_start();
$db = new mysqli('localhost', 'root', '', 'kontak_admin');
if ($db->connect_errno) {
  echo "Gagal Konek ke MySQL: " . $db->connect_error;
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // deklarasi data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $no = $_POST['no'];
  $motor = $_POST['motor'];
  $alamat = $_POST['alamat'];
  $dp = $_POST['dp'];
  $cicilan = $_POST['cicilan'];
  

  // hasil data
if ($name && $email && $no && $motor && $alamat && $dp && $cicilan) {
    $sql= "INSERT INTO kontak (`name`,`email`,`no`,`motor`,`alamat`,`dp`,`cicilan`) VALUES ('$name','$email','$no','$motor','$alamat','$dp' ,'$cicilan')";
    $db->query($sql);
    $alert = "Data Berhasil disimpan, kami akan menghubungi anda melalui whatsapp";
} else {
    $alert = "Data tidak lengkap";}
}
?>


