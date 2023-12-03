<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $selling_price = $_POST['selling_price'];
    $category = $_POST['category'];
    $editedCompositionKeys = isset($_POST['selected_composition_key']) ? $_POST['selected_composition_key'] : array();
    $editedCompositionValues = isset($_POST['selected_composition_value']) ? $_POST['selected_composition_value'] : array();
    //counter
    $compositionCounter = isset($_POST['compositionCounter']) ? $_POST['compositionCounter'] : 0;
    //penambahan item baru pada composition
    $addedComposition = isset($_POST['selected_composition']) ? $_POST['selected_composition'] : array();
    $addedAmount = isset($_POST['selected_amount']) ? $_POST['selected_amount'] : array();

    $addedCompositionArray = array();

    // Check if addedComposition and addedAmount are set before using them
    if (isset($addedComposition) && isset($addedAmount)) {
        for ($i = 0; $i < count($addedComposition); $i++) {
            $addedCompositionArray["bahan" . ($i + $compositionCounter + 1)] = $addedComposition[$i];
            $addedCompositionArray["jumlah" . ($i + $compositionCounter + 1)] = $addedAmount[$i];
        }
    }

    // Check if the arrays have the same number of elements before combining
    if (count($editedCompositionKeys) === count($editedCompositionValues)) {
        $editedComposition = array_combine($editedCompositionKeys, $editedCompositionValues);
        $mergedArray = array_merge($editedComposition, $addedCompositionArray);

        // Memproses komposisi
        $jsonComposition = json_encode($mergedArray);

        // Memperbarui data produk di database
        $query = "UPDATE products SET product_name='$product_name', selling_price='$selling_price', category='$category', composition='$jsonComposition' WHERE id=$id";
        $result = $conn->query($query);

        if ($result) {
            header("Location: daftarproduk.php");
        } else {
            echo "Gagal memperbarui produk.";
        }
    } else {
        // Debug information
        echo "Jumlah elemen pada editedCompositionKeys: " . count($editedCompositionKeys) . "<br>";
        echo "Jumlah elemen pada editedCompositionValues: " . count($editedCompositionValues) . "<br>";
        echo "editedCompositionKeys: " . print_r($editedCompositionKeys, true) . "<br>";
        echo "editedCompositionValues: " . print_r($editedCompositionValues, true) . "<br>";
        echo "Jumlah elemen pada Array dan Array tidak sama.";
    }
}

$conn->close();
?>
