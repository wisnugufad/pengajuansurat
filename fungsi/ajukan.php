<?php 
	include 'koneksi.php';
	date_default_timezone_set('Asia/Bangkok');
	session_start();
	if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];

    if (isset($_POST['ajukan'])) {
        $nik=$_SESSION['nik'];
    	$nomor=addslashes($_POST['nomor']);
    	$tgl=$_POST['tgl'];
    	$kop=$_POST['kop'];
    	$perihal=addslashes($_POST['perihal']);
    	$flight=addslashes($_POST['flight']);
    	$aircraft=addslashes($_POST['aircraft']);
    	$route=addslashes($_POST['route']);
    	$std=addslashes($_POST['std']);
    	$etd=addslashes($_POST['etd']);
    	$sta=addslashes($_POST['sta']);
    	$eta=addslashes($_POST['eta']);
        $waktu=addslashes($_POST['time']);
        $arr_dep=addslashes($_POST['arr_dep']);
    	$keterangan=addslashes($_POST['keterangan']);
    	$kirim = date("Y-m-d H:i:s");


    	
    	$sql="INSERT INTO `surat`(`nomor_surat`, `nik`, kop_surat,`tanggal_surat`, `perihal`, arr_dep,`extend`,`flight_number`, `aircraft_reg`,`route` , `std`, `etd`, `sta`, `lta`, `keterangan`, `tgl_kirim`, `tgl_dibaca`,`status`) VALUES ('$nomor','$nik','$kop','$tgl','$perihal','$arr_dep','$waktu','$flight','$aircraft','$route','$std','$etd','$sta','$eta','$keterangan','$kirim','','PENDING')";
    	$result=mysqli_query($koneksi,$sql);
    	if ($result) {
    		header("location: ../home.php");
    		$message = "Pengajuan Sukses";
    		echo "<script type='text/javascript'>alert('$message');</script>";
    	}else{
            header("location: ../pengajuan.php");
            $message = "Pengajuan Gagal";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
 ?>