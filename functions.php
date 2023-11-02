<?php
function ambil_data($koneksi)
{
    $query = "SELECT * FROM data";
    $result = $koneksi->query($query);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

function tambah_data($koneksi, $nama, $email)
{
    $query = "INSERT INTO data (nama, email) VALUES ('$nama', '$email')";
    $koneksi->query($query);
}

function perbarui_data($koneksi, $id, $nama, $email)
{
    $query = "UPDATE data SET nama = '$nama', email = '$email' WHERE id = $id";
    $koneksi->query($query);
}

function hapus_data($koneksi, $id)
{
    $query = "DELETE FROM data WHERE id = $id";
    $koneksi->query($query);
}
?>