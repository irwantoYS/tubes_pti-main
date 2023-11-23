<?php
// Kode untuk mengambil nama bahan yang unik dari tabel bahan pada database Anda
include("koneksi.php");

$sql = "SELECT DISTINCT nama_bahan FROM bahan";
$result = $conn->query($sql);

$bahanNames = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bahanNames[] = $row;
    }
}

$conn->close();

// Mengembalikan data dalam format JSON
echo json_encode($bahanNames);
?>
