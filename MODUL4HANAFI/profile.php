<?php
include_once('config.php');
$DB = new database();
session_start();
if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
}

//  Tampilkan Data Profil 
$Current = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email = '$Current'";
$datas = mysqli_query($Koneksi, $sql);
// END

//  update profil
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $pw = $_POST['password'];

    if ($_POST['confirm_password'] == $_POST['password']) {
        try {
            $sql = "UPDATE users SET nama='$nama', email='$email', No_hp='$no_hp', password='$pw' WHERE email='$email'";
            $st = $Koneksi->prepare($sql);
            $st->execute();
            header('Refresh:2');
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil di update!';
            echo '</div>';
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $C0NF1G5 = null;
    } else {
        header('Refresh:2');
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Gagal di update!';
        echo '</div>';
    }
} else {
    if (isset($_POST['cancel'])) {
        header('location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body class="bg-white">

<nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">EAD TRAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="nav navbar-right">
            <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="Bookings.php"><i class="fa fa-shopping-cart"
                                                                   style="font-size:22px"></i></a>
                    </li>
                    <li class="nav-item active mr-3">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Selamat Datang, <font class="text-primary"><?php echo $_SESSION['nama'] ?></font>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</nav>

<div class="container my-3">
    <div class="card centered mx-auto" style="width: 70%;">
        <div class="card-body">
            <h2 class="card-title" align="center">Profile</h2>
            <form method="post" action="">
                <?php
                while ($datasku = mysqli_fetch_assoc($datas)) {
                    ?>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" name="email"
                                   value="<?php echo $datasku['email'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?php echo $datasku['nama'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="no_hp"
                                   value="<?php echo $datasku['No_hp'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="confirm_password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary btn-block" name="update">Submit</button>
                        <button type="submit" class="btn btn-light btn-block" name="cancel">Cancel</button>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
</div>
<!-- end of content -->
</body>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Created By :</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Nama = Muhammad Hanafi Mu'amar Al Faridz</p>
                <p>NIM = 1202194102</p>
            </div>

        </div>
    </div>
</div>
<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" data-toggle="modal" data-target="#exampleModal">HANAFI_1202194102</a>
    </div>
    <!-- Copyright -->
</footer>
</html>