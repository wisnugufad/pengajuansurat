<?php 
	include 'fungsi/koneksi.php';
	date_default_timezone_set('Asia/Bangkok');
    session_start();
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    $sql="SELECT karyawan.ttd as ttd_karyawan,
    		karyawan.nama as nama_karyawan,
    		bandara.ttd as ttd_bandara,
    		bandara.nama as nama_bandara,
    		surat.nomor_surat as nomor_surat,
    		surat.tanggal_surat as tanggal,
    		surat.sta as sta,
    		surat.std as std,
    		surat.perihal as perihal,
    		approve.tgl_approve as tgl_approve
    		 FROM surat, approve, bandara,karyawan WHERE surat.nomor_surat=approve.nomor_surat AND surat.NIK=karyawan.NIK AND bandara.NIK=approve.nik_bandara";
    $res=mysqli_query($koneksi,$sql);
    $row=mysqli_fetch_array($res);

    $cek = "SELECT * FROM surat WHERE nomor_surat='$nomor'";
    $res2 = mysqli_query($koneksi,$cek);
    $row2 = mysqli_fetch_array($res2);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Surat Masuk</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="col-lg-12">
<h6><b>READ ITEM</b></h6>
<br>
Dengan hormat,<br>
Telah diajukan Permohonan Slot dari PIC Slot dengan nomor : <b><?php echo $row['nomor_surat'];?></b><br>
Diajukan Slot Time Arrival <?php echo $row['sta'];?>, Disetujui Slot Time: <?php echo $row['std'];?><br>
Note:<br><br>
Berikut surat pengajuan terlampir : <br><br>
<?php echo $row['tanggal'];?>,<br>
an. GENERAL MANAGER <br>
Airport Operation And Service Department Head <br>
PT. Angkasa Pura I (Persero) Cabang Bandara Int'l SAMS <br>
Sepingan - Balikpapan <br>
<img src="img/<?php echo $row['ttd_karyawan'];?>" width="200px"><br>
<?php echo $row['nama_karyawan'];?>
<hr>
<div class="text-center">
	<img src="img/sriwijaya.jpg" height="150px">
</div>
<table>
	<tr>
		<td>Nomor </td>
		<td> : </td>
		<td><?php echo $row['ttd_bandara'];?></td>
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
			Balikpapan, 20 Maret 2019
			<br>
			PIC Slot
			<br>
			<img src="img/<?php echo $row['ttd_bandara'];?>" width="200px">
			<br>
			<?php echo $row['nama_bandara'];?>
		</td>
	</tr>
</table>
</div>
</body>
</html>