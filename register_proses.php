<?php
include 'koneksi.php';

// Username and Password sent from Form
$password = $_POST['password'];
$password_confirm = $_POST['cpassword'];

if ($password == $password_confirm) {

    $password = md5($password); //Password Encrypted 
    $sql = "INSERT INTO pelanggan(id_pelanggan, username, nama, email, alamat, telepon, password) values(DEFAULT, ?, ?, ?, ?, ?, ?)";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ssssis", $_POST['username'], $_POST['nama'], $_POST['emailuser'], $_POST['alamat'], $_POST['telepon'], $password);
    $stmt->execute();
    $stmt->close();
    echo "<script>alert('Akun Berhasil Dibuat!');</script>";
    echo "<script>location='login.php';</script>";
} else {
    echo "<script>alert('password harus sama');</script>";
    echo "<script>location='register.php';</script>";
}
