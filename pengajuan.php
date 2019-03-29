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
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pengajuan Surat</title>
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
          <h1>Pengajuan Surat</h1>
          <hr>
          <form action="fungsi/ajukan.php" method="POST" class="form-group">
          	<table>
          		<tr>
          			<td><b>Nomor Surat Perusahaan</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="nomor" class="form-control" autocomplete="off"></td>
          		</tr>
              <tr>
                <td><b>Tanggal Surat</b></td>
                <td>&nbsp;</td>
                <td width="70%"><input type="date" name="tgl" class="form-control" autocomplete="off"></td>
              </tr>
              <tr>
                <td><b>Kop Surat</b></td>
                <td>&nbsp;</td>
                <td>
                  <select name="kop" class="form-control">
                    <?php 
                $sql_kop="SELECT `dir_kop`, `nama_kop` FROM `kop_surat";
                $result_kop=mysqli_query($koneksi,$sql_kop);
                while ($row=mysqli_fetch_array($result_kop)) {
               ?>
                    <option value="<?php echo $row['dir_kop']; ?>"><?php echo $row['nama_kop']; ?></option>
               <?php 
                }
               ?>
                  </select>
                </td>
              </tr>
          		<tr>
          			<td><b>Perihal</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="perihal" class="form-control" autocomplete="off"></td>
          		</tr>
          		<tr>
          			<td><b>Flight Number</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="flight" class="form-control" autocomplete="off"></td>
          		</tr>
          		<tr>
          			<td><b>Aircraft Reg</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="aircraft" class="form-control" autocomplete="off"></td>
          		</tr>
          		<tr>
          			<td><b>Route</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="route" class="form-control" autocomplete="off"></td>
          		</tr>
          		<tr>
          			<td><b>STD (LT)</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="std" class="form-control" autocomplete="off"></td>
          		</tr>
          		<tr>
          			<td><b>ETD (LT)</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="etd" class="form-control" autocomplete="off"></td>
          		</tr>
          		<tr>
          			<td><b>STA (LT)</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="sta" class="form-control" autocomplete="off"></td>
          		</tr>
          		<tr>
          			<td><b>ETA (LT)</b></td>
          			<td>&nbsp;</td>
          			<td><input type="text" name="eta" class="form-control" autocomplete="off"></td>
          		</tr>
          		<tr>
          			<td><b>Keterangan</b></td>
          			<td>&nbsp;</td>
          			<td><textarea class="form-control" name="keterangan" rows="2" autocomplete="off"></textarea></td>
          		</tr>
              <tr>
                <td colspan="3"><input type="submit" name="ajukan" class="btn btn-primary btn-block" value="AJUKAN"></td>
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
