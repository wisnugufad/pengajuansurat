<?php
	include 'fungsi/koneksi.php';
	date_default_timezone_set('Asia/Bangkok');
    session_start();
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    $nomor = $_GET['nomor'];
    $cek = "SELECT * FROM surat WHERE nomor_surat='$nomor'";
    $res = mysqli_query($koneksi,$cek);
    $row = mysqli_fetch_array($res);
    if ($row['tgl_dibaca']=="") {
    	$dibaca = date("Y-m-d H:i:s");
    	$upd = "UPDATE surat SET tgl_dibaca='$dibaca'";
    	$hasil = mysqli_query($koneksi,$upd);
    }
    $cek = "SELECT * FROM surat, karyawan WHERE nomor_surat='$nomor' AND surat.NIK=karyawan.NIK";
    $res = mysqli_query($koneksi,$cek);
    $row = mysqli_fetch_array($res);
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="autdor" content="">
  <title>Persetujuan</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for tdis template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for tdis template-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
       <div class="card mb-3">
        <div class="card-header">
          <h5><i class="fa fa-file-o"></i> APPROVE</h5></div>
        <div class="card-body">
          </i><h5>Nomor Surat Persetujuan</h5>
          <form class="form-grup" action="fungsi/approve.php" method="POST">
          <input type="text" name="nomor_bandara" class="form-control"><br>
          <input type="text" name="nomor_surat" value="<?php echo $row['nomor_surat']?>" hidden>
          <input class="btn btn-primary btn-block" type="submit" name="approve" value="APPROVE"></form>
        </div></div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-envelope"></i> Nomor Surat : <?php echo $nomor; ?></div>
        <div class="card-body">
          <div class="col-lg-12">
			<div class="text-center">
				<img src="kop/<?php echo $row['kop_surat'];?>" height="150px">
			</div>
			<table>
				<tr>
					<td width="100px">Nomor </td>
					<td width="20px"> : </td>
					<td><?php echo $row['nomor_surat'];?></td>
				</tr>
				<tr>
					<td>Perihal </td>
					<td> : </td>
					<td><?php echo $row['perihal'];?></td>
				</tr>
				<tr>
					<td colspan="3"><br><br></td>
				</tr>
				<tr>
					<td colspan="3">Kepada Yth:</td>
				</tr>
				<tr>
					<td colspan="3"><ol>
					<li>GENERAL MANAGER PT.Angkasa pura 1 (persero)</li>
					<li>GENERAL MANAGER LPPSPI</li>
					</ol></td>
				</tr>
				<tr>
					<td colspan="3">Airport Operation And Service Departement Head</td>
				</tr>
				<tr>
					<td colspan="3">PT. Angkasa Pura I (Persero) Cabang Bandara Intl'l SAMS</td>
				</tr>
				<tr>
					<td colspan="3">Sepingan - Balikpapan</td>
				</tr>
				<tr>
					<td colspan="3"><br><br></td>
				</tr>
				<tr>
					<td colspan="3">Dengan Hormat,</td>
				</tr>
				<tr>
					<td colspan="3">
						Berikut kami mengajukan <?php echo $row['perihal']." di jam ".$row['extend'];?> UTC di Bandara Sultan Aji Muhamad Sulaiman Sepingan Balikpapan. Untuk <b><?php echo $row['arr_dep'];?></b> pada tanggal <b><?php 
						$fa=strtotime($row['tanggal_surat']);
						echo date("d M Y",$fa);?></b> :
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<br><ul><li><b><?php echo $row['perihal']." TANGGAL ".date("d M Y",$fa);?></b></li></ul>
					</td>
				</tr>
			</table>
			<table border="1"  width="100%">
				<tr  class="text-center">
					<td rowspan="2">#</td>
					<td rowspan="2">Aircraft Identification/FLIGHT</td>
					<td rowspan="2">REG</td>
					<td rowspan="2">ROUTE</td>
					<td colspan="2">ETD/ATA</td>
					<td colspan="2">flight schedule</td>
					<td rowspan="2">REASON</td>
				</tr>
				<tr class="text-center">
					<td>ETD</td>
					<td>ATA</td>
					<td>STD (UTC)</td>
					<td>STA (UTC)</td>
				</tr>
				<tr class="text-center">
					<td> 1 </td>
					<td><?php echo $row['flight_number'];?></td>
					<td><?php echo $row['aircraft_reg'];?></td>
					<td><?php echo $row['route'];?></td>
					<td><?php echo $row['etd'];?></td>
					<td><?php echo $row['lta'];?></td>
					<td><?php echo $row['std'];?></td>
					<td><?php echo $row['sta'];?></td>
					<td><?php echo $row['keterangan'];?></td>
				</tr>
			</table>
			<br>
			<table>
				<tr><td>Demikian pengajuan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan banyak terima kasih.</td></tr>
			</table>
			<br>
			<table width="100%">
				<tr>
					<td width="25%"></td>
					<td width="25%"></td>
					<td width="25%"></td>
					<td class="text-center">
						<?php $time=strtotime($row['tanggal_surat']);?>
						Balikpapan, <?php echo date("d M Y",$time);?>
						<br>
						PIC Slot
						<br>
						<img src="img/<?php echo $row['ttd'];?>" width="200px">
						<br>
						<?php echo $row['nama'];?>
					</td>
				</tr>
			</table>
		</div>
        </div></div></div></div></div></div>
        </body>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
