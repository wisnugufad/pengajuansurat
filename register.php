<?php   

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register an Account</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-regis">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">

        <form action="regis.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">

            <div class="col-md-12">
                <label for="exampleInputName">NIK</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter NIK" name="nik" required autocomplete="off">
              </div>

              <div class="col-md-12">
                <label for="exampleInputName">Nama</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="nama" required autocomplete="off">
              </div>

              <div class="col-md-12">
                <label for="exampleConfirmPassword">Password</label>
                <input class="form-control" type="password" placeholder="password" name="pass" required>
              </div>

              <div class="col-md-12">
                <label for="exampleInputName">perusahaan</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Nama Perusahaan" name="perusahaan" required autocomplete="off">
              </div>

              <div class="col-md-12">
                <label for="exampleInputName">Jabatan Pimpinan/Penanggung Jawab</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Jabatan" name="jabatan" autocomplete="off">
              </div>

              <div class="col-md-6">
                <label for="exampleInputLastName">Bagian/Sebagai</label>
                <select name="pihak" class="form-control">
                  <option value="1">Pihak Bandara</option>
                  <option value="2">Pihak Airline</option>
                </select>
              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email Perusahaan</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">No Telp</label>
            <input class="form-control" type="text" placeholder="08123456789" name="telp" required autocomplete="off"> 
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Alamat Perusahaan</label>
                <textarea class="form-control" rows="3" name="alamat" required autocomplete="off"></textarea>
              </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Tanda Tangan</label>
            <input class="form-control" type="file" name="ttd">
          </div>

            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="register">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
