<?php

// koneksi
include 'koneksi.php';

// mendapatkan daftar nama produk, harga jual, dan komposisi dari tabel products


    $np = $_POST['nama_produk'];
    $hrgjual = $_POST['harga_jual'];
    $qty = $_POST['kuantitas'];
    $date = $_POST['tgl'];
    
    $selectedOption = mysqli_fetch_assoc(mysqli_query($conn, "SELECT composition FROM products WHERE product_name = '$np'"));

    $komposisi = json_decode($selectedOption['composition'], true);
    $isValid = true;

    foreach ($komposisi as $key => $value) {
        // Memeriksa apakah kunci mengandung substring "bahan"
        if (strpos($key, 'bahan') !== false) {
            // Mengambil nilai dari JSON
            $bahan = $value;
            $jumlah = intval($komposisi['jumlah' . substr($key, 5)]);
            $totalBahanTerpakai = $jumlah * $qty;
    
            // Ambil data dari database
            $query = "SELECT jumlah_bahan FROM bahan WHERE nama_bahan = '$bahan' ORDER BY id ASC LIMIT 1";
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                // Ambil hasil query
                $row = mysqli_fetch_assoc($result);
                $jumlahDiDatabase = $row['jumlah_bahan'];
    
                if ($totalBahanTerpakai <= $jumlahDiDatabase) {
                    $jumlahDiDatabase -= $totalBahanTerpakai;
                    
                    $updateQuery = "UPDATE bahan SET jumlah_bahan = '$jumlahDiDatabase' WHERE nama_bahan = '$bahan' ORDER BY id ASC LIMIT 1";
                    $updateResult = mysqli_query($conn, $updateQuery);

                    if (!$updateResult) {
                        echo "<script>alert('Gagal mengupdate stok bahan');</script>";
                        $isValid = false;
                    }

                } else if ($totalBahanTerpakai == $jumlahDiDatabase){
                    $updateQuery1 = "UPDATE bahan SET jumlah_bahan = '$jumlahDiDatabase' WHERE nama_bahan = '$bahan' ORDER BY id ASC LIMIT 1";
                    $updateResult1 = mysqli_query($conn, $updateQuery1);
                    $updateQuery2 = "DELETE FROM bahan WHERE nama_bahan = '$bahan'";
                    $updateResult2 = mysqli_query($conn, $updateQuery2);

                } else {
                    $isValid = false;
                    echo "<script>alert('Gagal menambahkan data penjualan'); window.location.href = 'penjualan.php';</script>";
                }
            }
        }
    }

    if ($isValid) {
        $q = mysqli_query($conn, "INSERT INTO penjualan (nama_produk, harga_jual, kuantitas, tgl) VALUES ('$np', '$hrgjual', '$qty','$date')");

        if ($q) {
            echo "<script>alert('Berhasil tambah data penjualan!'); window.location.href = 'penjualan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data penjualan'); window.location.href = 'penjualan.php';</script>";
        }
    }

