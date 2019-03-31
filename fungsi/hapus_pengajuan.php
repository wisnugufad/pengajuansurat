<?php 
	include 'koneksi.php';
	session_start();
    if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    $nomor=$_GET['nomor'];
    $sql="DELETE FROM surat WHERE nomor_surat='$nomor'";
    $res=mysqli_query($koneksi,$sql);
    header("location: ../home.php");
 ?>