<?php
include 'koneksi.php';

$nama_properti = $_POST['nama_properti'];
$jumlah_properti = $_POST['jumlah_properti'];

$query = "INSERT INTO property (nama_properti, jumlah_properti) VALUES ('$nama_properti', '$jumlah_properti')";

if ($conn->query($query) === TRUE) {
    header('Location: kelolaproperty.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>