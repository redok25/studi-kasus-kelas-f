<?php
include("../config.php");

var_dump($_GET);

// Inisialisasi Variable
$id = $_GET['id'];

// Buat Query
$query = "DELETE FROM `kontak` WHERE id = '$id'";

// Proses
if ($conn->query($query) == TRUE) {
    $_SESSION['notif'] = "Kamu berhasil menghapus data kontak!";
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
