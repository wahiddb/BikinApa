<?php
include "koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($connect, "delete from pelanggan where id_pelanggan='$id' ")
    or die(mysqli_error($connect));
if ($query) {
    header('location:pelanggan.php');
} else {
    echo mysqli_error($connect);
}
