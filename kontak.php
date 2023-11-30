<!DOCTYPE html>
<html>
<head>
  <title>Pembelian Kredit Motor</title>
  <link rel="stylesheet" type="text/css" href="css/kontak.css">

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
  
  <!-- bagian kontak -->
  <div class="container">
    <h2>Pembelian Kredit Motor</h2>
    <br>
    <h3>Informasi Data Diri</h3>
    <form action="kontak-output.php" method="POST">
      <div class="form-group">
        <label for="name">Nama </label>
        <input type="text" id="name" name="name" placeholder="Masukan Nama Lengkap Anda" required>
      </div>
      <div class="form-group">
        <label for="email">Email </label>
        <input type="email" id="email" name="email" placeholder="Masukan Email Anda" required>
      </div>
      <div class="form-group">
        <label for="number">No. Telepon </label>
        <input type="number" id="no" name="no" placeholder="Masukan No Handphone Anda" required>
      </div>
      <div class="form-group">
        <label for="motor">Varian Motor </label>
        <select id="motor" name="motor" required>
          <option value="">Pilih Varian Motor</option>
          <option value="Fazzio Neo">Fazzio Neo</option>
          <option value="Fino 125">Fino 125</option>
          <option value="Mio M3 125">Mio M3 125</option>
          <option value="FreeGo 125">FreeGo 125</option>
          <option value="New Nmax 155 ABS">New Nmax 155 ABS</option>
          <option value="Aerox 155 Connected">Aerox 155 Connected</option>
          <option value="Grand Filano Neo">Grand Filano Neo</option>
          <option value="Gear 125 S-Version">Gear 125 S-Version</option>
          <option value="WR 155 R">WR 155 R</option>
          <option value="XSR 155">XSR 155</option>
          <option value="R15M ABS/Connected">R15M ABS/Connected</option>
          <option value="MT-15">MT-15</option>
        </select>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat </label>
        <textarea type="deskripsi" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap Anda"required></textarea>
      </div>
      <h3>Informasi Pembelian</h3>
      <div class="form-group">
        <label for="dp">Uang Muka </label>
        <select id="dp" name="dp" required>
          <option value="">Pilih DP Berapa %</option>
          <option value="10%">10%</option>
          <option value="20%">20%</option>
          <option value="30%">30%</option>
          <option value="40%">40%</option>
        </select>
      </div>
      <div class="form-group">
        <label for="cicilan">Recana Jumlah Cicilan </label>
        <select id="cicilan" name="cicilan" required>
          <option value="">Pilih Waktu Cicilan</option>
          <option value="12 Bulan">12 Bulan</option>
          <option value="24 Bulan">24 Bulan</option>
          <option value="36 Bulan">36 Bulan</option>
          <option value="48 Bulan">48 Bulan</option>
          <option value="60 Bulan">60 Bulan</option>
        </select>
      </div>
      <div class="box">
        <input type="checkbox" required></input>
        <p>Mengizinkan Jaya Abadi Dealer untuk menggunakan informasi di atas dan menghubungi Saya melalui email dan/atau telepon atau sarana komunikasi pribadi lainnya untuk kegiatan pelayanan kepada customer.</p>
      </div>
      <br>
      <div class="form-group">
        <button type="submit" name="submit">Kirim</button>
      </div>
    </form>  
  </div>
</body>
</html>

