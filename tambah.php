<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Produk</h2>
        <form action="proses_tambah.php" method="post">
            <div class="form-group">
                <label for="product_name">Nama Produk:</label>
                <input type="text" class="form-control" id="product_name" name="product_name">
            </div>
            <div class="form-group">
                <label for="selling_price">Harga Jual:</label>
                <input type="number" class="form-control" id="selling_price" name="selling_price">
            </div>
            <div class="form-group">
                <label for="cost_price">Harga Modal:</label>
                <input type="number" class="form-control" id="cost_price" name="cost_price">
            </div>
            <div class="form-group">
                <label for="category">Kategori:</label>
                <select class="form-control" id="category" name="category">
                    <option value="kitchen">Kitchen</option>
                    <option value="bar">Bar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="composition">Komposisi:</label>
                <div>
                    <?php
                    // Menghubungkan ke database
                    $conn = new mysqli("localhost", "root", "", "warungupdate");

                    // Memeriksa koneksi
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }

                    // Query untuk mendapatkan daftar bahan tanpa duplikasi
                    $sql = "SELECT DISTINCT nama_bahan FROM bahan";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<input type="checkbox" name="selected_composition[]" value="' . $row["nama_bahan"] . '"> ' . $row["nama_bahan"] . '<br>';
                        }
                    }

                    $conn->close();
                    ?>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
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