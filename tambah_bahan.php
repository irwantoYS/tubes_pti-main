<!DOCTYPE html>
<html>

<head>
    <title>Tambah Bahan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .a {
            display: flex;
            align-items: center;
        }

        .a label {

            margin-right: 5px;
        }

        .b {

            margin-left: 5px;
        }

        .a input {
            flex: 5;
        }

        .a select {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Bahan</h2>
        <form action="proses_tambah_bahan.php" method="post">
            <div class="form-group">
                <label for="nama_bahan">Nama Bahan:</label>
                <select class="form-control" id="nama_bahan" name="nama_bahan">
                    <option value="beras">Beras</option>
                    <option value="bawang">Bawang</option>
                </select>
            </div>
            <div class="form-group">
                <div class=a>
                    <label for="jumlah_bahan">Jumlah Bahan:</label>
                    <input type="number" class="form-control" id="jumlah_bahan" name="jumlah_bahan">
                    <label class="b" for="satuan">Satuan:</label>
                    <select class="form-control" id="satuan" name="satuan">
                        <option value="gram">gram</option>
                        <option value="ml">ml</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="kategori_produk">Kategori:</label>
                <select class="form-control" id="kategori_produk" name="kategori_produk">
                    <option value="kitchen">Kitchen</option>
                    <option value="bar">Bar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
            </div>
            <div class="form-group">
                <label for="tanggal_exp">Tanggal EXP:</label>
                <input type="date" class="form-control" id="tanggal_exp" name="tanggal_exp">
            </div>
            <div class="form-group">
                <label for="harga_beli">Harga Beli:</label>
                <input type="number" class="form-control" id="harga_beli" name="harga_beli">
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