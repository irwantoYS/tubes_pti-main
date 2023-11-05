<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM property WHERE id=$id";

if ($conn->query($query) === TRUE) {
    header('Location: kelolaproperty.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>