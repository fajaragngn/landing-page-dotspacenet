<?php
   session_start();
   require_once("config/koneksi.php");
   $blok = $_POST['blok'];
   $pass = $_POST['password'];
   $username= $_POST['username'];
   $_SESSION["blok"] = $data["blok"];
   $_SESSION["username"] = $data["username"];
   $sql = "SELECT * FROM client WHERE blok = '$blok'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo '<div class="alert alert-danger">*email belum terdaftar <a href="login" >Kembali</a> </div>'; 
   } else {
     if($pass <> $hasil['password']) {
       echo '<div class="alert alert-danger">*Password Salah <a href="login" >Kembali</a></div>'; 
     } else {
       $_SESSION['blok'] = $hasil['blok'];
       header('location:client/');
       $_SESSION['username'] = $hasil['username'];
       header('location:client/');
     }
   }
?>