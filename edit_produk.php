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
            $compositionData = json_decode($row['composition'], true);
            $compositionCounter = 0;
            ?>
            <form action="proses_edit_produk.php" method="post">
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
                    <label for="category">Kategori:</label>
                    <select class="form-control" id="category" name="category">
                        <option value="kitchen" <?php if ($row['category'] == 'kitchen')
                            echo 'selected'; ?>>Kitchen</option>
                        <option value="bar" <?php if ($row['category'] == 'bar')
                            echo 'selected'; ?>>Bar</option>
                    </select>
                </div>
                <div class="form-group" id="compositionSection">
                    <label for="composition">Komposisi:</label>
                    <div id="compositionInputs">
                        <?php foreach ($compositionData as $key => $value): ?>
                            <?php
                            if (strpos($key, 'bahan') !== false) {
                                echo '<input type="hidden" name="selected_composition_key[]" value="' . $key . '">';
                                echo '<input type="text" name="selected_composition_value[]" value="' . $value . '" list="bahanList' . $key . '">';
                                echo '<datalist id="bahanList' . $key . '"></datalist>';
                                $compositionCounter++;
                            } else {
                                echo '<input type="hidden" name="selected_composition_key[]" value="' . $key . '">';
                                echo '<input type="number" name="selected_composition_value[]" value="' . $value . '" >';
                                if ($compositionCounter !== 1) {
                                    echo '<button type="button" onclick="removeComposition(this)">Remove</button>';
                                }
                                echo '<br>';
                            }
                            ?>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="addComposition()">Tambah Komposisi</button>
                </div>
                <input type="hidden" name="compositionCounter" value="<?php echo $compositionCounter; ?>">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger" id="cancelButton">Batal</button>
            </form>
            <?php
        } else {
            echo "<script>alert('Produk tidak ada'); window.location.href = 'daftarproduk.php';</script>";
        }

        $conn->close();
        ?>
    </div>

    <script>
        document.getElementById("cancelButton").addEventListener("click", function () {
            window.location.href = 'daftarproduk.php';
        });

        function fillBahanList(counter) {
            var allCompositionInputs = document.getElementsByName("selected_composition_name[]");
            var datalist = document.getElementById("bahanList" + counter);

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var bahanNames = JSON.parse(xhr.responseText);
                    datalist.innerHTML = "";
                    var uniqueBahanNames = new Set(bahanNames.map(bahan => bahan.nama_bahan));
                    uniqueBahanNames.forEach(function (bahan) {
                        var option = document.createElement("option");
                        option.value = bahan;
                        datalist.appendChild(option);
                    });
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

        var compositionCounter = <?php echo $compositionCounter; ?>;

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
                compositionCounter--;
            };

            compositionInputs.appendChild(cancelButtonName);

            // Memperbarui datalist dengan nama bahan yang baru
            compositionCounter++;

        }

        function removeComposition(button) {
            var compositionInputs = document.getElementById("compositionInputs");
            compositionInputs.removeChild(button.previousSibling);
            compositionInputs.removeChild(button.previousSibling);
            compositionInputs.removeChild(button.previousSibling); // Remove input
            compositionInputs.removeChild(button.previousSibling); // Remove amount input
            compositionInputs.removeChild(button.previousSibling); // Remove br element
            compositionInputs.removeChild(button); // Remove the button itself
            compositionCounter--;
        }

        <?php foreach ($compositionData as $key => $value): ?>
            <?php
            if (strpos($key, 'bahan') !== false) {
                echo 'fillBahanList("' . $key . '");';
            }
            ?>
        <?php endforeach; ?>
    </script>
</body>

</html>