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
        $query = "SELECT * FROM property WHERE id=$id";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="proses_edit_property.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="nama_properti">Nama Property:</label>
                    <input type="text" class="form-control" id="nama_properti" name="nama_properti"
                        value="<?php echo $row['nama_properti']; ?>">
                </div>
                <div class="form-group">
                    <label for="jumlah_properti">Jumlah Property:</label>
                    <input type="number" class="form-control" id="jumlah_properti" name="jumlah_properti"
                        value="<?php echo $row['jumlah_properti']; ?>">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
            <?php
        } else {
            echo "Produk tidak ditemukan.";
        }

        $conn->close();
        ?>
    </div>
</body>

</html>