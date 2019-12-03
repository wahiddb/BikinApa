<?php

$totalharga = 0;
if (empty($_SESSION['cart']) or !isset($_SESSION['cart'])) {
    echo "<script>alert('Kosong gembel, belanja dulu!')</script>";
    echo "<script>location='index.php';</script>";
}
foreach ($_SESSION['cart'] as $id_produk => $jumlahcart) {


    $query = "select * from produk where id_produk = $id_produk";
    $result = $connect->query($query);
    $row = mysqli_fetch_array($result);
    $subtotal = $row['harga_produk'] * $jumlahcart;
    $totalharga += $subtotal;
    ?>
    <tr>
        <td><?php echo $row['nama_produk']; ?></td>
        <td><?php echo $jumlahcart; ?></td>
        <td>Rp.<?php echo number_format($subtotal); ?>,-</td>
    </tr>

<?php } ?>