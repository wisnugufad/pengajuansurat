<?php
	
	include 'koneksi.php';
	//$koneksi = mysqli_connect("localhost","root","","1151400074");
	//passing data
	$cek=0;
	$uname=$_REQUEST['nik'];
	$pwd=$_REQUEST['pass'];
	//cek apakah data ada di admin
	$sql="SELECT * FROM karyawan WHERE NIK='$uname' AND password='$pwd'";
	$result=mysqli_query($koneksi,$sql);
	while($row=mysqli_fetch_array($result)){
		$cek = 1;
	}

	$sql1="SELECT * FROM bandara WHERE NIK='$uname' AND password='$pwd'";
	$result1=mysqli_query($koneksi,$sql1);
	while($row=mysqli_fetch_array($result1)){
		$cek = 1;
	}

	if($cek==1)
		{
		session_start();  // ada id khusus
		
		$_SESSION['nik']=$uname;
		$_SESSION['pass']=$row['password'];
		$_SESSION['nama']=$row['nama'];
		header("location: ../home.php");
		}else{
			header("location: ../index.php");
		}

?>