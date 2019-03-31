<?php
	include 'fungsi/koneksi.php';
    session_start();
    if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    $nomor = $_GET['nomor'];
    $cek = "SELECT * FROM approve, surat WHERE surat.nomor_surat=approve.nomor_surat";
    $res = mysqli_query($koneksi,$cek);
    $row = mysqli_fetch_array($res);
    //bagian ttd
    $sql1= "SELECT bandara.nama as nama_bandara,
    		bandara.ttd as ttd_bandara,
    		bandara.jabatan as jabatan,
    		karyawan.nama as nama_karyawan,
    		karyawan.ttd as ttd_karyawan FROM approve, surat, karyawan, bandara WHERE surat.nomor_surat=approve.nomor_surat AND approve.nik_bandara=bandara.nik_bandara AND surat.nik=karyawan.nik";
    $res1 = mysqli_query($koneksi,$sql1);
    $ttd = mysqli_fetch_array($res1);
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
          <i class="fa fa-envelope"></i> Nomor Surat : <?php echo $nomor; ?>&nbsp;
          <a href="cetak.php?nomor=<?php echo $nomor;?>">
          <button class="btn btn-primary"><i class="fa fa-print"></i> cetak</button></a>
        </div>
        <div class="card-body">
          <div class="col-lg-12">
<div class="text-center">
	<img src="kop/<?php echo $row['kop_surat'];?>" height="150px">
</div>
<table>
	<tr>
		<td width="100px">Nomor </td>
		<td width="20px"> : </td>
		<td><?php echo $nomor;?></td>
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
		<td colspan="4" class="text-right">
			<?php $time=strtotime($row['tanggal_surat']);?>
			Balikpapan, <?php echo date("d M Y",$time);?>
			<br>
		</td>
	</tr>
	<tr>
		<td class="text-center">PIC Slot</td>
		<td width="25%"></td>
		<td width="25%"></td>
		<td class="text-center"><?php echo $ttd['jabatan'];?></td>
	</tr>
	<tr>
		<td class="text-center"><img src="img/<?php echo $ttd['ttd_karyawan'];?>" width="200px"></td>
		<td></td>
		<td></td>
		<td class="text-center"><img src="img/<?php echo $ttd['ttd_bandara'];?>" width="200px"></td>
	</tr>
	<tr>
		<td class="text-center"><?php echo $ttd['nama_karyawan'];?></td>
		<td width="25%"></td>
		<td width="25%"></td>
		<td class="text-center"><?php echo $ttd['nama_bandara'];?></td>
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
