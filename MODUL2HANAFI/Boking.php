<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESD VENUE BOOKING</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<style>

nav{background-color: lightblue;
}
.container-fluid{ padding: 100px 0 10px 0; color: black;
}
.image-preview{
    margin-top: 30px;
    height: 250px;
    width: 350px;
}    
</style>    

    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Booking <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


    <?php
        $method_selected = '';
        $image_selected = '';
        $standard_bk = isset($_POST['card1']);
        $superior_bk = isset($_POST['card2']);
        $luxury_bk = isset($_POST['card3']);
        $img_src = [
            "1.jpg",
            "2.jpg",
            "3.jpg"
        ];

        if ($standard_bk) {
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="Borobudur Hotels">Borobudur Hotels</option>
                <input type="hidden" name="roomtype" value="Borobudur Hotels">
                </select>';
            $image_selected = $img_src[0];
        } else if ($superior_bk){
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="Srikandi Hotels">Srikandi Hotels</option>
                <input type="hidden" name="roomtype" value="Srikandi Hotels">
                </select>';
            $image_selected = $img_src[1];
        }else if ($luxury_bk){
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="Prambanan Hotels">Prambanan Hotels</option>
                <input type="hidden" name="roomtype" value="Prambanan Hotels">
                </select>';
            $image_selected = $img_src[2];

        }else {
            $method_selected = '
                <select class="custom-select" name="roomtype">
                <option value="Borobudur Hotels">Borobudur Hotels</option>
                <option value="Srikandi Hotels">Srikandi Hotels</option>
                <option value="Prambanan Hotels">Prambanan Hotels</option>
                </select>';
            $image_selected = $img_src[0];
        }
    ?>


    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
        <div class="container bg-dark">
        <p class="text-light text-center">Find your best deal for your event, here! <br></p>
        </div>

                    <div class="col-md-4">
                <img src=<?=$image_selected?> alt="Preview Bedroom" class="image-preview">
            </div>

 
            <div class="col-md-auto">
                <form action="myboking.php" method="post">
                    <div class="form-group">
                        Name
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        Event Date
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="form-group">
                        Start Time 
                        <input type="time" class="form-control" name="starttime">
                    </div>
                    <div class="form-group">
                        Duration(hours)
                        <input type="number" class="form-control" name="duration" aria-describedby="dur_info" value=0>
                    </div>
                    <div class="form-group">
                        Building Type
                        <?=$method_selected?>
                    </div>
                    <div class="form-group">
                        Phone Number
                        <input type="number" class="form-control" name="nohp">
                        <br>
                    <div class="form-group">
                        Add Service(s)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="Room Services"
                                id="service_check1">
                            Catering / $700
                            <br/>
                            <input class="form-check-input" type="checkbox" name="service[]" value="Breakfast"
                                id="service_check2">
                            Decoration / $450
                            <br/>
                            <input class="form-check-input" type="checkbox" name="service[]" value="Room Services"
                                id="service_check1">
                            Sound System / $250
                            <br/>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Book"></input>
                    </div>
                </form>
            </div>

        </div>
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