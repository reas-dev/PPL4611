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
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" action="<?php echo base_url()."index.php/depan/proses_login_user"?>" method="POST">
                    <div class="form-group">
                      <input type="email" name="email" style="border-radius: 1rem;" value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];} ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" style="border-radius: 1rem;" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-8 col-sm-8">
                          <label for="remember" class="small" style="color: black;" ><input type="checkbox" <?php if(isset($_COOKIE['loginID'])) {?> checked="checked"<?php } ?> value="true" name="remember"> Remember Me</label>
                        </div>
                        <div class="col-4 col-sm-4">
                          <a for="forgot-password" class="small" style="color: red; text-align: right !important;" href="<?php echo base_url()."index.php/depan/forgot"; ?>">Forgot Password</a>
                        </div>
                      </div>
                    </div>
                    <input type="submit" style="border-radius: 1rem;" value="Sign In" name="sign in" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <div class="text-center">
                  <a class="small">Don't have account?</a>
                  <a class="small" href="<?php echo base_url()."index.php/depan/daftar"; ?>">Sign Up</a>
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
