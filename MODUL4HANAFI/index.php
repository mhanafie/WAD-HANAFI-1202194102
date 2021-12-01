<?php
include('config.php');
$DB = new database();
session_start();
if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
}

// get userid
$current = $_SESSION['email'];
$sqeu = "SELECT id FROM users WHERE email = '$current'";
$user_id = mysqli_query($Koneksi, $sqeu);
$id_user = 0;
while ($IDS_FE = mysqli_fetch_assoc($user_id)) {
    $id_user = $IDS_FE['id'];
}

// menambahkan barang item1
if (isset($_POST['item1'])) {
    // tambah barang
    $datenya = date('Y-m-d H:i:s', strtotime($_POST['item_date']));
    // $datenya = $_POST['item_date'];
    $que = "INSERT INTO Bookings (user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('$id_user', 'Pariwisata Turkey', 'Turkey', '15000000', '$datenya')";
    $insertaja = mysqli_query($Koneksi, $que);
    if ($insertaja) {
        header("Refresh:2");
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Berhasil Ditambahkan';
        echo '</div>';
    } else {
        header("Refresh:2");
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Gagal Menambahkan';
        echo '</div>';
    }
}
// menambahkan barang item2
if (isset($_POST['item2'])) {
    // tambah barang
    $datenya = date('Y-m-d H:i:s', strtotime($_POST['item_date']));
    $que = "INSERT INTO Bookings (user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('$id_user', 'Pariwisata Spain', 'spain', '18000000', '$datenya')";
    $insertaja = mysqli_query($Koneksi, $que);
    if ($insertaja) {
        header("Refresh:2");
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Berhasil Ditambahkan';
        echo '</div>';
    } else {
        header("Refresh:2");
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Gagal Menambahkan';
        echo '</div>';
    }
}
// menambahkan barang item3
if (isset($_POST['item3'])) {
    // tambah barang
    $datenya = date('Y-m-d H:i:s', strtotime($_POST['item_date']));
    $que = "INSERT INTO Bookings (user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('$id_user', 'Pariwisata France', 'France', '25000000', '$datenya')";
    $insertaja = mysqli_query($Koneksi, $que);
    if ($insertaja) {
        header("Refresh:2");
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Berhasil Ditambahkan';
        echo '</div>';
    } else {
        header("Refresh:2");
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Gagal Menambahkan';
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
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
</head>
<body class="bg-white">

<!-- navbar -->

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
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</nav>

<div class="container my-5">
    <div class="card mx-auto border-0" style="width:65%">
        <div class="border rounded">
            <br>
            <h1 class="mt-3" align="center">EAD TRAVEL</h1>

            <br>
        </div>
        <form method="post" action="">
            <div class="card-body pt-0 px-3">
                <div class="row border rounded">
                    <div class="col card border-0 px-0">
                        <img class="card-img-top" src="assets/img/Turkey.jpg" alt="Card image cap"
                             style="height:199.5px;height:199.5px">
                        <div class="card-body px-3">
                            <h5 class="card-title">TURKEY</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <hr>
                            <p><b>Rp15.000.000</b></p>
                        </div>
                    </div>
                    <div class="col card border-top-0 border-bottom-0 px-0">
                        <img class="card-img-top" src="assets/img/spain.jpg" alt="Card image cap"
                             style="height:199.5px;height:199.5px">
                        <div class="card-body px-3">
                            <h5 class="card-title">Spain</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <hr>
                            <p><b>18.000.000</b></p>
                        </div>
                    </div>
                    <div class="col card border-0 px-0">
                        <img class="card-img-top" src="assets/img/france.jpg" alt="Card image cap"
                             style="height:199.5px;height:199.5px">
                        <div class="card-body px-3">
                            <h5 class="card-title">France</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <hr>
                            <p><b>25.000.000</b></p>
                        </div>
                    </div>
                </div>
                <div class="row border rounded" align="center">
                    <div class="col card border-0">
                        <button type="button" class="btn btn-primary btn-sm my-3" data-target="#modal1"
                                data-toggle="modal" style="width:100%">Pesan Tiket
                        </button>
                    </div>
                    <div class="col card border-top-0 border-bottom-0">
                        <button type="button" class="btn btn-primary btn-sm my-3" data-target="#modal2"
                                data-toggle="modal" style="width:100%">Pesan Tiket
                        </button>
                    </div>
                    <div class="col card border-0">
                        <button type="button" class="btn btn-primary btn-sm my-3" data-target="#modal3"
                                data-toggle="modal" style="width:100%">Pesan Tiket
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end of content -->


<div class="modal fade" id="modal1" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="post">
                    <input type="text" class="form-control" name="item_date" data-toggle="datepicker" readonly="true">
            </div>
            <div class="modal-footer">

                <button type="submit" name="item1" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="modal2" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="text" class="form-control" name="item_date" data-toggle="datepicker" readonly="true">
            </div>
            <div class="modal-footer">

                <button type="submit" name="item2" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modal3" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" readonly="true">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">

                    <input type="text" class="form-control" name="item_date" data-toggle="datepicker">
            </div>
            <div class="modal-footer">

                <button type="submit" name="item3" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="js/datepicker.js"></script>
<script>
    $(function () {
        $('[data-toggle="datepicker"]').datepicker({
            autoHide: true,
            zIndex: 2048,
        });
    });
</script>


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