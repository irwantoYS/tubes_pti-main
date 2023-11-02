<!DOCTYPE html>
<html>

<head>
    <title>Tambah Property</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Property</h2>
        <form action="proses_tambah_property.php" method="post">
            <div class="form-group">
                <label for="nama_properti">Nama Property:</label>
                <input type="text" class="form-control" id="nama_properti" name="nama_properti">
            </div>
            <div class="form-group">
                <label for="jumlah_properti">Jumlah Property:</label>
                <input type="number" class="form-control" id="jumlah_properti" name="jumlah_properti">
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