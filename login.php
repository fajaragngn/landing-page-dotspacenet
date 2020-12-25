<?php
   session_start();
   if(isset($_SESSION['blok'])) {
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
		<link href="favicon.ico" rel="icon">
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
	    <label>Email</label>
	    <input type="text" id="login_client" class="form-control" name="blok" placeholder="username" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" name="password" placeholder="Password">
	  </div>
	  <button type="submit" name="login_client" class="btn btn-secondary">Login</button>
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