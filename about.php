<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tentang Kami - Toko Online Herry</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'templates/navbar.php'; ?>

<section class="content">
  <div class="container">
    <h1 class="text-center">Tentang Kami</h1>
    <hr>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <p>
          <strong>Toko Online Herry</strong> adalah platform belanja online yang menyediakan berbagai macam produk berkualitas
          dengan harga terjangkau. Kami berkomitmen memberikan layanan terbaik dan pengalaman belanja yang mudah, cepat, dan aman.
        </p>

        <h4>Visi</h4>
        <p>Menjadi toko online terpercaya dan pilihan utama masyarakat Indonesia.</p>

        <h4>Misi</h4>
        <ul>
          <li>Menyediakan produk berkualitas dengan harga kompetitif.</li>
          <li>Memberikan pelayanan pelanggan yang responsif dan ramah.</li>
          <li>Menjaga kecepatan dan keamanan dalam proses transaksi dan pengiriman.</li>
        </ul>

        <h4>Kontak Kami</h4>
        <p>
          Alamat: Jl. Raya Belanja No. 88, Jakarta<br>
          Email: support@tokoherry.com<br>
          Telepon: 0812-3456-7890
        </p>

        <p class="text-center">
          <em>Terima kasih telah mempercayai Toko Online Herry.</em>
        </p>
      </div>
    </div>
  </div>
</section>

</body>
</html>
