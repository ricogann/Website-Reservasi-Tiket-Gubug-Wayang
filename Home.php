<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../login_gubugwayang/css/Home.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="../login_gubugwayang/img/LogoGubug.png" alt="" width="200" height="100" class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <nav class="navbar-brand ">
  
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                      Log in
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">
                      Daftar akun
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                     Reservasi
                    </a>
                </li>
            </ul>
        </nav>
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col">
            <img src="../login_gubugwayang/img/gubug wayang.jpg" width="540px" height="357px" alt="">
          </div>
          <div class="col ">
            <br>
            <h2>Selamat Datang di </h2>
            <h1>Museum Gubug Wayang</h1>
            <br><br>
            <p>Didirikan oleh Yensen Project Indonesia sebagai wujud rasa peduli terhadap seni dan budaya Indonesia. Koleksi yang ada meliputi wayang dari berbagai daerah di Indonesia, pusaka asli Indonesia, alat musik tradisional, mainan anak–anak, topeng dan masih bahyak lagi. <a href="#">Selengkapnya...</a></p>
          </div>
        </div>

        <div class="container">
            <div class="row">
              <div class="col">
                
              </div>
              <div class="col-6">
                Koleksi
              </div>
              <div class="col">
               
              </div>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../login_gubugwayang/img/unyil.jpg" width="260" height="250" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Boneka Si Unyil</h5>
                        <p><a href="#">Baca</a></p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../login_gubugwayang/img/batik.jpg" width="660" height="250" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Batik Nusantara</h5>
                        <p><a href="#">Baca</a></p>
                      </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" > </script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" > </script>
<script src = "bs4.pop.js" > </script>
<script>
$('#mydialog').on('click',function(e){
e.preventDefault();
// basic dialog
bs4pop.dialog({
id : 'modal' ,
title : 'Modal Dialog' ,
content : ' This is a basic modal dialog',
width : 600 ,
height : '',
target : 'body' ,
closeßtn : true ,
hideRemove : true ,
escape : true ,
autoFocus : true ,
show : true ,
backdrop : true ,
drag : true ,
btns : [
    {
        Label : 'cancel',
        className : "btn-secondary",
        onClick(cb){}
    }
]
})
})
</script>
</body>
</html>