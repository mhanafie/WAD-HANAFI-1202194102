
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/style/styles.css">
</head>
<body>

    <style>
    .fax {
      color: orange;
      margin-right: 12px;
    }

    .image-awal {
      overflow: hidden;
      border-radius: 20px;

      object-fit: cover;
      height: 400px;
      display: block;
      position: relative;
            box-shadow: 0 0 25px #3d2173a1;
      transition: all ease 1s;

    }

    .card-home {
      margin: 20px;
    }
  </style>

  <section id="home">
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="Hanafi_home.php"><img src="https://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" class="w-100" alt="" style="height:100px;"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        
        </button>
        
<div class="nav navbar-right">
      <li class="nav-item dropdown">
     <a class="nav-link text-light" href="Hanafi_TambahBuku.php"> <button type="button" class="btn btn-primary">Tambah_buku</button></a>
      </li>   
    </div>
  </div>


    </nav>

  <div class="container">
    <?php
    include './kontrol/connect.php';
    include './kontrol/create.php';

    $query = "SELECT * FROM buku_table";
    $querysql = mysqli_query($CONNE, $query);

    ?>

    <?php
    if (mysqli_num_rows($querysql) == 0) { ?>
      <center> <h1 class="h-100" style="margin-top: 200px;">Belum Ada Buku<hr ></h1> </center>
      <div class=" d-flex justify-content-center align-items-center">
        
        <h4 class="h-100" >Sudahkah Menambahkan Buku</h4>  
      </div>
    <?php } ?>
    <div class="row">
      <?php while ($row = mysqli_fetch_array($querysql)) {  ?>
        <div class="col-md-4">
          <div class="card card-home">
            <img class="card-img-top image-awal" src="<?php echo $row['gambar'] ?>" alt="<?php echo $row['gambar'] ?>">
            <div class="card-body">
              <h3><?php echo $row['judul_buku'] ?></h3>
              <p class="card-text">
                <p><?php echo $row['deskripsi'] ?></p>
            </div>
            <div class="card-footer bg-transparent ">
              <a href="Hanafi_detail.php?id_buku=<?php echo $row['id_buku'] ?>">
            
                <p style="text-align: end;"><button type="button" class="btn btn-secondary">Lihat Detail</button></p>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

</body>  


<footer class="bg-light py-2 text-center">
      <div class=" d-flex justify-content-center align-items-center">
        

      </div>
         <h4 class="h-100">Perpustakaan EAD</h4>  
  <p class="text-secondary m-0">Muhammad Hanafi Mu'amar Al Faridz_1202194102</p></footer>


</html>