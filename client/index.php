<?php
session_start();
if(!isset($_SESSION['blok'])) {
   header('location:../index'); 
} else { 
   $blok = $_SESSION['blok'];
   $username = $_SESSION['username']; 
}
if(!isset($_SESSION['username'])) {
   header('location:../index'); 
} else { 
   $blok = $_SESSION['blok'];
   $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html>

<?php
$pages_dir = '../tempelate/';
    if(!empty($_GET['p'])){
      $pages = scandir($pages_dir, 0);
      unset($pages[0], $pages[1]);
 
      $p = $_GET['p'];
      if(in_array($p.'.php', $pages)){
        include($pages_dir.'/'.$p.'.php');
      } else {
        echo 'Halaman tidak ditemukan! :(';
      }
    } else {
      include($pages_dir.'/header.php');
    }
?>
<body>



<a href="../logout">logout</a>
<center>
<h2>Halo!👋 <?php echo "$blok"?></h2>
</center>
<br>
    <div id="explore" style="margin-top: -50px" >
      <div class="columns">
        <div class="column is-two-thirds is-stick-left v-group">
          <div style="margin-left: 15px" >

          <div class="line" ></div><br>
          </div>
          <br>

            <div class="cards">
                <h3> Project </h3>
                <div class="subject">

            <div class="container" style="margin: 5% auto" >
              <?php
              $sql = "SELECT * FROM client";
              $query = mysqli_query($conn, $sql);
              foreach($query as $row){
              ?>
            <div class="cards">
                <div class="subject">
                  No Tiket : <?php echo $row['jan'] ?>
                  <p><b><?php echo $row['feb'] ?></b></p>
                  <small><?php echo $row['mar'] ?></small>

                </div>
            </div>
<br>

  <?php
  }
  ?>
 </div>
                </div>
            </div><br>
            <div class="cards">
                <div style="display: flex; justify-content: space-between;" >
                  <div>
                    <h3>Data Client</h3>
                  </div>
                  <div>
                    <h3><a href="../tambah-client">Tambah Client</a> / <a href="cetak" target="_blank">Cetak</a></h3>  
                  </div>
                </div>

                  <table border="1px" class="table table-bordered table-striped">
                  <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">NAMA</th>
                    <th rowspan="2">BLOK</th>
                    <th colspan="12" >2021</th>
                  </tr>
                  <tr>
                    <td>jan</td>
                    <td>feb</td>
                    <td>mar</td>
                    <td>apr</td>
                    <td>mei</td>
                    <td>jun</td>
                    <td>jul</td>
                    <td>agu</td>
                    <td>sep</td>
                    <td>okt</td>
                    <td>nov</td>
                    <td>des</td>
                  </tr>

                  <?php
                    $sql2 = "SELECT * FROM client WHERE username='$username'";
                    $query = mysqli_query($conn, $sql2);
                    $row = mysqli_fetch_array($query);
                    $id = $_GET["id"];
                    ?>
                   <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['blok'] ?></td>
                    <td><?php echo $row['jan'] ?></td>
                    <td><?php echo $row['feb'] ?></td>
                    <td><?php echo $row['mar'] ?></td>
                    <td><?php echo $row['apr'] ?></td>
                    <td><?php echo $row['mei'] ?></td>
                    <td><?php echo $row['jun'] ?></td>
                    <td><?php echo $row['jul'] ?></td>
                    <td><?php echo $row['agu'] ?></td>
                    <td><?php echo $row['sep'] ?></td>
                    <td><?php echo $row['okt'] ?></td>
                    <td><?php echo $row['nov'] ?></td>
                    <td><?php echo $row['des'] ?></td>
                   </tr>
                 </table>
            </div><br>

            
          </div><br>

        <div class="column v-group is-center">
          <div style="margin-left: 15px" >

          <div class="line" ></div><br>
          </div>
            
            <div class="cards">
                <h3> Pengumuman</h3>
                <div class="subject"></div>
            </div>

            
        </div>
    </div>
</div>


      <!-- Template Main JS File -->
  <script src="../../public/js/main.js"></script>
  </body>
    </html>