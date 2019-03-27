<?php 	
	function navbar_atas($x)
	{
		echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="home.php">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="pengajuan.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Pengajuan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">Surat Masuk</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="upload_kop.php">
            <i class="fa fa-fw fa-file-o"></i>
            <span class="nav-link-text">Kop Surat</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-bars"></i>
            <span class="nav-link-text">Progress</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="complete.php">
                <i class="fa fa-fw fa-check-square-o"></i> Complete
              </a>
            </li>
            <li>
              <a href="navbar.html">
                <i class="fa fa-fw fa-envelope"></i> Status Pengajuan
              </a>
            </li>
          </ul>
        </li>
      </ul>
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