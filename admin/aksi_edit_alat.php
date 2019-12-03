<?php
include "koneksi.php";
$id = $_GET['id'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
// $deskripsi = $_POST['$deskripsi'];
$kategori = $_POST['kategori'];

$foto_produk = $_FILES['foto_produk']['name'];
$lokasi = $_FILES['foto_produk']['tmp_name'];

move_uploaded_file($lokasi, '../assets/foto_produk/' . $foto_produk);
$query  = mysqli_query($connect, "update produk set harga_produk='$harga_produk',nama_produk='$nama_produk',foto_produk='$foto_produk' where id_produk='$id' ")
    or die(mysqli_error($connect));
if ($query) {
    header('location:alat.php');
} else {
    echo mysqli_error($connect);
}
