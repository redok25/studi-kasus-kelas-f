<?php
include("../config.php");

// var_dump($_POST);

// Inisialisasi Variable
$username = $_POST['username'];
$password = $_POST['password'];


// Cek Username
$user = $conn->query("SELECT * FROM `akun` WHERE username = '$username'");
if ($user->num_rows < 1) {
    $_SESSION['notif'] = "Login gagal, username/password salah!";
    header("Location: ../login.php");
    die();
}

// Cek Password
$user = $user->fetch_assoc();

if ($password != $user['password']) {
    $_SESSION['notif'] = "Login gagal, username/password salah!";
    header("Location: ../login.php");
    die();
} else {
    $_SESSION['user'] = $user;
    $_SESSION['notif'] = "Login berhasil!";
    header("Location: ../index.php");
    die();
}
