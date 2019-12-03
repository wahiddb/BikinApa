<?php
include 'session.php';
include 'koneksi.php';

    $id = $_SESSION["pelanggan"]['id_pelanggan'];
    $sql = "UPDATE pelanggan SET nama = ?, alamat = ?, telepon = ? WHERE id_pelanggan = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sssi", $_POST['nama'], $_POST['alamat'], $_POST['telepon'], $id);
    $stmt->execute();
    $stmt->close();

    $result = $connect->query("select * from pelanggan");
    $akun = $result->fetch_assoc();

    $_SESSION["pelanggan"] = $akun;
    echo "<script>alert('Data berhasil diubah!');</script>";
    echo "<script>location='checkout.php';</script>";
?>