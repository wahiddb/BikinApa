<?php
include 'koneksi.php';
include 'session.php';

$id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
$tanggal_pembelian = date("Y-m-d");
$totalharga = $_POST['beli'];

    $sql_insert_pembelian = "INSERT INTO pembelian(id_pembelian, id_pelanggan, tanggal_pembelian, total_pembelian) values(DEFAULT, '$id_pelanggan', '$tanggal_pembelian', '$totalharga')";
    $connect->query($sql_insert_pembelian);

    $id_pembelian = $connect->insert_id;
    $_SESSION["id_pembelian"] = $id_pembelian;
    foreach ($_SESSION['cart'] as $id_produk => $jumlah) 
    {
        $sql_insert_produk = "INSERT INTO pembelian_produk(id_pembelian_produk, id_pelanggan, id_pembelian, id_produk, jumlah) values(DEFAULT, '$id_pelanggan', '$id_pembelian', '$id_produk', '$jumlah')";
        $connect->query($sql_insert_produk);
    }
    unset($_SESSION['cart']);
    header('location:checkout-success.php');
?>