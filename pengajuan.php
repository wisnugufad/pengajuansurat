<?php 	
    include 'fungsi/koneksi.php';
    session_start();
    if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    $nik=$_SESSION['nik'];
    //include data karyawan
    $sql="SELECT * FROM `karyawan` WHERE NIK='$nik'";
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
      echo navbar_atas($row['nama']);
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row margin-atas">
        <div class="col-12">
          <h1>Pengajuan Surat</h1>
          <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
          <form action="fungsi/ajuin.php" method="POST" class="form-group">
          	<table>
          		<tr>
          			<td><b>Tanggal Surat</b></td>
          			<td>&nbsp;</td>
          			<td width="70%"><input type="date" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>Nomor Surat Perusahaan</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>Perihal</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>Flight Number</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>Aircraft Reg</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>Route</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>STD (LT)</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>ETD (LT)</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>STA (LT)</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>ETA (LT)</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          		<tr>
          			<td><b>Keterangan</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="" class="form-control"></td>
          		</tr>
          	</table>
          </form>
        </div>
      </div>
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
