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
            $query = "SELECT * FROM bahan WHERE nama_bahan = '$bahan' ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                // Ambil hasil query
                $row = mysqli_fetch_assoc($result);
                $jumlahDiDatabase = $row['jumlah_bahan'];
                $id = $row['id'];

                //TERCUKUPI
                if ($totalBahanTerpakai <= $jumlahDiDatabase) {
                    $jumlahDiDatabase -= $totalBahanTerpakai;
                    
                    if ($jumlahDiDatabase === 0) {
                        // Hapus baris jika jumlahDiDatabase menjadi 0
                        $deleteQuery = "DELETE FROM bahan WHERE id='$id'";
                        $deleteResult = mysqli_query($conn, $deleteQuery);

                        if (!$deleteResult) {
                            echo "<script>alert('Gagal menghapus data bahan'); window.location.href = 'penjualan.php';</script>";
                            $isValid = false;
                        }
                    } else {
                        // Update jumlah bahan
                        $updateQuery = "UPDATE bahan SET jumlah_bahan = '$jumlahDiDatabase' WHERE id='$id'";
                        $updateResult = mysqli_query($conn, $updateQuery);

                        if (!$updateResult) {
                            echo "<script>alert('Gagal mengupdate stok bahan'); window.location.href = 'penjualan.php';</script>";
                            $isValid = false;
                        }
                    }
                
                //Tidak Tercukupi
                } else if ($totalBahanTerpakai > $jumlahDiDatabase){
                    $QueryTotal = "SELECT * FROM bahan WHERE nama_bahan = '$bahan' ORDER BY id ASC";
                    $ResultTotal = mysqli_query($conn, $QueryTotal);
                    $jumlahTotalBahanDB = 0;
                    while ($rowTotal = mysqli_fetch_assoc($ResultTotal)) {
                        $jumlahTotalBahanDB += $rowTotal['jumlah_bahan'];
                        
                    }
                    echo "<script>console.log('$jumlahTotalBahanDB');</script>";
                    if($jumlahTotalBahanDB >= $totalBahanTerpakai){
                        $deleteQuery = "DELETE FROM bahan WHERE id='$id'";
                        $deleteResult = mysqli_query($conn, $deleteQuery);
                        if (!$deleteResult) {
                            echo "<script>alert('Gagal menghapus data bahan'); window.location.href = 'penjualan.php';</script>";
                            $isValid = false;
                        }
                        while ($totalBahanTerpakai > $jumlahDiDatabase && $row = mysqli_fetch_assoc($result)) {
                            // Jumlah bahan di database belum mencukupi, ambil dari id berikutnya
                            $jumlahDiDatabase += $row['jumlah_bahan'];
                            $id = $row['id'];
                        }
                        $updateQuery = "UPDATE bahan SET jumlah_bahan = '$jumlahDiDatabase' WHERE id='$id'";
                        $updateResult = mysqli_query($conn, $updateQuery);
                        
                        if (!$updateResult) {
                            echo "<script>alert('Gagal mengupdate stok bahan'); window.location.href = 'penjualan.php';</script>";
                            $isValid = false;
                        }
                        if ($totalBahanTerpakai <= $jumlahDiDatabase) {
                            $jumlahDiDatabase -= $totalBahanTerpakai;
                    
                            if ($jumlahDiDatabase === 0) {
                                // Hapus baris jika jumlahDiDatabase menjadi 0
                                $deleteQuery = "DELETE FROM bahan WHERE id='$id'";
                                $deleteResult = mysqli_query($conn, $deleteQuery);

                                if (!$deleteResult) {
                                    echo "<script>alert('Gagal menghapus data bahan'); window.location.href = 'penjualan.php';</script>";
                                    $isValid = false;
                                }
                            } else {
                                // Update jumlah bahan
                                $updateQuery = "UPDATE bahan SET jumlah_bahan = '$jumlahDiDatabase' WHERE id='$id'";
                                $updateResult = mysqli_query($conn, $updateQuery);

                                if (!$updateResult) {
                                    echo "<script>alert('Gagal mengupdate stok bahan'); window.location.href = 'penjualan.php';</script>";
                                    $isValid = false;
                                }
                            }
                        } 
                    } else if ($jumlahTotalBahanDB < $totalBahanTerpakai){

                        $isValid = false;
                        echo "<script>alert('Gagal menambahkan Data Penjualan Karena Stok Kurang '); window.location.href = 'penjualan.php';</script>";
                    }
                }  else {
                        $isValid = false;
                        echo "<script>alert('Gagal menambahkan Data Penjualan '); window.location.href = 'penjualan.php';</script>";
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

