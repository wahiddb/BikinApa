<?php
include "koneksi.php";
$id = $_GET['id'];
$alamat    = $_POST['alamat'];
$nama   = $_POST['nama'];
$telepon = $_POST['telepon'];

$query  = mysqli_query($connect, "update pelanggan set alamat='$alamat',nama='$nama',telepon='$telepon' where id_pelanggan='$id' ")
    or die(mysqli_error($connect));
if ($query) {
    header('location:pelanggan.php');
} else {
    echo mysqli_error($connect);
}
