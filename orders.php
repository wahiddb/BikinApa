<?php 
    include 'header.php';
    include 'session.php';
?>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-header">
                    Menu
                </div>
                <div class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="orders.php">Orders</a>
                    </li>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Daftar Orders
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];
                                if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                                    $page_no = $_GET['page_no'];
                                    } else {
                                        $page_no = 1;
                                        }        
                                $total_records_per_page = 4;
                                $offset = ($page_no-1) * $total_records_per_page;
                                $previous_page = $page_no - 1;
                                $next_page = $page_no + 1;
                                $adjacents = "2";
                                $result_count = mysqli_query($connect, "SELECT COUNT(*) As total_records FROM `produk`");
                                $total_records = mysqli_fetch_array($result_count);
                                $total_records = $total_records['total_records'];
                                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                $second_last = $total_no_of_pages - 1; // total pages minus 1
                                $query = "select * from riwayat where id_pelanggan = $id_pelanggan";
                                $result = $connect->query($query);
                                while ($row = mysqli_fetch_array($result)) { 
                            ?>
                            <tr>
                                <td>
                                    <p><img src="assets/foto_produk/<?php echo $row['foto_produk']; ?>" alt="" width="85px" height="50px"> <strong><?php echo $row['nama_produk']; ?></strong></p>
                                </td>
                                <td class="text"><?php echo $row['tanggal_pembelian']; ?></td>
                                <td class="text"><?php echo $row['jumlah']; ?></td>
                                <td class="text">Rp.<?php echo number_format($row['harga_produk'] * $row['jumlah']); ?>,-</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <a href="hapus_riwayat.php?id=<?php echo $row['id_produk'] ?>" class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"> Hapus Riwayat Pembelian</i></a>
                </div>
                
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php' ?>