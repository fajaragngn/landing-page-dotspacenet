<?php
   session_start();
   require_once("config/koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo '<div class="alert alert-danger">*email belum terdaftar <a href="login" >Kembali</a> </div>'; 
   } else {
     if($password <> $hasil['password']) {
       echo '<div class="alert alert-danger">*Password Salah <a href="login" >Kembali</a></div>'; 
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:client/');
     }
   }

?>