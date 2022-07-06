<?php
include("../config.php");

var_dump($_GET);

// Inisialisasi Variable
$id = $_GET['id'];

// Buat Query
$query = "DELETE FROM `kontak` WHERE id = '$id'";

// Proses
if ($conn->query($query) == TRUE) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
