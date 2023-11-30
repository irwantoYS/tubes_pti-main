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
    $qty = $_POST['kuantitas'];
    $date = $_POST['tgl'];
    
    $selectedOption = mysqli_fetch_assoc(mysqli_query($conn, "SELECT composition FROM products WHERE product_name = '$np'"));

    $komposisi = json_decode($selectedOption['composition'], true);
    $isValid = true;

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
                // Ambil hasil query
                $row = mysqli_fetch_assoc($result);
                $jumlahDiDatabase = $row['jumlah_bahan'];
    
                if ($totalBahanTerpakai <= $jumlahDiDatabase) {
                    $jumlahDiDatabase -= $totalBahanTerpakai;
                    
                    $updateQuery = "UPDATE bahan SET jumlah_bahan = '$jumlahDiDatabase' WHERE nama_bahan = '$bahan' ORDER BY id ASC LIMIT 1";
                    $updateResult = mysqli_query($conn, $updateQuery);

                    if (!$updateResult) {
                        echo "<script>alert('Gagal mengupdate stok bahan');</script>";
                        $isValid = false;
                    }

                } else if ($totalBahanTerpakai == $jumlahDiDatabase){
                    $updateQuery1 = "UPDATE bahan SET jumlah_bahan = '$jumlahDiDatabase' WHERE nama_bahan = '$bahan' ORDER BY id ASC LIMIT 1";
                    $updateResult1 = mysqli_query($conn, $updateQuery1);
                    $updateQuery2 = "DELETE FROM bahan WHERE nama_bahan = '$bahan'";
                    $updateResult2 = mysqli_query($conn, $updateQuery2);

                } else {
                    $isValid = false;
                    echo "<script>alert('Gagal menambahkan data penjualan'); window.location.href = 'penjualan.php';</script>";
                }
            }
        }
    }

    if ($isValid) {
        $q = mysqli_query($conn, "INSERT INTO penjualan (nama_produk, harga_jual, kuantitas, tgl) VALUES ('$np', '$hrgjual', '$qty','$date')");

        if ($q) {
            echo "<script>alert('Berhasil tambah data penjualan!'); window.location.href = 'penjualan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data penjualan'); window.location.href = 'penjualan.php';</script>";
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
    <!-- Modal -->
<div class="modal fade" id="tambahPenjualanModal" tabindex="-1" role="dialog"
    aria-labelledby="tambahPenjualanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPenjualanModalLabel">Tambah Penjualan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi formulir untuk menambahkan penjualan -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk:</label>
                        <select class="form-control" id="nama_produk" name="nama_produk"
                            onchange="updateHargaJual()">
                            <option value="" disabled selected hidden>Pilih Produk</option>
                            <?php echo $produk_options; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual:</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" readonly>
                    </div>
                    <div class="form-group">
                        <label for="kuantitas">Jumlah Terjual:</label>
                        <input type="number" class="form-control" id="kuantitas" name="kuantitas">
                    </div>
                    <div class="form-group">
                        <label for="tgl">Tanggal:</label>
                        <input type="date" class="form-control" id="tgl" name="tgl">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <?php
    ?>

    <script>
        // Menambahkan event listener ke tombol "Cancel"
        document.getElementById("cancelButton").addEventListener("click", function () {
            window.location.href = 'penjualan.php';
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