<?php
	include 'koneksi.php';
	$nama=$_GET['nama'];
	$dir="../kop/".$nama;
	if (file_exists($dir)) {
		unlink($dir);
		$sql="DELETE FROM `kop_surat` WHERE dir_kop='$nama'";
		$result=mysqli_query($koneksi,$sql);
		if($result){
        header("location: ../upload_kop.php");
		}
        
	}
	

		
		


 ?>