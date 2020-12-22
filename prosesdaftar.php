<?php
   require_once("config/koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM client WHERE username = '$username' ";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>email Sudah Terdaftar! <a href='register'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='register'>Back</a>";
     } else {
       $data = "INSERT INTO client VALUES (NULL, '$username', '$password')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>