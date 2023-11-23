<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $selling_price = $_POST['selling_price'];
    $category = $_POST['category'];
    $editedCompositionKeys = $_POST['selected_composition_key'];
    $editedCompositionValues = $_POST['selected_composition_value'];

    $editedComposition = array_combine($editedCompositionKeys, $editedCompositionValues);
    
    // Memproses komposisi
    $jsonComposition = json_encode($editedComposition);

    // Memperbarui data produk di database
    $query = "UPDATE products SET product_name='$product_name', selling_price='$selling_price', category='$category', composition='$jsonComposition' WHERE id=$id";
    $result = $conn->query($query);

    if ($result) {
        header("Location: daftarproduk.php");
    } else {
        echo "Gagal memperbarui produk.";
    }
}

$conn->close();
?>
