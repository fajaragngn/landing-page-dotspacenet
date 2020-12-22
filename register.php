<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index'); }
?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>daftar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<body>

  <header>
  <div>
    <a href="/">/@fajar.agngn</a>
  </div>
  <div id=theme>
      <div onclick=setDarkMode(true) id=darkBtn>
          <a>dark/</a>
        </div>
      <div onclick=setDarkMode(false) id=lightBtn class=is-hidden>
          <a>/light</a>
      </div>
    </div>
</header><br>

<h1>Daftar</h1>

<!-- Login Form -->
    <form class="user-button" action="prosesdaftar.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="username"><br><br>
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <br><br>
      <input type="submit" class="fadeIn fourth" value="Daftar">
    </form>
<p class="user-button" >Sudah punya akun? <a href="login">Masuk</a></p>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
