<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tokoku</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>

  <?php include 'templates/navbar.php'; ?>

  <!-- konten   -->
  <section class="content">
    <div class="container">
      <h1>Produk Terbaru</h1>
      <div class="row">
        <?php
        $ambil = $koneksi->query("SELECT * FROM produk");
        while ($perproduk = $ambil->fetch_assoc()):
          ?>
          <div class="col-md-3">
            <div class="thumbnail">
              <img src="foto_produk/<?= $perproduk['foto_produk']; ?>">
              <div class="caption">
                <h3><?= $perproduk['nama_produk']; ?></h3>
                <h5>Rp. <?= number_format($perproduk['harga_produk']); ?>,-</h5>
                <!-- <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-primary">beli</a>
              -->
                <?php if ($perproduk['stok_produk'] > 0): ?>
                  <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
                <?php else: ?>
                  <button class="btn btn-danger" disabled>Stok Habis</button>
                <?php endif; ?>
                <a href="detail.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-default">detail</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <!-- Tombol Chat WhatsApp -->
  <a href="https://wa.me/6281381820076" target="_blank" style="position: fixed; bottom: 20px; right: 20px; background-color: #25d366; color: white; 
          padding: 10px 15px; border-radius: 50px; text-decoration: none; font-weight: bold; 
          box-shadow: 0 4px 8px rgba(0,0,0,0.3); z-index: 999;">
    Chat Admin Kami
  </a>

</body>

</html>