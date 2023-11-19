<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $role = $_POST['role'];

    $query = "UPDATE akun SET username='$username', password='$password', status='$status', role='$role' WHERE id=$id";

    $result = $conn->query($query);

    if ($result) {
        header("Location: cek_data_akun.php");
        exit();
    } else {
        echo "Gagal memperbarui akun: " . $conn->error;
        echo "Query: " . $query;
    }

    $conn->close();
} else {
    echo "ID tidak ditemukan.";
}
?>
