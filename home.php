<?php
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_name, admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header / Dashboard -->
    <header>
        <div class="container">
            <h1><a href="index.php">Toko Parfum Laundry</a></h1>
            <ul>
                <li><a href="tentang-kami.php">Tentang Kami</a></li>
                <li><a href="produk.php">Layanan</a></li>
            </ul>
        </div>
    </header>

    <!-- home / sambutan -->
    <section class="about">
        <div class="container">
            <h2>Selamat Datang di Toko Parfum Laundry!</h2>
            <p>
                Kami adalah solusi terbaik untuk kebutuhan laundry Anda di kawasan Cikedokan, Cikarang Barat. Dengan pilihan layanan <strong>Premium</strong> dan <strong>Ekonomis</strong>, kami mengutamakan <strong>kebersihan, keharuman tahan lama</strong>, dan <strong>pelayanan yang ramah</strong>.
            </p>
            <ul>
                <li>🧺 <strong>Layanan cepat dan bersih</strong></li>
                <li>🌸 <strong>Parfum laundry berkualitas tinggi</strong></li>
                <li>💼 <strong>Cocok untuk rumah tangga dan usaha kecil</strong></li>
            </ul>
            <br>
            <p>
                🔍 Jelajahi layanan kami, lihat detail produk parfum, dan lakukan pemesanan langsung dari website ini!
            </p>
            <p>
                📞 Punya pertanyaan? Hubungi kami atau kunjungi halaman <a href="tentang-kami.php">Tentang Kami</a> untuk mengenal lebih jauh.
            </p>
        </div>
    </section>

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
            <small>&copy; 2025 - TokoParfumLaundry</small>
        </div>
    </div>    

</body>
</html>
