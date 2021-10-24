<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESD VENUE BOOKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<body>


<style>
nav{background-color: lightblue;
}
.container-fluid{padding: 70px 0 10px 0; text-align: center;color: black;
} 
.container-fluid h2, .container-fluid p{text-align: center;color: black;
}
.col-md-auto{padding: 35px;
}
.card{width:15rem;margin: auto;padding: 0;-webkit-box-shadow:
} 
.card-header{text-align: center;margin-top: 35px
}
.card-body h4, .list-group, .card-footer{text-align: center;
}
.card-body h6{position:center ;text-align: center;color: blue;
}
</style>    


    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="boking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>


    <?php
        $img_src = [
            "1.jpg",
            "2.jpg",
            "3.jpg"
        ];
    ?>

    <div class="container-fluid">
        <h2><b>WELCOME TO ESD VENUE RESERVATION</b></h2><br>
        <div class="container bg-dark">
        <p class="text-light">Find your best deal for your event, here!</p>
        </div>
        
        <form action="boking.php" method="post">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-auto">
                    <div class="card">
                        <img src=<?=$img_src[0]?> class="card-img-top" alt="1 Single Bed" height="100%">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Borobudur Hotels</b></h5>
            <p class="text-left">Outdoor/Indoor</p>
            <p class="card-text text-primary text-left"><b>$100/hours</b></p>
            <p class="text-left">1000Orang</p>
                            <div class="card-header">
              <b>FACILITIES</b>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-success"><b>Bebas Parkir</b></li>
              <li class="list-group-item text-success"><b>Full AC</b></li>
              <li class="list-group-item text-success"><b>Cleaning Services</b></li>
              <li class="list-group-item text-success"><b>Covid 19 Protocol</b></li>
            </ul>

                        </div>
                        <div class="card-footer">
                            <button name="" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto">
                    <div class="card">
                        <img src=<?=$img_src[1]?> class="card-img-top" alt="1 Double Bed" height="100%">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Srikandi Hotels</b></h5>
            <p class="text-left">Outdoor/Indoor</p>
            <p class="card-text text-primary text-left"><b>$200/hours</b></p>
            <p class="text-left">2000 Capacity</p>
                            <div class="card-header ">
              <b>FACILITIES</b>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-success"><b>Bebas Parkir</b></li>
              <li class="list-group-item text-success" ><b>Full AC</b></li>
              <li class="list-group-item text-success"><b>Cleaning Services</b></li>
              <li class="list-group-item text-danger"><b>Covid 19 Protocol</b></li>
            </ul>

                        </div>
                        <div class="card-footer">
                            <button name="card2" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto">
                    <div class="card">
                        <img src=<?=$img_src[2]?> class="card-img-top" alt="2 Double Bed" height="100%">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Prambanan Hotels</b></h5>
            <p class="text-left">Outdoor/Indoor</p>
            <p class="card-text text-primary text-left"><b>$300/hours</b></p>
            <p class="text-left">3000 Capacity</p>
                            <div class="card-header">
                            <b>FACILITIES</b>
            </div>
            <ul class="list-group list-group-flush">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-danger"><b>Bebas Parkir</b></li>
              <li class="list-group-item text-danger"><b>Full AC</b></li>
              <li class="list-group-item text-danger"><b>Cleaning Services</b></li>
              <li class="list-group-item text-success"><b>Covid 19 Protocol</b></li>
            </ul>

                        </div>
                        <div class="card-footer">
                            <button name="card3" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">Hanafi_1202194102</div>
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>