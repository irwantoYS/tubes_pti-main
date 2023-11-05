<?php
include 'koneksi.php';

$id = $_POST['id'];
$product_name = $_POST['product_name'];
$selling_price = $_POST['selling_price'];
$cost_price = $_POST['cost_price'];
$category = $_POST['category'];
$composition = $_POST['composition'];

$query = "UPDATE products SET product_name='$product_name', selling_price=$selling_price, cost_price=$cost_price, category='$category', composition='$composition' WHERE id=$id";

if ($conn->query($query) === TRUE) {
    header('Location: daftarproduk.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>