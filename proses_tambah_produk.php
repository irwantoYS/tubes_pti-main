<?php
include 'koneksi.php';

$product_name = $_POST['product_name'];
$selling_price = $_POST['selling_price'];
$category = $_POST['category'];
$selectedComposition = $_POST['selected_composition'];
$selectedAmount = $_POST['selected_amount'];

$compositionArray = array();

for ($i = 0; $i < count($selectedComposition); $i++) {
    $compositionArray["bahan" . ($i + 1)] = $selectedComposition[$i];
    $compositionArray["jumlah" . ($i + 1)] = $selectedAmount[$i];
}

$compositionJSON = json_encode($compositionArray);

$query = "INSERT INTO products (product_name, selling_price, category, composition) VALUES ('$product_name', $selling_price, '$category', '$compositionJSON')";

if ($conn->query($query) === TRUE) {
    header('Location: daftarproduk.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>