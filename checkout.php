<?php
include 'header.php';
include 'session.php';
?>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Formulir Alamat Pengirimian
                </div>
                <div class="card-body">
                    <form action="update_data.php" method="post">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION["pelanggan"]['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"><?php echo $_SESSION["pelanggan"]['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="<?php echo $_SESSION["pelanggan"]['telepon'] ?>">
                        </div>

                        <button class="btn btn-primary" type="submit">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
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
                                        <th>Qty</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include 'checkout_cart.php' ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Total</th>
                                        <th>Rp.<?php echo number_format($totalharga); ?>,-</th>
                                    </tr>
                                    <tr>
                                        <form action="checkout_process.php" method="post">
                                            <th colspan="2"><button class="btn btn-primary" name="beli" type="submit" value="<?php echo $totalharga ?>">Beli Produk</button></th>
                                        </form>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'footer.php'
?>