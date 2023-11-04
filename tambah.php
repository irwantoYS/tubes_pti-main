<?php
 
// koneksi
include 'koneksi.php';
 
// simpan data
if (isset($_POST['submit'])) {
$np = $_POST['nama_produk'];
$hrgjual = $_POST['harga_jual'];
$hrgmodal = $_POST['harga_modal'];
$qty = $_POST['kuantitas'];
$date =$_POST['tgl'];
 
$q = mysqli_query($conn, "INSERT INTO penjualan (nama_produk, harga_jual, harga_modal, kuantitas, tgl) VALUES ('$np', '$hrgjual', '$hrgmodal', '$qty','$date')");
 
if($q) {
header('Location: penjualan.php');
} else {
echo "<script>alert('Gagal menambahkan data'); window.location.href = penjualan.php;</script>";
}
}
 
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Penjualan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Penjualan</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk">
            </div>
            <div class="form-group">
                <label for="harga_jual">Harga Jual:</label>
                <input type="number" class="form-control" id="harga_jual" name="harga_jual">
            </div>
            <div class="form-group">
                <label for="harga_modal">Harga Modal:</label>
                <input type="number" class="form-control" id="harga_modal" name="harga_modal">
            </div>
             <div class="form-group">
                <label for="kuantitas">Jumlah Terjual:</label>
                <input type="number" class="form-control" id="kuantitas" name="kuantitas">
            </div>
            <div class="form-group">
                <label for="tgl">Tanggal:</label>
                <input type="date" class="form-control" id="tgl" name="tgl">
            </div>
            
            <!-- <div class="form-group">
                <label for="category">Kategori:</label>
                <select class="form-control" id="category" name="category">
                    <option value="kitchen">Kitchen</option>
                    <option value="bar">Bar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="composition">Komposisi:</label>
                <textarea class="form-control" id="composition" name="composition"></textarea>
            </div> -->
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-danger" id="cancelButton">Cancel</button>
        </form>
    </div>

    <script>
        // Menambahkan event listener ke tombol "Cancel"
        document.getElementById("cancelButton").addEventListener("click", function () {
            history.back(); // Menggunakan fungsi history.back() untuk kembali ke halaman sebelumnya
        });
    </script>
</body>

</html>