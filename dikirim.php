<?php
	include 'fungsi/koneksi.php';
    session_start();
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    $nomor = $_GET['nomor'];
    $cek = "SELECT * FROM surat WHERE nomor_surat='$nomor'";
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
  <title>Status Pengajuan</title>
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
          <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-envelope"></i> Nomor Surat : <?php echo $nomor; ?></div>
        <div class="card-body">
          <div class="col-lg-12">
<div class="text-center">
	<img src="img/<?php echo $row['kop_surat'];?>" height="150px">
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
		<td colspan="3">GENERAL MANAGER</td>
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
		<td>Dengan Hormat,</td>
	</tr>
	<tr>
		<td colspan="3">
			Berikut Kami Sampaikan permohonan slot time untuk keperluan charter flight dengan detail:
		</td>
	</tr>
</table>
<br>
<table border="1"  width="100%">
	<tr  class="text-center">
		<td rowspan="2">#</td>
		<td rowspan="2">Aircraft Identification</td>
		<td rowspan="2">Areg</td>
		<td rowspan="2">Aircraft type</td>
		<td colspan="2">route</td>
		<td colspan="2">flight schedule</td>
		<td rowspan="2">DOF/DOS</td>
	</tr>
	<tr class="text-center">
		
		<td>ETD</td>
		<td>LTA</td>
		<td>STD (UTC)</td>
		<td>STA (UTC)</td>
	</tr>
	<tr class="text-center">
		<td> Request </td>
		<td><?php echo $row['flight_number'];?></td>
		<td><?php echo $row['aircraft_reg'];?></td>
		<td> ? </td>
		<td><?php echo $row['etd'];?></td>
		<td><?php echo $row['lta'];?></td>
		<td><?php echo $row['std'];?></td>
		<td><?php echo $row['sta'];?></td>
		<td> ? <br>
			<span >?</span> 
		</td>
	</tr>
	<tr>
		<td> Remark </td>
		<td colspan="8"> CHARTER FLIGHT, 30 Seat ke bawah /< 5700kg </td>
	</tr>
</table>
<br>
<table>
<tr>
	<td>Untuk pertimbangan ketersediaan slot, kami siap untuk diberikan waktu toleransi penggunaan slot time yaitu 15 menit sebelum atau sesudah dari slot yang diberikan.</td>
</tr>
<tr><td>Demikian pengajuan ini kami sampaikan, atas perhatian dan persetujuannya kami ucapkan terima kasih.</td></tr>
</table>
<br>
<table width="100%">
	<tr>
		<td width="25%"></td>
		<td width="25%"></td>
		<td width="25%"></td>
		<td class="text-center">
			<?php $time=strtotime($row['tanggal_surat']);?>
			Balikpapan, <?php echo date("d-m-Y",$time);?>
			<br>
			PIC Slot
			<br>
			<img src="img/lion_air.jpg" width="200px">
			<br>
			Anang Julianto
		</td>
	</tr>
</table>
</div>
        </div>
      </div>
    </div>
    
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
