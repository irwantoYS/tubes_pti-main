<!DOCTYPE html>
<html>

<head>
    <title>Tambah Bahan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Tambahkan CSS jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!-- Tambahkan jQuery UI -->
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

        .static-satuan {
            padding: 6px 12px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Bahan</h2>
        <form action="proses_tambah_bahan.php" method="post">
            <div class="form-group">
                <label for="nama_bahan">Nama Bahan:</label>
                <input type="text" class="form-control" id="nama_bahan" name="nama_bahan" list="bahanList" required>
                <datalist id="bahanList">
                    <option value="Ayam">
                    <option value="Bawang Bombay">
                    <option value="Bawang Merah">
                    <option value="Bawang Putih">
                    <option value="Beras">
                    <option value="Cabai Hijau">
                    <option value="Cabai Merah">
                    <option value="Cabai Rawit">
                    <option value="Garam">
                    <option value="Gula">
                    <option value="Kecap">
                    <option value="Keju">
                    <option value="Kentang">
                    <option value="Kopi">
                    <option value="Mentega">
                    <option value="Minyak Goreng">
                    <option value="Powdered Cookies and Cream">
                    <option value="Powdered Green Tea">
                    <option value="Powdered Red Velvet">
                    <option value="Powdered Vanilla">
                    <option value="Saus Sambal">
                    <option value="Saus Tomat">
                    <option value="Selada">
                    <option value="Susu">
                    <option value="Susu Kental Manis">
                    <option value="Tahu">
                    <option value="Timun">
                    <option value="Tomat">
                </datalist>
            </div>
            <div class="form-group">
                <div class="a">
                    <label for="jumlah_bahan">Jumlah Bahan:</label>
                    <input type="number" class="form-control" id="jumlah_bahan" name="jumlah_bahan" required>
                    <label class="b">Satuan:</label>
                    <select class="form-control" id="satuan" name="satuan">
                        <option value="gram">gram</option>
                        <option value="ml">ml</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="kategori_produk">Kategori:</label>
                <select class="form-control" id="kategori_produk" name="kategori_produk" required>
                    <option value="kitchen">Kitchen</option>
                    <option value="bar">Bar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
            </div>
            <div class="form-group">
                <label for="tanggal_exp">Tanggal EXP:</label>
                <input type="date" class="form-control" id="tanggal_exp" name="tanggal_exp" required>
            </div>
            <div class="form-group">
                <label for="harga_beli">Harga Beli:</label>
                <input type="number" class="form-control" id="harga_beli" name="harga_beli"
                    oninput="calculatePricePerGram()">
            </div>
            <div class="form-group">
                <label for="harga_beli">Harga Beli Persatuan:</label>
                <input type="number" class="form-control" id="harga_beli_pergram" name="harga_beli_pergram" readonly>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-danger" id="cancelButton">Cancel</button>
        </form>
    </div>

    <script>
        // Inisialisasi autocomplete pada input "nama_bahan"
        $("#nama_bahan").autocomplete({
            source: ["Ayam", "Bawang Bombay", "Bawang Merah", "Bawang Putih", "Beras", "Cabai Hijau", "Cabai Merah", "Cabai Rawit", "Garam", "Gula", "Kecap", "Keju", "Kentang", "Kopi", "Mentega", "Minyak Goreng", "Powdered Cookies and Cream", "Powdered Green Tea", "Powdered Red Velvet", "Powdered Vanilla", "Saus Sambal", "Saus Tomat", "Selada", "Susu", "Susu Kental Manis", "Tahu", "Timun", "Tomat"],
        });

        // Menambahkan event listener ke elemen "nama_bahan" untuk mengganti satuan
        $("#nama_bahan").on("input", function () {
            var selectedBahan = $(this).val();
            var satuanElement = document.getElementById("satuan");

            // Mengatur satuan default ke "gram"
            satuanElement.value = "gram";

            // Mengatur "Satuan" menjadi disabled jika nama bahan yang dimasukkan tidak ada dalam autocomplete
            if ($("#bahanList option[value='" + selectedBahan + "']").length === 0) {
                satuanElement.disabled = false;
            } else {
                satuanElement.disabled = true;
            }
        });

        // Menambahkan event listener ke tombol "Cancel"
        document.getElementById("cancelButton").addEventListener("click", function () {
            history.back(); // Menggunakan fungsi history.back() untuk kembali ke halaman sebelumnya.
        });

        function calculatePricePerGram() {
            var hargaBeli = parseFloat(document.getElementById("harga_beli").value);
            var jumlahBahan = parseFloat(document.getElementById("jumlah_bahan").value);
            var hargaBeliPerGram = hargaBeli / jumlahBahan;

            if (!isNaN(hargaBeliPerGram)) {
                document.getElementById("harga_beli_pergram").value = hargaBeliPerGram.toFixed(2);
            } else {
                document.getElementById("harga_beli_pergram").value = "";
            }
        }
    </script>
</body>

</html>