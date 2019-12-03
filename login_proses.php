<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$stmt = $connect->prepare("select * from pelanggan where username = ? and password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result=$stmt->get_result();

// cek apakah username dan password di temukan pada database
if ($result->num_rows > 0) {
    $akun = $result->fetch_assoc();
    $_SESSION['pelanggan'] = $akun;
    header("location:index.php");
} else {
    echo "<script>alert('gagal login');</script>";
    echo "<script>location='login.php';</script>";
}
