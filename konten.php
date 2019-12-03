<div class="row">

    <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $query = "select * from produk where nama_produk like '%" . $cari . "%'";
    } else if(isset($_GET['Alat_kantor'])) {
        $Alat_kantor = $_GET['Alat_kantor'];
        $query = "select * from produk where kategori like '%" . $Alat_kantor . "%'";
    } 
    else {
        $query = "select * from produk ";
    }
    $result = $connect->query($query);
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <div class="col-md-6">
            <div class="card mb-3">
                <img src="assets/foto_produk/<?php echo $row['foto_produk']; ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['nama_produk']; ?></h5>
                    <p class="card-text"><strong> Rp.<?php echo number_format($row['harga_produk']); ?>,-</strong></p>
                    <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                    <a href="#" class="badge badge-primary"><i class="fas fa-tags"></i> <?php echo $row['kategori']; ?></a>
                </div>
                <div class="card-footer">
                    <form action="beli.php?id=<?php echo $row['id_produk']; ?>" method="POST">
                        <div class="input-group">
                            <input type="number" name="jumlah" placeholder="Jumlah Barang" class="form-control" required>
                            <input type="hidden" name="stok" value="<?php $stok ?>" class="form-control" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary"> to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</div>