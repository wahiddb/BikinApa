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
    <tbody>
        <tr>
            <td>
                <p><img src="assets/foto_produk/<?php echo $row['foto_produk']; ?>" alt="" width="85px" height="50px"> <strong><?php echo $row['nama_produk']; ?></strong></p>
            </td>
            <td class="text-center">Rp.<?php echo number_format($row['harga_produk']); ?>,-</td>
            <td>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control text-center" value="<?php echo $jumlahcart; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="submit"><i class="fas fa-check"></i></button>
                        </div>
                    </div>
                </form>
            </td>
            <td class="text-center">Rp.<?php echo number_format($subtotal); ?>,-</td>
            <td>
                <a href="cart_hapus.php?id=<?php echo $id_produk ?>" class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>

    <?php } ?>