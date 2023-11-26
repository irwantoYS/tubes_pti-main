<?php
    // convert file ke bentuk excel
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Penjualan.xls");
?>
<?php
 
// koneksi
$conn = new mysqli('localhost', 'root', '', 'warungupdate');
?>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Harga Jual</th>
            <th>Harga Modal</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
            <th>Nama Produk</th>
            <!-- <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>
        <?php
         if (isset($_POST['submit'])) {
              $search = mysqli_real_escape_string($conn, $_POST['search']);
              $start_date = $_POST['start_date'];
              $end_date = $_POST['end_date'];

              $searchQuery = "AND products.product_name LIKE '%$search%'";

              if (!empty($start_date) && !empty($end_date)) {
                // Adding date range filter
                $searchQuery .= " AND penjualan.tgl BETWEEN '$start_date' AND '$end_date'";
              }
            } else {
              $searchQuery = ''; // Empty search query
            }
            $q = mysqli_query($conn, "SELECT penjualan.*, products.product_name, products.composition FROM penjualan
                    JOIN products ON penjualan.nama_produk = products.product_name $searchQuery
                    ORDER BY penjualan.tgl DESC");

            $total = 0;
            $tot_bayar = 0;
            $no = 1;
            while ($r = $q->fetch_assoc()) {
              // Inisialisasi hargaModal di setiap iterasi produk
              $hargaModal = 0;
              $komposisi = json_decode($r['composition'], true);

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

              // total adalah hasil dari harga x qty
              $ttlhargajual = $r['harga_jual'] * $r['kuantitas'];
              $total = $ttlhargajual - $hargaModal * $r['kuantitas'];

              // total bayar adalah penjumlahan dari keseluruhan total
              $tot_bayar += $total;
              ?>
              <tr>
                <td>
                  <?= $no++ ?>
                </td>
                <td>
                  <?= $r['tgl'] ?>
                </td>
                <td>
                  <?= ucwords($r['product_name']) ?>
                </td>
                <td>
                  <?= $r['harga_jual'] ?>
                </td>
                <td>
                  <?= number_format($hargaModal, 2) ?>
                </td>
                <td>
                  <?= $r['kuantitas'] ?>
                </td>
                <td>
                  <?= $total ?>
                </td>
              </tr>
              <?php
            }
            ?>
        <tr>
            <th colspan="6">Keuntungan</th>
            <th><?= $tot_bayar ?></th>
        </tr>
    </tbody>
</table>