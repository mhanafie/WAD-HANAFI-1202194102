<?php
session_start();
include_once('config.php');
$DB = new database();

if (isset($_SESSION['is_login'])) {
    header('location:index.php');
}

if (isset($_COOKIE['email'])) {
    $DB->relogin($_COOKIE['email']);
    header('location:index.php');
}

if (isset($_POST['login'])) {
    $Email = $_POST['email'];
    $pass = $_POST['password'];
    if (isset($_POST['remember'])) {
        $rem = TRUE;
    }
    else {
        $rem = FALSE;
    }

    if ($DB->login($Email,$pass,$rem)) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
        echo '<strong>Login Berhasil!</strong>';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';
        header("Refresh:3; url=index.php");
    }else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
        echo '<strong>Login Gagal!</strong>';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
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
    <style>
        .centered {
            position: fixed;
            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%);
        }
    </style>

</head>
<body style="background-color:#e9f9fe"> <!-- GANTI WARNAN -->
    <!-- navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">EAD TRAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
     <a class="nav-link text-light" href="#.php"> <button type="button" class="btn btn-primary"><span>LOG IN</span></button></a>
     <a class="nav-link text-light" href="Register.php"> <button type="button" class="btn btn-primary"><span>REGISTER</span></button></a>
      <li class="nav-item dropdown">
    
      </li>   
    </div>
  </div>


    </nav>

    <!-- content -->
    <div class="container my-3">
        <div class="card centered mx-auto px-3" style="width: 26rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Login</h5>
                <hr></hr>
                <form method="post" action="">
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:80%" placeholder="Masukkan Alamat E-mail">
                    </div>
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:80%" placeholder="Buat Kata Sandi">
                    </div>
                    <div class="form-check ml-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="form-group mt-3" align="center">
                        <button type="submit" name="login" class="btn btn-primary mb-2">Login</button>
                        <br>
                        Belum punya akun? <a href="register.php">Registrasi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of content -->
</body>
</html>