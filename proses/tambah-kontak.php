<?php
include("../config.php");

// var_dump($_POST);

// Inisialisasi Variable
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

// Buat Query
$query = "INSERT INTO `kontak`(`nama`, `no_hp`, `alamat`) VALUES ('$nama','$no_hp','$alamat')";

// Proses
if ($conn->query($query) == TRUE) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
