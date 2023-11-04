<?php
include 'koneksi.php';

$product_name = $_POST['product_name'];
$selling_price = $_POST['selling_price'];
$cost_price = $_POST['cost_price'];
$category = $_POST['category'];
$selected_composition = $_POST['selected_composition'];

// Menggabungkan komposisi yang dipilih menjadi satu string, pisahkan dengan koma
$composition = implode(', ', $selected_composition);

$query = "INSERT INTO products (product_name, selling_price, cost_price, category, composition) VALUES ('$product_name', $selling_price, $cost_price, '$category', '$composition')";

if ($conn->query($query) === TRUE) {
    header('Location: daftarproduk.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>