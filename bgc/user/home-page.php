<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home Page</title>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="../assets/css/bootstrap.css"> 
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/sb-admin-2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-black topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav mr-auto">
            
            <!-- Nav Item - Menu Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-bars fa-sm fa-fw mr-2 text-gray-400"></span>  
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
              <h1 class="h4 mb-0 text-gray-800">My Team's - Team List</h1>
            </div>
          </ul>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <!-- Plus Team -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" role="button">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
              </a>
            </li>
            
            <!-- Batas -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="batas">
                <span>|</span>
              </a>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <!-- <img class="img-profile rounded-circle" src="#"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <div class="col-lg-9 mb-4">

              <input class="form-control mr-sm-2" type="search" placeholder="Search for my team" aria-label="Cari">

            </div>
            <div class="col-lg-3 mb-4">
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-lg-8 mb-4">

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <div class="row">
                    <div class="col-lg-1">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-10 mb-2">
                      <div class="row">
                        <div class="col-lg-12">
                          <h6 class="m-0 font-weight-bold text-primary">My team #1</h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <h6 class="m-0 font-weight-bold text-primary">Game Name</h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-1">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa fa-bars fa-sm fa-fw mr-2 text-gray-400"></span>  
                            <!-- Gambar mahkota berbayar, ini cma ganti smntara -->
                            <!-- ini nanti dropdown mahkotanya -->
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body dropdown" aria-labelledby="menuDropdown">
                </div>
              </div>

            </div>
            <div class="col-lg-4 mb-4">
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
            <span>Copyright &copy; Your Website 2021</span>
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
          <a class="btn btn-primary" href="">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>
