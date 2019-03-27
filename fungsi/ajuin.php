<?php 
	include 'koneksi.php';
	session_start();
	if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
	$nik=$_SESSION['nik'];
 ?>