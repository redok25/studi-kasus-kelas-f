<?php
include("../config.php");

var_dump($_POST);

// Inisialisasi Variable
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

// Buat Query
$query = "UPDATE `kontak` SET `nama`='$nama',`no_hp`='$no_hp',`alamat`='$alamat' WHERE id = '$id'";

// Proses
if ($conn->query($query) == TRUE) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
