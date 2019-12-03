<?php
include 'header.php'
?>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <form action="register_proses.php" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" id="username" required >
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama" required >
                        </div>
                        <div class="form-group">
                            <label for="">E-Mail</label>
                            <input type="email" class="form-control" name="emailuser" placeholder="Email@email.com" id="emailuser" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" id="alamat" required >
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" name="telepon"  id="telepon" value="+62" required >
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                        </div>
                        <div class="form-group">
                            <label for="">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="Konfirmasi Password" id="cpassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'footer.php'
?>