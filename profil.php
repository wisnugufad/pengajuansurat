<?php   
    include 'fungsi/koneksi.php';
    session_start();
    if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    $nik=$_SESSION['nik'];
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    //include data karyawan
    if ($status=="karyawan") {
      $sql="SELECT * FROM `karyawan` WHERE nik='$nik'";
    }else{
      $sql="SELECT * FROM bandara WHERE nik_bandara='$nik'";
    }
    
    $result=mysqli_query($koneksi,$sql);
    $row=mysqli_fetch_array($result);

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Profil</title>
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
        <div class="col-12">
          <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-address-card"></i> Data Stackholder</div>
        <div class="card-body">
          <h5>Nama Pimpinan / Penanggung Jawab</h5>
          <input type="text" name="" class="form-control" value="<?php echo $row['nama']?>" disabled="true">
          <h5>Jabatan Pimpinan / Penanggung Jawab</h5>
          <input type="text" name="" class="form-control" disabled="true" value="<?php echo $row['jabatan']?>">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-address-book"></i> Data PIC</div>
            <div class="card-body">
              <h5>Perusahaan</h5>
          <input type="text" name="" class="form-control" disabled="true" value="<?php echo $row['perusahaan']?>">
          <h5>Email Perusahaan</h5>
          <input type="text" name="" class="form-control" disabled="true" value="<?php echo $row['email_per']?>">
          <h5>Alamat Perusahaan</h5>
          <input type="text" name="" class="form-control" disabled="true" value="<?php echo $row['alamat_per']?>">
          <h5>No. Telp</h5>
          <input type="text" name="" class="form-control"disabled="true" value="<?php echo $row['no_telp']?>">
            </div>
          </div>
        </div>
        <!-- /.container-fluid-->
    <div class="col-lg-5">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-file-image-o"></i> Data Surat</div>
            <div class="card-body">
              <h5>TTD Pimpinan / Penanggung Jawab</h5>
          <img src="img/<?php echo $row['ttd']?>" height="100px">
            </div>
          </div>
    </div>
      </div>
    </div>
    
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
