
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
      
        <a class="navbar-brand" href="Hanafi_home.php"><img src="https://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" class="w-100" alt="" style="height:100px"></a>
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" 
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      
        </button>
      

<div class="nav navbar-right">
      <li class="nav-item dropdown">
   
     <a class="nav-link text-light" href="Hanafi_TambahBuku.php"> <button type="button" class="btn btn-primary">Tambah_buku</button></a>
      </li>   
   
    </div>
  </div>


    </nav>

  <div class="container mx-auto my-5">
    <?php
    include './kontrol/connect.php';
    include './kontrol/create.php';
   
    ?>

    <form action="Hanafi_home.php" method="post" enctype="multipart/form-data">
      <div class="row justify-content-center" style="">
        <div class="col-lg-9 col-lg-offset-9 ">
          <div class="card h-100">
            
            <div class="card-body">

              <div class="form-group">
                <h6>Judul Buku</h6>
               

                <input required type="text" name="JudBuk" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>


              <div class="form-group">
                

               
                <h6 style="margin-top:5px;"> Penulis</h6>
               
                <input required type="text" name="Tulis" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

               <div class="form-group">
               
                <h6 style="margin-top:5px;">Tahun Terbit</h6>
               
               <input required type="text" name="Terbit" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>



              <div class="form-group">
               
                <h6 style="margin-top:5px;">Deskripsi</h6>
              

                 <textarea required class="form-control" name="Dec" id="" rows="3"></textarea>
              </div>

 <div class="my-2">
                <label for=""><strong>Bahasa</strong></label>
                <div class="">
                  <label class="col-md-6 form-check">
                    <div class="row">
                      <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="BHS" id="gridRadios2" value="Indonesia">
                        <label class="form-check-label" for="gridRadios2">
                          Indonesia
                        </label>
                      </div>
                      <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="BHS" id="gridRadios3" value="Lainnya">
                        <label class="form-check-label" for="gridRadios3">
                          Lainnya


                        </label>
                      </div>
          </div>
        </div>

              <div class="form-group">
                <h6>Tag</h6>
                 
                    <div class="col-md-9">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="Tag[]" id="" value="Pemograman" checked>Pemograman
                        

                        <input type="checkbox" class="form-check-input" name="Tag[]" id="" value="Website" checked>Website
                        

                        <input type="checkbox" class="form-check-input" name="Tag[]" id="" value="Java" checked>Java
                       
                        <input type="checkbox" class="form-check-input" name="Tag[]" id="" value="OOP" checked>OOP
                        
                        <input type="checkbox" class="form-check-input" name="Tag[]" id="" value="MVC" checked>MVC
                       

                        <input type="checkbox" class="form-check-input" name="Tag[]" id="" value="Kalkulus" checked>Kalkulus
                        <input type="checkbox" class="form-check-input" name="Tag[]" id="" value="Lainnya" checked>Lainnya
                        

                      </label>
                    </div>


              </div>


<div class="form-group">
                <h6 style="margin-top:5px;">Gambar</h6>
                 
                    <div class="col-md-12">
          <div class="custom-file">
                  <input type="file" name="inputImg" class="custom-file-input" id="customFile">
<!--                   <label class="custom-file-label" for="customFile">Choose file</label> -->
                </div>
                    <!-- <input class="form-control" type="file" name="Gambar" class="custom-file-input" id="customFile" multiple> -->
                    </div>


              </div>


             
                       <div class="form-group  text-center" style="margin-top: 30px">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                
              </div>
                    </div>

                  </label>
                </div>
              </div>


            

     
        </div>
      </div>
    </form>

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