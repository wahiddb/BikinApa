<?php 
    include 'header.php'
?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <strong>Daftar Produk</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Konten -->
                    <?php 
                        include 'konten.php' 
                        ?>
                <!-- konten -->
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                Pencarian
                            </div>
                            <div class="card-body">
                                <form action="index.php" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cari">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary">Cari</button>
                                        </div>
                                    </div>
                                </form>
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
