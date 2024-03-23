<?php
require "koneksi.php";
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$periksa = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
$cek = mysqli_num_rows($periksa);

if ($cek) {
    echo "<script>alert('Login Berhasil');
                document.location='../views/home.php'</script>";
} else {
    echo "<script>alert('info : Username atau password salah!');
                document.location='../index.php'</script>";
}
