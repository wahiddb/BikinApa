<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = mysqli_real_escape_string($connect, trim($_POST['username']));
$password = mysqli_real_escape_string($connect, trim(md5($_POST['password'])));

$stmt = $connect->prepare("select * from admin where username=? and password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
// menyeleksi data user dengan username dan password yang sesuai
// $login = mysqli_query($connect, "select * from admin where email='$username' and password='$password'");
// // menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
// if ($cek > 0) {
// 	$_SESSION['username'] = $username;
// 	$_SESSION['status'] = "login";
// 	header("location:welcome.php");
// } else {
// 	header("location:login.php?pesan=gagal");
// }
if ($result->num_rows > 0) {
	$akun = $result->fetch_assoc();
	$_SESSION['admin'] = $akun;
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:welcome.php");
} else {
	header("location:login.php?pesan=gagal");
}
