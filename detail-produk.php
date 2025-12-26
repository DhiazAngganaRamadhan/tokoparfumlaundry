<?php
    error_reporting(0);
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_name, admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($conn, "SELECT * FROM tb_layanan WHERE product_id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($produk);
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
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="index.php">Toko Parfum Laundry</a></h1>
        <ul>
            <li><a href="produk.php">Layanan</a></li>
        </ul>
        </div>
    </header>

    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Layanan" value="<?php echo $_GET['search'] ?>">
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                <input type="submit" name="cari" value="Cari Layanan">
            </form>
        </div>
    </div>

    <!-- product detail -->
    <div class="section">
        <div class="container">
            <h3>Detail Layanan</h3>
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->product_image ?>">
                </div>
                <div class="col-2">
                    <h2><?php echo $p->product_name ?></h2>
                    <h3>Rp. <?php echo number_format($p->product_price) ?></h3>
                    <p>Deskripsi :<br>
                        <?php echo $p->product_description ?>
                    </p>

                    <!-- Form Pemesanan -->
                    <h4>Form Pemesanan</h4>
                    <form action="simpan-pesanan.php" method="POST">
                        <input type="hidden" name="id_produk" value="<?= $p->product_id ?>">
                        
                        <label>Nama Lengkap</label><br>
                        <input type="text" name="nama" size="40" required><br><br>
                        
                        <label>No. Telepon</label><br>
                        <input type="text" name="telepon" required><br><br>
                        
                        <label>Alamat Lengkap</label><br>
                        <textarea name="alamat" cols="50" rows="5" required></textarea><br><br>
                        
                        <label>Catatan (opsional)</label><br>
                        <textarea name="catatan" cols="50" rows="5"></textarea><br><br>
                        
                        <button type="submit" class="btn">Pesan Sekarang</button>
                    </form>

                    <br>
                    <!-- Tombol WhatsApp -->
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk anda." target="_blank">
                            Hubungi Via WhatsApp<br><img src="img/icon whatsapp.png" width="50px">
                        </a>
                    </p>
                </div>
            </div>  
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <h4>Pemilik Jasa</h4>
            <p><?php echo $a->admin_name ?></p>

            <h4>Nomor Telpon</h4>
            <p><?php echo $a->admin_telp ?></p>

            <h4>Email</h4>
            <p><?php echo $a->admin_email ?></p>

            <h4>Alamat</h4>
            <p><?php echo $a->admin_address ?></p>
            <small>Copyright &copy; 2025 - TokoParfumLaundry.</small>
        </div>
    </div>    
</body>
</html>
