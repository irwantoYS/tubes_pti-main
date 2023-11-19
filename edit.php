<!DOCTYPE html>
<html>

<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Edit Produk</h2>
        <?php
        include 'koneksi.php';

        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE id=$id";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="proses_edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="product_name">Nama Produk:</label>
                    <input type="text" class="form-control" id="product_name" name="product_name"
                        value="<?php echo $row['product_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="selling_price">Harga Jual:</label>
                    <input type="number" class="form-control" id="selling_price" name="selling_price"
                        value="<?php echo $row['selling_price']; ?>">
                </div>
                <div class="form-group">
                    <label for="cost_price">Harga Modal:</label>
                    <input type="number" class="form-control" id="cost_price" name="cost_price"
                        value="<?php echo $row['cost_price']; ?>">
                </div>
                <div class="form-group">
                    <label for="category">Kategori:</label>
                    <select class="form-control" id="category" name="category">
                        <option value="kitchen" <?php if ($row['category'] == 'kitchen')
                            echo 'selected'; ?>>Kitchen</option>
                        <option value="bar" <?php if ($row['category'] == 'bar')
                            echo 'selected'; ?>>Bar</option>
                    </select>
                </div>
<!-- 
                <div class="form-group">
                    <label for="username">Username :</label>
                    <select class="form-control" id="username" name="username">
                        <option value="kitchen" <?php if ($row['username'] == 'kitchen')
                            echo 'selected'; ?>>Kitchen</option>
                        <option value="bar" <?php if ($row['username'] == 'bar')
                            echo 'selected'; ?>>Bar</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password :</label>
                    <select class="form-control" id="password" name="password">
                        <option value="kitchen" <?php if ($row['password'] == 'kitchen')
                            echo 'selected'; ?>>Kitchen</option>
                        <option value="bar" <?php if ($row['password'] == 'bar')
                            echo 'selected'; ?>>Bar</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="role">Role :</label>
                    <select class="form-control" id="role" name="role">
                        <option value="kitchen" <?php if ($row['role'] == 'kitchen')
                            echo 'selected'; ?>>Kitchen</option>
                        <option value="bar" <?php if ($row['role'] == 'bar')
                            echo 'selected'; ?>>Bar</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status :</label>
                    <select class="form-control" id="status" name="status">
                        <option value="kitchen" <?php if ($row['status'] == 'kitchen')
                            echo 'selected'; ?>>Kitchen</option>
                        <option value="bar" <?php if ($row['status'] == 'bar')
                            echo 'selected'; ?>>Bar</option>
                    </select>
                </div> -->

                <div class="form-group">
                    <label for="composition">Komposisi:</label>
                    <div>
                        <?php
                        include 'koneksi.php';

                        $id = $_GET['id'];
                        $query = "SELECT * FROM products WHERE id=$id";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $selectedComposition = explode(', ', $row['composition']);

                            $compositionQuery = "SELECT DISTINCT nama_bahan FROM bahan";
                            $compositionResult = $conn->query($compositionQuery);

                            if ($compositionResult->num_rows > 0) {
                                while ($compositionRow = $compositionResult->fetch_assoc()) {
                                    $isChecked = in_array($compositionRow['nama_bahan'], $selectedComposition) ? 'checked' : '';

                                    echo '<label>';
                                    echo '<input type="checkbox" name="selected_composition[]" value="' . $compositionRow['nama_bahan'] . '" ' . $isChecked . '> ' . $compositionRow['nama_bahan'];
                                    echo '</label><br>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger" id="cancelButton">Cancel</button>
            </form>
            <?php
        } else {
            echo "Produk tidak ditemukan.";
        }

        $conn->close();
        ?>
    </div>
    <script>
        // Menambahkan event listener ke tombol "Cancel"
        document.getElementById("cancelButton").addEventListener("click", function () {
            history.back(); // Menggunakan fungsi history.back() untuk kembali ke halaman sebelumnya
        });
    </script>
</body>

</html>