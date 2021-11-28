<?php
include_once('config.php');
$R6G1ST6R1 = new database();
if (isset($_POST['register'])) {
    $R6G1ST6R2 = $_POST['nama'];
    $R6G1ST6R3 = $_POST['email'];
    $R6G1ST6R4 = $_POST['no_hp'];
    $R6G1ST6R5 = ($_POST['password']);

    if ($_POST['konfirmasi_password'] == $_POST['password']) {
        if ($R6G1ST6R1->register($R6G1ST6R2,$R6G1ST6R3,$R6G1ST6R4,$R6G1ST6R5)) {
            header("Refresh:2; url=login.php");
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil registrasi';
            echo '</div>';
        }
    }
    else {
        header("Refresh:2");
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Gagal registrasi';
        echo '<br>';
        echo 'Periksa kembali password anda';
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="background-color:#e9f9fe">

     <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">EAD TRAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
     <a class="nav-link text-light" href="Login.php"> <button type="button" class="btn btn-primary"><span>LOG IN</span></button></a>
     <a class="nav-link text-light" href="#"> <button type="button" class="btn btn-primary"><span>REGISTER</span></button></a>
      <li class="nav-item dropdown">
    
      </li>   
    </div>
  </div>


    </nav>
    <div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 26rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Registrasi</h5>
                <hr></hr>
                <form method="post" action="">
                    <div class="form-group ml-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" style="width:80%" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:80%" placeholder="Masukkan Alamat E-mail">
                    </div>
                    <div class="form-group ml-3">
                        <label>No. Handphone</label>
                        <input type="number" class="form-control" name="no_hp" style="width:80%" placeholder="Masukkan Nomor Handphone">
                    </div>
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:80%" placeholder="Buat Kata Sandi">
                    </div>
                    <div class="form-group ml-3">
                        <label>Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" name="konfirmasi_password" style="width:80%" placeholder="Konfirmasi Kata Sandi">
                    </div>
                    <div class="form-group ml-3" align="center">
                        <button type="submit" name="register" class="btn btn-primary mb-2">Daftar</button>
                        <br>
                        Sudah punya akun? <a href="login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of content -->
</body>
</html>