<?php
include 'header.php';
?>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    Cart
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php include 'cart_konten.php' ?>
                        <tr>
                            <td colspan="3"><strong>Total:</strong></td>
                            <td class="text-center"><strong>Rp.<?php echo number_format($totalharga); ?>,-</strong></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="checkout.php" class="btn btn-success float-right" onclick="return confirm('Yakin?');">Pembayaran <i class="fas fa-angle-right"></i></a>
                    <a href="index.php" class="btn btn-warning text-white"><i class="fas fa-angle-left"></i> Kembali Belanja</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'footer.php'
?>