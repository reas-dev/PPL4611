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
  <link rel="stylesheet" href="../assets/css/sb-admin-2.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="bg-dark">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-md-center">

      <div class="col-xl-8 col-lg-12 col-md-4">

        <div class="card o-hidden border-0 my-5">
               
          <!-- Card Body -->
          <div class="card-body" id="card-body">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-black topbar mb-4 static-top shadow">
            
              <!-- Topbar Navbar -->
              <ul class="navbar-nav mr-auto">
                
                <!-- Nav Item - Menu Information -->
                <div class="d-sm-flex align-items-center justify-content-between mb-2">
                  <h1 class="h4 mb-0 text-gray-800" id="home">Home</h1>
                </div>
              </ul>
              <!-- End of Topbar -->

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
                  <a class="nav-link dropdown-toggle" href="#" role="button">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <!-- <img class="img-profile rounded-circle" src="#"> -->
                  </a>
                </li>

              </ul>
              
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

              <!-- Content Row -->
              <div class="row">

                <div class="col-lg-12 mb-4">

                  <input class="form-control mr-sm-2" type="search" placeholder="Search for my team" aria-label="Cari">

                </div>
              </div>

              <div class="container col-lg-12 col-xs-12 container-buttons">
                <div class="row">
                  <div class="col-6 col-lg-2 col-xs-3 col-buttons">
                    <button class="btn btn-warning buttons-4 active">My Team's</button>
                  </div>
                  <div class="col-6 col-lg-2 col-xs-3 col-buttons">
                    <button class="btn btn-warning buttons-4">Game List</button>
                  </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                  <div class="col-6 col-lg-2 col-xs-3 col-buttons">
                    <button class="btn btn-secondary buttons-4 active">Team List</button>
                  </div>
                  <div class="col-6 col-lg-2 col-xs-3 col-buttons">
                    <button class="btn btn-secondary buttons-4">Schedule</button>
                  </div>
                </div>
              </div>
              
              <!-- Content Row -->
              <div class="row">

                <div class="col-12 col-lg-12 col-xs-12 mb-4">

                  <!-- Approach -->
                  <div class="card shadow mb-4 dropdown">
                    <div class="card-header py-3" id="card-header">
                      <div class="row">
                        <div class="col-2 col-lg-1 col-xs-1">
                          <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png">
                          <!-- <div class="m-2" id="icon"> -->
                            <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
                          <!-- </div> -->
                        </div>
                        <div class="col-7 col-lg-9 col-xs-9 mb-2">
                          <div class="row">
                            <div class="col-12 col-lg-12 col-xs-12">
                              <h6 class="m-0 font-weight-bold" id="coloring">My team #1</h6>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 col-lg-12 col-xs-12">
                              <h6 class="m-0 font-weight-bold" id="coloring">Game Name</h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 col-lg-2 col-xs-2">
                          <div class="m-2" id="icon">
                            <button type="button" class="fa fa-cogs dropdown-toggle" aria-hidden="true" data-toggle="dropdown" id="drop" aria-haspopup="true" aria-expanded="false">
                              </button>
                            <!-- Gambar mahkota berbayar, ini cma ganti smntara -->
                            <!-- ini nanti dropdown mahkotanya -->
                            <!-- masih belum bisa dropdown -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown" aria-labelledby="icon">
                      <div class="card-body dropdown-item" id="card-body">
                        <div class="row" id="coloring">
                          <div class="col col-2">
                            <p class="text-small">User</p>
                          </div>
                          <div class="col col-7">
                            <p class="text-small"></p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">W</p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">D</p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">L</p>
                          </div>
                        </div>
                        <div class="row" id="coloring1">
                          <div class="col col-2">
                            <i class="fa fa-gavel"></i>
                          </div>
                          <div class="col col-7">
                            <p class="text-small">qwerty123</p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">1</p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">3</p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">2</p>
                          </div>
                        </div>
                        <div class="row" id="coloring1">
                          <div class="col col-2">
                            <i class="fa fa-quora"></i>
                          </div>
                          <div class="col col-7">
                            <p class="text-small">qwerty123</p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">3</p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">1</p>
                          </div>
                          <div class="col-1">
                            <p class="text-small">2</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- /.container-fluid -->

          </div>

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