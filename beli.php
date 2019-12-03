<?php
session_start();

$id_produk = $_GET['id'];
$jumlah = $_POST['jumlah'];
$nomor = 0;
if (isset($_SESSION['cart'][$id_produk])) {
    $_SESSION['cart'][$id_produk] += $jumlah;
    $_SESSION['nomor'][$nomor+$jumlah];
} else {
    $_SESSION['cart'][$id_produk] = $jumlah;
    $_SESSION['nomor'][$nomor+$jumlah];
}
echo "<script>alert('Barang berhasil ditambahkan'); </script>";
echo "<script>location='index.php';</script>";

?>

