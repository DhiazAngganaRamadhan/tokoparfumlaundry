<?php
include 'db.php';

// Ambil kontak admin
$kontak = mysqli_query($conn, "SELECT admin_name, admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);

// Query data pesanan
$query = mysqli_query($conn, "SELECT tb_pesanan.*, tb_layanan.product_name 
                              FROM tb_pesanan 
                              LEFT JOIN tb_layanan ON tb_pesanan.id_produk = tb_layanan.product_id
                              ORDER BY tb_pesanan.id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TokoParfumLaundry</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

<!-- Header Admin -->
<header>
  <div class="container">
    <h1><a href="index.php">Toko Parfum Laundry</a></h1>
    <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="data-kategori.php">Data Kategori</a></li>
            <li><a href="data-produk.php">Data Layanan</a></li>
            <li><a href="data-pesanan.php">Data Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</header>

<!-- Data Pesanan -->
<div class="section">
  <div class="container">
    <h3>Data Pesanan</h3>
    <div class="box">
      <table border="1" cellpadding="10" cellspacing="0" class="table">
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Nama</th>
          <th>Telepon</th>
          <th>Alamat</th>
          <th>Catatan</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
        <?php 
        $no = 1; 
        while($row = mysqli_fetch_array($query)) { ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $row['product_name'] ?></td>
          <td><?= $row['nama'] ?></td>
          <td><?= $row['telepon'] ?></td>
          <td><?= $row['alamat'] ?></td>
          <td><?= $row['catatan'] ?></td>
          <td><?= $row['tanggal_pesan'] ?></td>
          <td>
            <a href="proses-hapus.php?idps=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin hapus pesanan ini?')">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>

<!-- footer -->
<footer>
        <div class="container">
            <small>Copyright &copy; 2025 - TokoParfumLaundry.</small>
        </div>
    </footer>
</body>
</html>

</body>
</html>
