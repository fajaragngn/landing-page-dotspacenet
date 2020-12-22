<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:client/'); }
   require_once("config/koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device=width,initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/box-input.css">
	</head>
<body>
<br><br><br>
<div class="box-login" >
    <div class="box" >
      <img src="public/img/astronaut.png">
    </div>
<div class="box-input">
	<h2>Login</h2><br>
    <form class="user-button" action="auth.php" method="post">
	  <div class="form-group">
	    <label>Blok rumah</label>
	    <input type="text" id="login" class="form-control" name="username" placeholder="blok rumah" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="text" class="form-control" name="password" placeholder="Password">
	  </div>
	  <input type="submit" value="login" class="btn btn-secondary">
	</form>

	<br>
    <p class="user-button" >Belum punya akun? <a href="register">Daftar</a></p>
    <p>
      <a href="index">Kembali ke awal</a>
     </p>
</div>
</div>
		  <!-- Template Main JS File -->
  <script src="public/js/main.js"></script>
	</body>
    </html>