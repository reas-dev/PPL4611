<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User - Profil</title>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <!-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> -->

      <!-- Sidebar - Brand -->
      <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">User</div>
      </a> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider my-0"> -->

      <!-- Nav Item - Dashboard -->
      <!-- <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()."index.php/dashboarduser/"; ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>List Lagu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Artis : </h6>
            <a class="collapse-item" href="<?php echo base_url()."index.php/dashboarduser/ariana_grande/".$this->session->userdata('id_user'); ?>">Ariana Grande</a>
            <a class="collapse-item" href="<?php echo base_url()."index.php/dashboarduser/bruno_mars/".$this->session->userdata('id_user'); ?>">Bruno Mars</a>
            <a class="collapse-item" href="<?php echo base_url()."index.php/dashboarduser/ed_sheeran/".$this->session->userdata('id_user'); ?>">Ed Sheeran</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."index.php/dashboarduser/pesan_lagu/".$this->session->userdata('id_user'); ?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Pesan Lagu</span></a>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block"> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul> -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav mr-auto">
            
            <!-- Nav Item - Menu Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile" src="<?php echo base_url().$this->session->userdata ('foto');?>"> 
                <!-- kasih gambar menu -->
                <i class="fas fa-menu fa-sm fa-fw mr-2"></i>
              </a>
              <!-- Dropdown - Menu1 Information -->
              <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="menuDropdown">
                <a class="dropdown-item" href="#" id="myteamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  My Team's
                </a>
                <!-- Dropdown - My Team's Information -->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropright no-arrow">
                    <div class="dropright-menu dropright-menu-right shadow animated-grow-in" aria-labelledby="myteamDropdown">
                      <a class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Team List
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        Schedule
                      </a>
                    </div>
                  </li>
                </ul>
                <div class="dropdown-divider"></div>
                <!-- Dropdown - Menu2 Information -->
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  Game List
                </a>
              </div>
            </li>
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
              <h1 class="h3 mb-0 text-gray-800">User - My Profile</h1>
            </div>
          </ul>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata ('username');?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url().$this->session->userdata ('foto');?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url()."index.php/dashboarduser/profil/".$this->session->userdata('id_user'); ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil</h1>
          </div> -->

          <!-- Content Row -->
          <div class="row">

            <div class="col-lg-12 mb-4">

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Update/ Lihat Profil</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url()."index.php/dashboarduser/proses_edit_profil/".$this->session->userdata('id_user');?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" class="form-control form-control-user" value="<?php echo $id_user; ?>">
                        Username : <br>
                        <input type="text" name="username" class="form-control form-control-user" value="<?php echo $username; ?>"><br><br>
                        Email : <br>
                        <?php echo $email; ?><br><br>
                        Phone : <br>
                        <input type="text" name="phone" class="form-control form-control-user" value="<?php echo $phone; ?>"><br><br>
                        Foto : <br>
                        <img src="<?php echo base_url().$image; ?>"><br><br>
                        <input class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="file" name="foto"><br><br>
                        Address : <br>
                        <input type="text" name="address" class="form-control form-control-user" value="<?php echo $address; ?>"><br><br>
                        <input type="submit" value="Update">
                    </form>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url()."index.php/dashboarduser/logout"; ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>

</body>

</html>