<?php 
	include 'koneksi.php';
	date_default_timezone_set('Asia/Bangkok');
    session_start();
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    $tgl = date("Y-m-d H:i:s");

    if (isset($_POST['approve'])) {
    	$surat_bandara=$_POST['nomor_bandara'];
    	$nomor_surat=$_POST['nomor_surat'];
    	$nik_bandara=$_SESSION['nik'];

    	$sql="INSERT INTO `approve`(`surat_bandara`, `nomor_surat`, `nik_bandara`, tgl_approve) VALUES ('$surat_bandara','$nomor_surat','$nik_bandara','$tgl')";
    	$res=mysqli_query($koneksi,$sql);
        $sql1="UPDATE surat SET status='APPROVE'";
        $res1=mysqli_query($koneksi,$sql1);
    	if ($res) {
    		header("location: ../complete.php");
    	}
    }

 ?>