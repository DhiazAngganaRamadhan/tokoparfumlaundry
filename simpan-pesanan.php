<?php
include 'db.php';

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$catatan = $_POST['catatan'];
$id_produk = $_POST['id_produk'];
$tanggal = date('Y-m-d');

$query = mysqli_query($conn, "INSERT INTO tb_pesanan (id_produk, nama, telepon, alamat, catatan, tanggal_pesan)
                              VALUES ('$id_produk', '$nama', '$telepon', '$alamat', '$catatan', '$tanggal')");

if($query){
    echo "<script>alert('Pesanan berhasil disimpan');window.location='detail-produk.php?id=$id_produk'</script>";
}else{
    echo "Gagal menyimpan pesanan: " . mysqli_error($conn);
}
?>
