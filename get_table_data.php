<?php
include 'koneksi.php';

$bahan = $_GET['bahan'];

$query = "SELECT * FROM bahan WHERE nama_bahan = '$bahan' ORDER BY nama_bahan";
$result = $conn->query($query);

$tableData = "";
$totalJumlahBahan = 0;

if ($result->num_rows > 0) {
    $tableData .= "<tr>";
    $tableData .= "<th>ID</th>";
    $tableData .= "<th>Nama Bahan</th>";
    $tableData .= "<th>Jumlah Bahan</th>";
    $tableData .= "<th>Kategori</th>";
    $tableData .= "<th>Tanggal Masuk</th>";
    $tableData .= "<th>Tanggal EXP</th>";
    $tableData .= "<th>Harga Beli</th>";
    $tableData .= "</tr>";

    while ($row = $result->fetch_assoc()) {
        $tableData .= "<tr>";
        $tableData .= "<td>" . $row['id'] . "</td>";
        $tableData .= "<td>" . $row['nama_bahan'] . "</td>";
        $tableData .= "<td>" . $row['jumlah_bahan'] . $row['satuan'] . "</td>";
        $tableData .= "<td>" . $row['kategori_produk'] . "</td>";
        $tableData .= "<td>" . $row['tanggal_masuk'] . "</td>";
        $tableData .= "<td>" . $row['tanggal_exp'] . "</td>";
        $tableData .= "<td>" . $row['harga_beli'] . "</td>";
        $tableData .= "</tr>";

        // Hitung total jumlah bahan
        $totalJumlahBahan += $row['jumlah_bahan'];
    }
} else {
    $tableData = "<tr><td colspan='7'>Tidak ada produk.</td></tr>";
}

$responseData = [
    'table' => $tableData,
    'total' => $totalJumlahBahan,
];

echo json_encode($responseData);

$conn->close();
?>