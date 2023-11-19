<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM akun WHERE id=$id";

if ($conn->query($query) === TRUE) {
    header('Location: cek_data_akun.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>