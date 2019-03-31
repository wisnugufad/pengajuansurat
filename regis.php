<?php
	include 'fungsi/koneksi.php';
	if(isset($_POST['register'])){
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$pass = $_POST['pass'];
		$perusahaan = $_POST['perusahaan'];
		$jabatan = $_POST['jabatan'];
		$pihak = $_POST['pihak'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];
		// ambil data file
		$namaFile = $_FILES['ttd']['name'];
		$namaSementara = $_FILES['ttd']['tmp_name'];
		// tentukan lokasi file akan dipindahkan
		$dirUpload = "img/";
		// pindahkan file
		$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
		if ($terupload) {
			//rename nama file
			rename($dirUpload.$namaFile,$dirUpload.$nik.".jpg");
			$namafile=$nik.".jpg";
		}


		if ($pihak == 1) {
			$sql = "INSERT INTO `bandara`(`nik_bandara`, `password`, `nama`, `jabatan`, `perusahaan`, `email_per`, `alamat_per`, `no_telp`, `ttd`) VALUES ('$nik','$pass','$nama','$jabatan','$perusahaan','$email','$alamat','$telp','$namafile')";
			$result = mysqli_query($koneksi,$sql);
			if ($result) {
				header("location: index.php");
			}else{
				header("location: register.php");
			}
		}else{
			$sql = "INSERT INTO `karyawan`(`nik`, `password`, `nama`, `jabatan`, `perusahaan`, `email_per`, `alamat_per`, `no_telp`, `ttd`) VALUES ('$nik','$pass','$nama','$jabatan','$perusahaan','$email','$alamat','$telp','$namafile')";
			$result = mysqli_query($koneksi,$sql);
			if ($result) {
				header("location: index.php");
			}else{
				header("location: register.php");
			}
		}
	}

	








?>