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
    <title>Tentang Kami</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header / Dashboard -->
    <header>
        <div class="container">
            <h1><a href="index.php">Toko Parfum Laundry</a></h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="produk.php">Layanan</a></li>
            </ul>
        </div>
    </header>

    <!-- tentang kami / deskripsi usaha -->
    <section class="about">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>
                <strong>Toko Parfum Laundry</strong> adalah layanan laundry yang berlokasi di Cikedokan, Cikarang Barat,
                dengan spesialisasi pada penggunaan parfum laundry berkualitas tinggi yang memberikan kesegaran tahan lama pada pakaian Anda.
            </p>
            <p>
                Kami menyediakan dua kategori layanan utama, yaitu <b>Premium</b> dan <b>Ekonomis</b>, untuk memenuhi kebutuhan pelanggan dengan berbagai anggaran dan preferensi.
                Dengan komitmen terhadap kebersihan, ketepatan waktu, dan pelayanan ramah, kami siap membantu Anda menjaga pakaian tetap bersih dan harum setiap hari.
            </p>
            <p>
                Didirikan oleh <b><?php echo $a->admin_name ?></b>, kami terus berkembang menjadi mitra terpercaya masyarakat sekitar
                dalam urusan laundry harian, baik untuk individu, keluarga, maupun pelaku usaha kecil.
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
