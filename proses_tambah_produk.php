<?php
include 'koneksi.php';

$product_name = $_POST['product_name'];
$selling_price = $_POST['selling_price'];
$cost_price = $_POST['cost_price'];
$category = $_POST['category'];
$composition = $_POST['composition'];

$query = "INSERT INTO products (product_name, selling_price, cost_price, category, composition) VALUES ('$product_name', $selling_price, $cost_price, '$category', '$composition')";

if ($conn->query($query) === TRUE) {
    header('Location: daftarproduk.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>