<?php 
    include 'header.php';
    
if (!empty($_SESSION['pelanggan']) or isset($_SESSION['pelanggan'])) {
    
    echo "<script>alert('Wes Login Goblok!'); </script>";
    echo "<script>location='index.php';</script>";
};
?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="login_proses.php" method="post">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" id="username" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password" id="password" required>
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>  Belum punya akun? <a href="register.php">Daftar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
    include 'footer.php'
?>
