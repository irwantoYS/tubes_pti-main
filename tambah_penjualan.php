<?php

// koneksi
include 'koneksi.php';

// mendapatkan daftar nama produk, harga jual, dan komposisi dari tabel products
$query_produk = mysqli_query($conn, "SELECT product_name, selling_price, composition FROM products");
$produk_options = "";
while ($row_produk = mysqli_fetch_assoc($query_produk)) {
    $produk_options .= "<option value='{$row_produk['product_name']}' data-selling-price='{$row_produk['selling_price']}' data-composition='{$row_produk['composition']}'>{$row_produk['product_name']}</option>";
}

// simpan data
if (isset($_POST['submit'])) {
    $np = $_POST['nama_produk'];
    $hrgjual = $_POST['harga_jual'];
    // $hrgmodal = $_POST['harga_modal'];
    $qty = $_POST['kuantitas'];
    $date = $_POST['tgl'];

    $q = mysqli_query($conn, "INSERT INTO penjualan (nama_produk, harga_jual, kuantitas, tgl) VALUES ('$np', '$hrgjual', '$qty','$date')");

    if ($q) {
        header('Location: penjualan.php');
    } else {
        echo "<script>alert('Gagal menambahkan data'); window.location.href = penjualan.php;</script>";
    }
    
    $selectedOption = mysqli_fetch_assoc(mysqli_query($conn, "SELECT composition FROM products WHERE product_name = '$np'"));

    $komposisi = json_decode($selectedOption['composition'], true);
    foreach ($komposisi as $key => $value) {
        // Memeriksa apakah kunci mengandung substring "bahan"
        if (strpos($key, 'bahan') !== false) {
            // Mengambil nilai dari JSON
            $bahan = $value;
            $jumlah = intval($komposisi['jumlah' . substr($key, 5)]);
            $totalBahanTerpakai = $jumlah * $qty;
    
            // Ambil data dari database
            $query = "SELECT jumlah_bahan FROM bahan WHERE nama_bahan = '$bahan' ORDER BY id ASC LIMIT 1";
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                // Ambil hasil kueri
                $row = mysqli_fetch_assoc($result);
                $jumlahDiDatabase = $row['jumlah_bahan'];
    
                if ($totalBahanTerpakai <= $jumlahDiDatabase) {
                    $jumlahDiDatabase -= $totalBahanTerpakai;
                    
                    $updateQuery = "UPDATE bahan SET jumlah_bahan = '$jumlahDiDatabase' WHERE nama_bahan = '$bahan'";
                    $updateResult = mysqli_query($conn, $updateQuery);
                    if (!$updateResult) {
                        echo "<script>alert('Gagal mengupdate stok bahan');</script>";
                    }
                } else {
                    echo "<script>alert('Stok bahan tidak mencukupi'); window.location.href = penjualan.php;</script>";
                }
            }
        }
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
                <select class="form-control" id="nama_produk" name="nama_produk" onchange="updateHargaJual()">
                    <?php echo $produk_options; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga_jual">Harga Jual:</label>
                <input type="number" class="form-control" id="harga_jual" name="harga_jual" readonly>
            </div>
            <!-- <div class="form-group">
                <label for="harga_modal">Harga Modal:</label>
                <input type="number" class="form-control" id="harga_modal" name="harga_modal">
            </div> -->
            <div class="form-group">
                <label for="kuantitas">Jumlah Terjual:</label>
                <input type="number" class="form-control" id="kuantitas" name="kuantitas">
            </div>
            <div class="form-group">
                <label for="tgl">Tanggal:</label>
                <input type="date" class="form-control" id="tgl" name="tgl">
            </div>
            <!-- <div class="form-group">
                <label for="komposisi">Komposisi:</label>
                <textarea class="form-control" id="komposisi" name="komposisi" readonly></textarea>
            </div> -->

            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-danger" id="cancelButton">Cancel</button>
        </form>
    </div>

    <?php
    ?>

    <script>
        // Menambahkan event listener ke tombol "Cancel"
        document.getElementById("cancelButton").addEventListener("click", function () {
            history.back(); // Menggunakan fungsi history.back() untuk kembali ke halaman sebelumnya
        });

        function updateHargaJual() {
            var selectedProduct = document.getElementById("nama_produk");
            var hargaJualField = document.getElementById("harga_jual");
            var komposisiField = document.getElementById("komposisi");
            var selectedOption = selectedProduct.options[selectedProduct.selectedIndex];
            var sellingPrice = selectedOption.getAttribute("data-selling-price");
            var komposisi = selectedOption.getAttribute("data-composition");

            hargaJualField.value = sellingPrice;
            komposisiField.value = komposisi;
        }
    </script>
</body>

</html>