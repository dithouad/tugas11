<?php
if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == "admin" && $password == "1234") {
        echo "Login berhasil! Selamat datang, <b>$username</b>.";
    } else {
        echo "Login gagal! Username atau password salah.";
    }
}
?>
