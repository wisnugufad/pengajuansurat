<?php 
	require_once 'dompdf/lib/html5lib/Parser.php';
	require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
	require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
	require_once 'dompdf/src/Autoloader.php';
	Dompdf\Autoloader::register();
	use Dompdf\Dompdf;

	include 'fungsi/koneksi.php';
    session_start();
    if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    $nomor = addslashes($_GET['nomor']);
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
    $fa=strtotime($row['tanggal_surat']);

$html =
'<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="autdor" content="">
  <title>Status Pengajuan</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
   <div class="row">
      <div class="col-12">
          <!-- Area Chart Example-->
          <div class="col-lg-12">
			<div class="text-center">
				<img src="kop/'.$row['kop_surat'].'" height="150px">
			</div>
		<table>
			<tr>
				<td width="100px">Nomor </td>
				<td width="20px"> : </td>
				<td>'.$nomor.'</td>
			</tr>
			<tr>
				<td>Perihal </td>
				<td> : </td>
				<td>'.$row['perihal'].'</td>
			</tr>
			<tr>
				<td colspan="3"><br></td>
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
				<td colspan="3">PT. Angkasa Pura I (Persero) Cabang Bandara Intll SAMS</td>
			</tr>
			<tr>
				<td colspan="3">Sepingan - Balikpapan</td>
			</tr>
			<tr>
				<td colspan="3"><br></td>
			</tr>
			<tr>
				<td colspan="3">Dengan Hormat,</td>
			</tr>
			<tr>
				<td colspan="3">
					Berikut kami mengajukan '.$row['perihal'].' di jam'.$row['extend'].' UTC di Bandara Sultan Aji Muhamad Sulaiman Sepingan Balikpapan. Untuk <b>'.$row['arr_dep'].'</b> pada tanggal <b>'.date("d M Y",$fa).'</b> :
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<ul><li><b>'.$row['perihal'].' TANGGAL '.date("d M Y",$fa).'</b></li></ul>
				</td>
			</tr>
		</table>
		<font size="2">
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
				<td>'.$row['flight_number'].'</td>
				<td>'.$row['aircraft_reg'].'</td>
				<td>'.$row['route'].'</td>
				<td>'.$row['etd'].'</td>
				<td>'.$row['lta'].'</td>
				<td>'.$row['std'].'</td>
				<td>'.$row['sta'].'</td>
				<td>'.$row['keterangan'].'</td>
			</tr>
		</table>
		</font>
		<br>
		<table>
			<tr><td>Demikian pengajuan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan banyak terima kasih.</td></tr>
		</table>
		<br>
		<table width="100%">
			<tr>
				<td colspan="4" class="text-right">
					Balikpapan, '.date("d M Y",$fa).'
					<br>
				</td>
			</tr>
			<tr>
				<td class="text-center">PIC</td>
				<td width="25%"></td>
				<td width="25%"></td>
				<td class="text-center">'.$ttd['jabatan'].'</td>
			</tr>
			<tr>
				<td class="text-center"><img src="img/'.$ttd['ttd_karyawan'].'" width="200px"></td>
				<td></td>
				<td></td>
				<td class="text-center"><img src="img/'.$ttd['ttd_bandara'].'" width="200px"></td>
			</tr>
			<tr>
				<td class="text-center">'.$ttd['nama_karyawan'].'</td>
				<td width="25%"></td>
				<td width="25%"></td>
				<td class="text-center">'.$ttd['nama_bandara'].'</td>
			</tr>
		</table>
</div></div></div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
';

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4','portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('document.pdf');
 ?>