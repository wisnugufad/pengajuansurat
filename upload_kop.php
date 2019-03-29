<?php
    include 'fungsi/koneksi.php';
    session_start();
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];



    if (isset($_POST['upload'])) {
    // ambil data file
    $nama=$_POST['nama_kop'];
    $namaFile = $_FILES['kop']['name'];
    $namaSementara = $_FILES['kop']['tmp_name'];
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "kop/";
    // pindahkan file
    $sql="INSERT INTO `kop_surat`(`nama_kop`) VALUES ('$nama')";
    $result=mysqli_query($koneksi,$sql);
    if ($result) {
      $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
      if ($terupload) {
        //rename nama file
        rename($dirUpload.$namaFile,$dirUpload.$nama.".jpg");
        $namafile=$nama.".jpg";
        $sql="UPDATE `kop_surat` SET `dir_kop`='$namafile' WHERE nama_kop='$nama'";
        $result=mysqli_query($koneksi,$sql);
        $message = "kop sukses terupload";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }else{
        $message = "Gagal Upload Kop";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
  }


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Upload Kop</title>
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
          <i class="fa fa-area-chart"></i> Upload Kop Baru</div>
        <div class="card-body">
        <form action="upload_kop.php" method="POST" enctype="multipart/form-data">
          <h5>Input File</h5>
          <input type="file" name="kop" class="form-control">
          <h5>Nama kop Surat</h5>
          <input type="text" name="nama_kop" class="form-control">
          <br>
          <input type="submit" class="btn btn-block btn-primary" name="upload"></form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Data Kop Surat</div>
      <div class="card-body">

              <?php 
                $sql1="SELECT `dir_kop`, `nama_kop` FROM `kop_surat";
                $result1=mysqli_query($koneksi,$sql1);
                while ($row=mysqli_fetch_array($result1)) {
               ?>
              <div class="col-md-3 text-center">
                <img src="kop/<?php echo $row['dir_kop'];?>" width="300px">
                <br>
                <h5><?php echo $row['nama_kop'];?>
                <a href="fungsi/kop.php?nama=<?php echo $row['dir_kop']?>"><span class="fa fa-fw fa-trash"></span></a></h5>
              </div>
              <?php 
                }
               ?>
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
