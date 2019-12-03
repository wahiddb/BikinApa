<?php
include 'koneksi.php';
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
// $deskripsi = $_POST['$deskripsi'];
$kategori = $_POST['kategori'];

$foto_produk = $_FILES['foto_produk']['name'];
$lokasi = $_FILES['foto_produk']['tmp_name'];


move_uploaded_file($lokasi, '../assets/foto_produk/' . $foto_produk);
$query  = mysqli_query($connect, "insert into produk(id_produk,nama_produk,harga_produk,foto_produk,kategori)
values ('$id_produk','$nama_produk','$harga_produk','$foto_produk','$kategori')");
if ($query) {
    header('location:alat.php');
} else {
    echo mysqli_error($connect);
}
