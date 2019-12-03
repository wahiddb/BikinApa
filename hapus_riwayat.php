<?php
include "koneksi.php";
include "session.php";
$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];
$query = "delete from pembelian_produk where id_pelanggan = $id_pelanggan";
$result = $connect->query($query);

header ('location:orders.php');
?>
