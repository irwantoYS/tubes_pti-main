<?php
    // convert file ke bentuk excel
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Mahasiswa.xls");
?>
<?php
 
// koneksi
$conn = new mysqli('localhost', 'root', '', 'coba');
?>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Nama Produk</th>
            <th>Harga Jual</th>
            <th>Harga Modal</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
            <!-- <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>
        <?php
            $q = mysqli_query($conn, "SELECT * FROM penjualan");
            $total = 0;
            $tot_bayar = 0;
            $no = 1;
 while ($r = $q->fetch_assoc()) {
            // total adalah hasil dari harga x qty
            $ttlhargajual = $r['harga_jual'] * $r['kuantitas'];
            $ttlhargamodal = $r['harga_modal'] * $r['kuantitas'];  
            $total = $ttlhargajual - $ttlhargamodal;
            // total bayar adalah penjumlahan dari keseluruhan total
            $tot_bayar += $total;
            ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $r['tgl'] ?></td>
            <td><?= ucwords($r['nama_produk']) ?></td>
            <td><?= $r['harga_jual'] ?></td>
            <td><?= $r['harga_modal'] ?></td>
            <td><?= $r['kuantitas'] ?></td>
            <td><?= $total ?></td>
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