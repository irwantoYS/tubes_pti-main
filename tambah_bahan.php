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
                <select class="form-control" id="nama_bahan" name="nama_bahan">
                    <option value="ayam">Ayam</option>
                    <option value="bawang_bombay">Bawang Bombay</option>
                    <option value="bawang_merah">Bawang Merah</option>
                    <option value="bawang_putih">Bawang Putih</option>
                    <option value="beras">Beras</option>
                    <option value="cabai_hijau">Cabai Hijau</option>
                    <option value="cabai_merah">Cabai Merah</option>
                    <option value="cabai_rawit">Cabai Rawit</option>
                    <option value="garam">Garam</option>
                    <option value="gula">Gula</option>
                    <option value="keju">Keju</option>
                    <option value="kentang">Kentang</option>
                    <option value="kopi">Kopi</option>
                    <option value="mentega">Mentega</option>
                    <option value="minyak_goreng">Minyak Goreng</option>
                    <option value="powdered_cookies_and_cream">Powdered Cookies and Cream</option>
                    <option value="powdered_green_tea">Powdered Green Tea</option>
                    <option value="powdered_red_velvet">Powdered Red Velvet</option>
                    <option value="powdered_vanilla">Powdered Vanilla</option>
                    <option value="saus_sambal">Saus Sambal</option>
                    <option value="saus_tomat">Saus Tomat</option>
                    <option value="selada">Selada</option>
                    <option value="susu">Susu</option>
                    <option value="susu_kental_manis">Susu Kental Manis</option>
                    <option value="tahu">Tahu</option>
                    <option value="timun">Timun</option>
                    <option value="tomat">Tomat</option>
                </select>
            </div>
            <div class="form-group">
                <div class="a">
                    <label for="jumlah_bahan">Jumlah Bahan:</label>
                    <input type="number" class="form-control" id="jumlah_bahan" name="jumlah_bahan">
                    <label class="b">Satuan:</label>
                    <span class="static-satuan" id="static-satuan">gram</span>
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
        // Menambahkan event listener ke elemen "nama_bahan" untuk mendengarkan perubahan pilihan.
        document.getElementById("nama_bahan").addEventListener("change", function () {
            var selectedBahan = this.value; // Mendapatkan nilai pilihan "Nama Bahan".
            var staticSatuanElement = document.getElementById("static-satuan"); // Mengambil elemen "static-satuan".

            // Mengatur teks statis "Satuan" berdasarkan pilihan "Nama Bahan".
            if (selectedBahan === "ayam") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "bawang_bombay") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "bawang_merah") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "bawang_putih") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "beras") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "cabai_hijau") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "cabai_merah") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "cabai_rawit") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "garam") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "gula") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "kecap") {
                staticSatuanElement.textContent = "ml";
            } else if (selectedBahan === "keju") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "kentang") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "kopi") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "mentega") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "minyak_goreng") {
                staticSatuanElement.textContent = "ml";
            } else if (selectedBahan === "powdered_cookies_and_cream") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "powdered_green_tea") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "powdered_red_velvet") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "powdered_vanilla") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "saus_sambal") {
                staticSatuanElement.textContent = "ml";
            } else if (selectedBahan === "saus_tomat") {
                staticSatuanElement.textContent = "ml";
            } else if (selectedBahan === "selada") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "susu") {
                staticSatuanElement.textContent = "ml";
            } else if (selectedBahan === "susu_kental_manis") {
                staticSatuanElement.textContent = "ml";
            } else if (selectedBahan === "tahu") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "timun") {
                staticSatuanElement.textContent = "gram";
            } else if (selectedBahan === "tomat") {
                staticSatuanElement.textContent = "gram";
            } else {
                // Mengatur nilai default jika tidak ada pemilihan yang sesuai.
                staticSatuanElement.textContent = "gram";
            }
        });

        // Menambahkan event listener ke tombol "Cancel".
        document.getElementById("cancelButton").addEventListener("click", function () {
            history.back(); // Menggunakan fungsi history.back() untuk kembali ke halaman sebelumnya.
        });
    </script>
</body>

</html>