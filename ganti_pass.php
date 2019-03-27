<?php   

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
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
      echo navbar_atas("Wisnu");
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row margin-atas">
        <div class="col-lg-12">
        <div class="row">
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-lg-6">
        <br><br>
          <form class="form-group">
            <h5>Password Lama</h5>
            <input type="text" name="" class="form-control">
            <h5>Password Baru</h5>
            <input type="text" name="" class="form-control">
            <h5>Konfirmasi Password</h5>
            <input type="text" name="" class="form-control">
            <br>
            <input type="submit" name="" class="btn btn-primary" value="Confirm">
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
