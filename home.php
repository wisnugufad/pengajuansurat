<?php
    include 'fungsi/koneksi.php'; 
    session_start();
    if (!isset($_SESSION['nik'])) {
      header("location: fungsi/logout.php");
    }
    $nik = $_SESSION['nik'];
    $nama = $_SESSION['nama'];
    $status = $_SESSION['status'];
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="autdor" content="">
  <title>Status Pengajuan</title>
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
      echo navbar_atas($nama,$status);
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row margin-atas">
        <div class="col-12">
        <h1>List Pengajuan</h1>
        <hr>
          <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Pengajuan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">Nomor Surat</th>
                  <th rowspan="2">Tanggal</th>
                  <th rowspan="2">Perihal</th>
                  <th rowspan="2">Route</th>
                  <th colspan="2" class="text-center">Status</th>
                  <th>
                    <a href="fungsi/kosong_pengajuan.php?nomor=<?php echo $nik; ?>"><button class="btn btn-danger"><span class="fa fa-trash"> Kosongkan</h6></span></button></a>
                  </th>
                </tr>
                <tr>
                  <th>Dikirim</th>
                  <th>Diterima</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $no=0;
                    $tabel="SELECT * FROM surat, karyawan WHERE surat.status='PENDING' AND surat.nik='$nik'";
                    $res=mysqli_query($koneksi,$tabel);
                    while ($row=mysqli_fetch_array($res)) {
                      $time=strtotime($row['tanggal_surat']);
                ?><tr>
                    <td><?php echo ++$no; ?></td>
                    <td><a href="dikirim.php?nomor=<?php echo $row['nomor_surat'];?>"><?php echo $row['nomor_surat']; ?></a></td>
                    <td><?php echo date("d-m-Y",$time); ?></td>
                    <td><?php echo $row['perihal']; ?></td>
                    <td><?php echo $row['route']; ?></td>
                    <td><?php echo $row['tgl_kirim']; ?></td>
                    <td>
                      <?php 
                          if ($row['tgl_dibaca']=="") {
                            echo "Belum Dibaca";
                          }else{
                            echo $row['tgl_dibaca'];
                          }
                      ?>  
                    </td>
                    <td><h6><a href="fungsi/hapus_pengajuan.php?nomor=<?php echo $row['nomor_surat']; ?>"><button class="btn btn-danger"><span class="fa fa-trash"> Hapus</h6></span></button></a></td>
                    </tr>
                <?php
                    }
                ?>
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
