<?php
include_once('config.php');
$DB= new database();
session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:login.php');
}

// get userid
$CURRENT = $_SESSION['email'];
$SQLKU = "SELECT id FROM users WHERE email = '$CURRENT'";
$USR_ID = mysqli_query($Koneksi,$SQLKU);
$ID_USER=0;
while ($C4RT6 = mysqli_fetch_assoc($USR_ID)) {
    $ID_USER = $C4RT6['id'];
}

//menampilkan item
$C4RT7 = "SELECT * FROM Bookings WHERE user_id = '$ID_USER'";
$C4RT8 = mysqli_query($Koneksi, $C4RT7);
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
    <title>Bookings</title>
</head>
<body class="bg-white">


    <!-- navbar -->

             <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">EAD TRAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
     <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a>
                </li>
                <li class="nav-item active mr-3">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selamat Datang, <font class="text-primary"><?php echo $_SESSION['nama']?></font>
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

    <!-- content -->
    <div class="container my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                      <th scope="col">No</th>
                     <th scope="col">Nama Tempat</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
                $JKW = 0;
                $TOTAL = 0;
                while ($HASIL_ASSOC = mysqli_fetch_assoc($C4RT8)) {
                    echo '<tbody>';
                    echo '<tr>';
                    //
                    echo '<th scope="row">';
                    echo $JKW+=1;
                    echo '</th>';
                    // 
                    echo '<td>';
                    echo $HASIL_ASSOC['nama_tempat'];
                    echo '</td>';

                    echo '<td>';
                    echo $HASIL_ASSOC['lokasi'];
                    echo '</td>';

                    echo '<td>';
                    echo $HASIL_ASSOC['tanggal'];
                    echo '</td>';

                    echo '<td>'; 
                    echo 'Rp ' . number_format($HASIL_ASSOC['harga'], 0, ",", ",");
                    $TOTAL = $TOTAL + $HASIL_ASSOC['harga'];
                    echo '</td>';
                            // 
                    echo '<td>'; ?> <!-- POTONG DISINI -->

                    <a href="delete.php?name=<?php echo $HASIL_ASSOC['id']; ?>" class="btn btn-danger btn-md" onclick="alert('Item berhasil dihapus')">Hapus</a>

                    <?php echo '</td>'; // SAMBUNG DISINI
                    echo '</tr>';
                    echo '</tbody>';
                }
                    echo '<tbody>';
                    echo '<tr>';

                    echo '<th scope="row">';
                    echo 'Total';
                    echo '</th>';


                    echo '<th scope="row">';

                    echo '</th>';


                    echo '<th scope="row">';

                    echo '</th>';


                    echo '<td>';
                    echo '';
                    echo '</td>';

                    echo '<td>';
                    echo '<b>';
                    echo 'Rp ' . number_format($TOTAL, 0, ",", ",");
                    echo '</b>';
                    echo '</td>';

                    echo '<td>';
                    echo '';
                    echo '</td>';
            ?>
        </table>
      
</body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
       <p>NIM  = 1202194102</p>
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
