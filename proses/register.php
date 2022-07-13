<?php
include("../config.php");

var_dump($_POST);

// Inisialisasi Variable
$username = $_POST['username'];
$password = $_POST['password'];
$ulang_password = $_POST['ulang_password'];

// Cek Username
$user = $conn->query("SELECT * FROM `akun` WHERE username = '$username'");
if ($user->num_rows > 0) {
    $_SESSION['notif'] = "Register gagal, username telah terdaftar!";
    header("Location: ../register.php");
    die();
}

// Cek Password
if ($password != $ulang_password) {
    $_SESSION['notif'] = "Register gagal, password dan ulang password berbeda!";
    header("Location: ../register.php");
    die();
}

// Buat Query
$query = "INSERT INTO `akun`(`username`, `password`) VALUES ('$username','$password')";

// Proses
if ($conn->query($query) == TRUE) {
    $_SESSION['notif'] = "Register berhasil, silahkan login!";
    header("Location: ../login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
