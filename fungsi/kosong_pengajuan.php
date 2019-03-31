<?php 
	include 'koneksi.php';
	session_start();
    if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    $nik = $_SESSION['nik'];
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];

    $sql="DELETE FROM surat WHERE nik='$nik' AND status='PENDING'";
    $res=mysqli_query($koneksi,$sql);
    header("location: ../home.php");
 ?>