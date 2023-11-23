<?php
include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$status = $_POST['status'];
$role = $_POST['role'];


if (empty($username) || empty($password) || empty($confirm_password) || empty($status) || empty($role)) {
    echo "<script>alert('All fields are required');</script>";
    echo "<script>window.history.back();</script>"; // Go back to the previous page
    exit;
}
if ($password != $confirm_password) {
    echo "<script>alert('Password dan konfirmasi password tidak cocok');</script>";
    echo "<script>window.history.back();</script>"; // Go back to the previous page
    exit;
}

// Cek apakah username sudah ada di dalam database
$check_username_query = "SELECT * FROM akun WHERE username = '$username'";
$result = $conn->query($check_username_query);

if ($result->num_rows > 0) {
    echo "<script>alert('Username sudah ada, pilih username lain');</script>";
    echo "<script>window.history.back();</script>"; // Kembali ke halaman sebelumnya
    exit;
}
$query = "INSERT INTO akun (username, password, status, role) VALUES ('$username', '$password','$status', '$role')";

if ($conn->query($query) === TRUE) {
    header('Location: cek_data_akun.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>