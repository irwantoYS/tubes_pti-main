<?php

// koneksi
include 'koneksi.php';
$query_produk = mysqli_query($conn, "SELECT product_name, selling_price, composition FROM products");
$produk_options = "";
while ($row_produk = mysqli_fetch_assoc($query_produk)) {
    $produk_options .= "<option value='{$row_produk['product_name']}' data-selling-price='{$row_produk['selling_price']}' data-composition='{$row_produk['composition']}'>{$row_produk['product_name']}</option>";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Penjualan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Tambahkan CSS jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!-- Tambahkan jQuery UI -->
</head>

<body>
    <!-- Modal -->
 <div class="container">
        <h2>Tambah Penjualan</h2>
        <form action="proses_tambah_penjualan.php" method="post">
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <select class="form-control" id="nama_produk" name="nama_produk" onchange="updateHargaJual()">
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
            <button type="button" class="btn btn-danger" id="cancelButton">Cancel</button>
        </form>
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