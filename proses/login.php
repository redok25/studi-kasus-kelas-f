<?php
include("../config.php");

// var_dump($_POST);

// Inisialisasi Variable
$username = $_POST['username'];
$password = $_POST['password'];


// Cek Username
$user = $conn->query("SELECT * FROM `akun` WHERE username = '$username'");
if ($user->num_rows < 1) {
    header("Location: ../login.php");
    die();
}

// Cek Password
$user = $user->fetch_assoc();

if ($password != $user['password']) {
    header("Location: ../login.php");
    die();
} else {
    header("Location: ../index.php");
    die();
}
