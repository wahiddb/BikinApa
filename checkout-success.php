<?php 
    include 'header.php';
    include 'session.php';

    $id_pembelian = $_SESSION['id_pembelian'];
    
    $query = "select * from nota where id_pembelian = $id_pembelian";
    $result = $connect->query($query);
    $row = mysqli_fetch_array($result);
?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Checkout Berhasil !
                    </div>
                    <div class="card-body">
                        <p>Halo <?php echo $_SESSION['pelanggan']['nama'] ?>, </p>
                        <p>Pembelian produk anda telah berhasil dilakukan. Barang yang sudah dibeli tidak dapat dikembalikan.</p>
                        <p>Terima kasih, sudah berbelanja. Hubungi kami jika ada yang ditanyakan.</p>
                        <p>Berikut merupakan detail transaksi yang telah dilakukan. Detail barang yang telah dibeli dapat dilihat <a href="orders.php" >disini. </a></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Penerima</th>
                                <th>Alamat Pengiriman</th>
                                <th>No. Telepon</th>
                                <th>Tanggal Pembelian</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text"><?php echo $row['nama']; ?></td>
                                <td class="text"><?php echo $row['alamat']; ?></td>
                                <td class="text">+<?php echo $row['telepon']; ?></td>
                                <td class="text"><?php echo $row['tanggal_pembelian']; ?></td>
                                <td class="text">Rp.<?php echo number_format($row['total_pembelian']); ?>,-</td>
                            </tr>
                        </tbody>
                    </table>
                        <a href="index.php" class="btn btn-primary"><i class="fas fa-angle-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
    include 'footer.php'
?>
