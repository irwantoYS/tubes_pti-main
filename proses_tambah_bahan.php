<?php
include 'koneksi.php';

$nama_bahan = $_POST['nama_bahan'];
$jumlah_bahan = $_POST['jumlah_bahan'];
$satuan = $_POST['satuan'];
$kategori_produk = $_POST['kategori_produk'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$tanggal_exp = $_POST['tanggal_exp'];
$harga_beli = $_POST['harga_beli'];

$query = "INSERT INTO bahan (nama_bahan, jumlah_bahan, satuan, kategori_produk, tanggal_masuk, tanggal_exp, harga_beli) VALUES ('$nama_bahan', '$jumlah_bahan','$satuan', '$kategori_produk', '$tanggal_masuk', '$tanggal_exp','$harga_beli')";

if ($conn->query($query) === TRUE) {
    header('Location: kelolastokbahan.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>