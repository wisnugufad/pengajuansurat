<?php   
    include 'fungsi/koneksi.php'; 
    session_start();
    $nama = $_SESSION['nama'];
    $nik = $_SESSION['nik'];
    $status = $_SESSION['status'];
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ganti Password</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation-->
  <?php
      include 'fungsi/navigasi.php';
      echo navbar_atas($nama,$status);
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row margin-atas">
        <div class="col-lg-12">
        <div class="row">
        <?php if (isset($_POST['ganti'])) {
          if ($status == "karyawan") {
            $cek = "SELECT * FROM karyawan WHERE NIK='$nik'";
          }else{
            $cek = "SELECT * FROM bandara WHERE NIK='$nik'";
          }
      $res = mysqli_query($koneksi,$cek);
      $row = mysqli_fetch_array($res);
      //echo $row['password'];
      $pass1 = $_POST['pass1'];
      $pass2 = $_POST['pass2'];
      $pass3 = $_POST['pass3'];
      if ($pass2 != $pass3) {
        $message = "Password Tidak Sama";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }elseif ($pass1 != $row['password']) {
          $message = "Password Tidak Sama";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
          if ($status == "karyawan") {
            $cek1 = "UPDATE karyawan SET password='$pass2' WHERE NIK='$nik'";
          }else{
            $cek1 = "UPDATE bandara SET password='$pass2' WHERE NIK='$nik'";
          }
          $res1 = mysqli_query($koneksi,$cek1);
          $message = "Berhasil Update Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
    } ?>
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-lg-6">
        <br><br>
          <form class="form-group" action="ganti_pass.php" method="POST">
            <h5>Password Lama</h5>
            <input type="text" name="pass1" class="form-control" autocomplete="off">
            <h5>Password Baru</h5>
            <input type="text" name="pass2" class="form-control" autocomplete="off">
            <h5>Konfirmasi Password</h5>
            <input type="text" name="pass3" class="form-control" autocomplete="off">
            <br>
            <input type="submit" name="ganti" class="btn btn-primary" value="Confirm">
          </form>
        </div>
        </div>
      </div></div>
    </div>
    <!-- /.container-fluid-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
