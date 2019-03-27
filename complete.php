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
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation-->
  <?php
      include 'fungsi/navigasi.php';
      echo navbar_atas("Wisnu");
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row margin-atas">
        <div class="col-12">
          <h1>Complete Mail</h1>
          <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
          <form action="" method="" class="form-group">
            <table>
              <tr>
                <td><b>Tanggal Surat</b></td>
                <td>&nbsp;</td>
                <td><input type="date" name="" class="form-control"></td>
                <td>&nbsp;<b> To </b>&nbsp;</td>
                <td><input type="date" name="" class="form-control" value="<?php echo date('Y-m-d');?>"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="3"><input type="submit" name="" class="btn btn-primary" value="search"></td>
              </tr>
            </table>
          </form>
          <!--penampilan tabel-->
          <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>No Surat</th>
                  <th>From</th>
                  <th>Route</th>
                  <th>STD (LT)</th>
                  <th>ETD (LT)</th>
                  <th>STA (LT)</th>
                  <th>ETA (LT)</th>
                  <th>Keterangan</th>
                  <th>Status</th>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
