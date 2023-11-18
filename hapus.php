<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM products WHERE id=$id";

if ($conn->query($query) === TRUE) {
    header('Location: daftarproduk.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>