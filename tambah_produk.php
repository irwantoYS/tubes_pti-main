<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Produk</h2>
        <form action="proses_tambah_produk.php" method="post">
            <div class="form-group">
                <label for="product_name">Nama Produk:</label>
                <input type="text" style="width: 40%;" class="form-control" id="product_name" name="product_name"
                    required>
            </div>
            <div class="form-group">
                <label for="selling_price">Harga Jual:</label>
                <input type="number" style="width: 40%;" class="form-control" id="selling_price" name="selling_price"
                    required>
            </div>
            <div class="form-group">
                <label for="category">Kategori:</label>
                <select style="width: 40%;" class="form-control" id="category" name="category" required>
                    <option value="kitchen">Kitchen</option>
                    <option value="bar">Bar</option>
                </select>
            </div>
            <div class="form-group" id="compositionSection">
                <label for="composition">Komposisi:</label>
                <div id="compositionInputs">
                    <input type="text" name="selected_composition[]" placeholder="Nama Bahan" list="bahanList" required>
                    <datalist id="bahanList"></datalist>
                    <input type="number" name="selected_amount[]" placeholder="Jumlah" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="addComposition()">Tambah Komposisi</button>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-danger" id="cancelButton">Cancel</button>
        </form>
    </div>

    <script>
        document.getElementById("cancelButton").addEventListener("click", function () {
            history.back();
        });

        var compositionCounter = 1;

        function addComposition() {

            var compositionInputs = document.getElementById("compositionInputs");

            if (!document.getElementById("bahanList")) {
                var datalist = document.createElement("datalist");
                datalist.id = "bahanList";
                compositionInputs.appendChild(datalist);
            }

            var spaceInput = compositionInputs.appendChild(document.createElement("br"));

            var inputName = document.createElement("input");
            inputName.type = "text";
            inputName.name = "selected_composition[]";
            inputName.placeholder = "Nama Bahan";
            inputName.setAttribute("list", "bahanList"); // Menggunakan setAttribute untuk mengatasi masalah di Firefox
            inputName.required = true;
            compositionInputs.appendChild(inputName);

            var inputAmount = document.createElement("input");
            inputAmount.type = "number";
            inputAmount.name = "selected_amount[]";
            inputAmount.placeholder = "Jumlah";
            inputAmount.required = true;
            compositionInputs.appendChild(inputAmount);

            var cancelButtonName = document.createElement("button");
            cancelButtonName.type = "button";
            cancelButtonName.innerHTML = "Remove";
            cancelButtonName.onclick = function () {
                compositionInputs.removeChild(spaceInput);
                compositionInputs.removeChild(inputName);
                compositionInputs.removeChild(inputAmount);
                compositionInputs.removeChild(cancelButtonName);
            };
            compositionInputs.appendChild(cancelButtonName);

            // Memperbarui datalist dengan nama bahan yang baru
            fillBahanList();
            compositionCounter++;
        }

        function prepareCompositionInputs() {
            var compositionInputs = document.getElementById("compositionInputs");

            while (compositionInputs.childNodes.length > compositionCounter * 2) {
                compositionInputs.removeChild(compositionInputs.lastChild);
                compositionInputs.removeChild(compositionInputs.lastChild);
            }
        }

        // Function untuk mengisi datalist dengan data dari database
        function fillBahanList() {
            var allCompositionInputs = document.getElementsByName("selected_composition[]");
            var datalist = document.getElementById("bahanList");

            // Menggunakan AJAX untuk mendapatkan data dari server
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var bahanNames = JSON.parse(xhr.responseText);

                    // Menghapus semua opsi di datalist
                    datalist.innerHTML = "";

                    var uniqueBahanNames = new Set(bahanNames.map(bahan => bahan.nama_bahan));

                    uniqueBahanNames.forEach(function (bahan) {
                        var option = document.createElement("option");
                        option.value = bahan;
                        datalist.appendChild(option);
                    });

                    // Menambahkan opsi baru ke datalist
                    allCompositionInputs.forEach(function (input) {
                        var option = document.createElement("option");
                        option.value = input.value;
                        datalist.appendChild(option);
                    });
                }
            };

            xhr.open("GET", "get_bahan_names.php", true);
            xhr.send();
        }

        // Panggil fungsi untuk mengisi datalist saat halaman dimuat
        fillBahanList();
    </script>
</body>

</html>