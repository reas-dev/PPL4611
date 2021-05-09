<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."assets/"; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."assets/"; ?>css/sb-admin-2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
  
</head>

<body class="bg-gradient-dark">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-md-center">

      <div class="col-xl-8 col-lg-12 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Change Password</h1>
                  </div>
                  <form class="user" action="<?php echo base_url()."index.php/depan/proses_login_user"?>" method="POST">
                    <div class="form-group">
                      <input type="password" name="old" style="border-radius: 1rem;"class="form-control form-control-user" id="exampleInputPassword" placeholder="Old Password" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="new" style="border-radius: 1rem;" class="form-control form-control-user" id="exampleNewPassword" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="connfirm" style="border-radius: 1rem;" class="form-control form-control-user" id="exampleConfirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <input type="submit" style="border-radius: 1rem;" value="Change Password" name="change" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small">Already have account?</a>
                    <a class="small" href="<?php echo base_url()."index.php/depan/index"; ?>">Sign In</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2"></div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."assets/"; ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."assets/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."assets/"; ?>js/sb-admin-2.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>js/sweetalert2.min.js"></script>

</body>

</html>
