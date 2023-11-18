<?php
include 'koneksi.php';

// Query untuk mendapatkan harga modal dari tabel produk
$query = "SELECT composition FROM products";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $komposisi = json_decode($row['composition'], true);
    $hargaModal = 0;

    // Menghitung harga modal
    foreach ($komposisi as $key => $value) {
        if (strpos($key, 'bahan') !== false) {
            $index = substr($key, 5);
            $jumlahKey = "jumlah{$index}";
            $jumlah = $komposisi[$jumlahKey];

            // Mengambil harga_beli_pergram dari tabel bahan
            $namaBahan = $value;
            $queryBahan = "SELECT harga_beli_pergram FROM bahan WHERE nama_bahan = '$namaBahan'";
            $resultBahan = $conn->query($queryBahan);

            if ($resultBahan->num_rows > 0) {
                $rowBahan = $resultBahan->fetch_assoc();
                $hargaBahan = $rowBahan['harga_beli_pergram'];

                // Menghitung total biaya
                $hargaModal += $hargaBahan * $jumlah;
            }
        }
    }

    // Mengirimkan hasil dalam format JSON
    $response = array('hargaModal' => $hargaModal);
    echo json_encode($response);
} else {
    // Mengirimkan pesan kesalahan jika produk tidak ditemukan
    $response = array('error' => 'Produk tidak ditemukan');
    echo json_encode($response);
}

$conn->close();
?>
