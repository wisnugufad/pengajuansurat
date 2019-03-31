<?php 
	include 'koneksi.php';
	session_start();
    if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
    $nomor=$_GET['nomor'];
    $cek = "SELECT * FROM approve WHERE surat_bandara='$nomor'";
    $hasil = mysqli_query($koneksi,$cek);
    $row=mysqli_fetch_array($hasil);
    $nomor_surat=$row['nomor_surat'];
    $sql1="DELETE FROM surat WHERE nomor_surat='$nomor_surat'";
    $res1=mysqli_query($koneksi,$sql1);

    $sql="DELETE FROM approve WHERE surat_bandara='$nomor'";
    $res=mysqli_query($koneksi,$sql);
    header("location: ../complete.php");
 ?>