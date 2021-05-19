<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Game</title>

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

            <!-- Begin Page Content -->
            <div class="container-fluid">
              
              <!-- Content Row -->
              <div class="row">

                <div class="col-12 col-lg-12 col-xs-12 mb-4">

                  <!-- Approach -->
                  <div class="card shadow mb-4" id="card1">
                    <div class="card-header py-3" id="card-header1">
                      <i class="fa fa-arrow-left text-white mx-3 my-3" aria-hidden="true" type="button" id="btn"></i>
                      <div class="row">
                        <div class="col-12 col-lg-12 col-xs-12 mb-2 text-center">
                          <h6 class="m-0 font-weight-bold" id="coloring">Game Name</h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-lg-4 col-xs-4 m-auto" id="icon">
                          <div class="card shadow1 mb-2 m-auto" id="card2">
                            <img class="card-header" sytle="z-index: 1; position: relative;" id="card-header2" src="../assets/img/logo_bgc.png">
                            <i onclick="myFunction(this)" class="fa fa-heart-o content" sytle="z-index: 2;" aria-hidden="true" id="btn" type="button"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown" aria-labelledby="icon">
                      <div class="card-body dropdown-item" id="card-body">
                        <div class="row" id="coloring1">
                          <div class="col-12 col-lg-12 col-xs-12 mb-2 text-center">
                            <p class="text-small text-wrap d-flex justify-content-between">Lorem ipsum deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi</p>
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
  <script>
    function myFunction(x) {
      if (x.classList.contains('fa-heart-o')){
        x.classList.remove('fa-heart-o');
        x.classList.toggle('fa-heart');
        const icon = x.getElementById("btn");
        if(icon.style.color == "#FFF"){
          icon.style.color = "red";
        }else{
          icon.style.color = "#FFF";
        }
      }
      else{
        x.classList.remove('fa-heart');
        x.classList.toggle('fa-heart-o');
        const icon = x.getElementById("btn");
        if(icon.style.color == "#FFF"){
          icon.style.color = "red";
        }else{
          icon.style.color = "#FFF";
        }
      }  
    }
  </script>

</body>

</html>
