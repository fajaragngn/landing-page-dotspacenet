<?php
   session_start();
   if(isset($_SESSION['blok'])) {
   header('location:client/'); }
   require_once("config/koneksi.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>DotSpacenet | @dotspacenet</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">dotSpacenet.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link btn btn-secondary text-white tombol" href="https://wa.me/6289637524919?" target="_blank">Pasang sekarang</a><br>
            <a class="nav-item nav-link btn btn-secondary text-white tombol" href="login">log in client</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"> Akses internet <span>Stabil</span>, <br>dan <span>Unlimited!</span> </h1>

      </div>
    </div>
    <!-- akhir Jumbotron -->

    <!-- container -->
    <div class="container">

      
    <!-- container -->
    <div class="container">
      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-sm">
              <img src="public/img/employee.png" alt="Employee" class="img-fluid float-left">
              <h4>24 Hours</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg">
              <img src="public/img/rocket.png" width="110px" alt="HiRes" class="img-fluid float-left">
              <h4>Up to 2mbps</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg">
              <img src="public/img/security.png" alt="Security" class="img-fluid float-left">
              <h4>Security</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir info panel -->

      <!-- Testimonial -->
      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"Bekerja dengan suasana hati yang lebih asik, menyenangkan
              dan mempelajari hal baru setiap harinya."</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <img src="public/img/img11.png" alt="Testimonial 1">
            <img src="public/img/img22.png" alt="Testimonial 2" class="img-main">
            <img src="public/img/img33.png" alt="Testimonial 3">
          </div>
        </div>
 
        <div class="row justify-content-center info-text">
          <div class="col-lg text-center">
            <p>Technical Maintenance</p>
          </div>
        </div>
      </section>
      <!-- akhir Testimonial -->
    </div>
    <!-- akhir container -->


<div class="container" style="width: 400px" >
<a class="nav-item nav-link btn btn-primary text-white tombol" href="https://wa.me/6289637524919?" target="_blank">Pasang sekarang</a><br>
</div>
<div class="row justify-content-center info-text">
  <div class="col-lg text-center">
    <p>*Khusus Puri Nirwana Residence, Cikarang</p>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>