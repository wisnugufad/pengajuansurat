<?php 	
	function navbar_atas($x,$status)
	{
		echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">';
    if ($status=="karyawan") {
      echo '<a class="navbar-brand" href="home.php">Angkasa Pura II</a>';
    }else{
      echo '<a class="navbar-brand" href="surat_masuk.php">Angkasa Pura II</a>';
    }
    echo '<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">';
      if ($status=="karyawan") {
        echo '<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="pengajuan.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Pengajuan</span>
          </a>
        </li>';
      }else{
        echo '<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="surat_masuk.php">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">Surat Masuk</span>
          </a>
        </li>';
      }
       echo '<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="upload_kop.php">
            <i class="fa fa-fw fa-file-o"></i>
            <span class="nav-link-text">Kop Surat</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="complete.php">
            <i class="fa fa-fw fa-file-o"></i>
            <span class="nav-link-text">Complete</span>
          </a>
        </li>';
        if ($status=="karyawan") {
          echo '<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="home.php">
            <i class="fa fa-fw fa-file-o"></i>
            <span class="nav-link-text"> Status Pengajuan</span>
          </a>
        </li>';
        }
      echo '</ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-lg fa-user-circle"></i>
            <span class="d-lg-none">'.$x.'
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h5 class="dropdown-header">'.$x.'</h5>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="profil.php">
                <i class="fa fa-fw fa-id-card"></i> Profil
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="ganti_pass.php">
                <i class="fa fa-fw fa-key"></i> Ganti Password
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="fungsi/logout.php">
                <i class="fa fa-fw fa-sign-out"></i> Logout
            </a>
          </div>
        </li>
      </li>
        <!--<li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>-->
        <li class="nav-item">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
      </ul>
    </div>
  </nav>';
	}
 ?>