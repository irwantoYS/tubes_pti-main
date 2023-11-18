<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_properti = $_POST['nama_properti'];
$jumlah_properti = $_POST['jumlah_properti'];

$query = "UPDATE property SET nama_properti='$nama_properti', jumlah_properti=$jumlah_properti WHERE id=$id";

if ($conn->query($query) === TRUE) {
    header('Location: kelolaproperty.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>