<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
  
  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body class="bg-dark">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-md-center">

      <div class="col-xl-8 col-lg-12 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">

          <!-- Card -->
          <div class="card-body">
          <!-- <div class="bg-dark card-body p-0"> kalo udah fix hitam baru dipake -->
            
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control form-control-user" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-7 col-sm-7">
                          <label for="remember" class="small" id="remember"><input type="checkbox" name="remember" value="true" > Remember Me</label>
                        </div>
                        <div class="col-5 col-sm-5" style="text-align: right !important;">
                          <a for="forgot-password" class="small" style="color: red;" id="forgot-password" href="#">Forgot Password</a>
                        </div>
                      </div>
                    </div>
                    <input type="submit" value="Sign In" name="sign in" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <div class="text-center">
                  <a class="small">Don't have account?</a>
                  <a class="small" style="color: blue;" href="#">Sign Up</a>
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
  <script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>

</body>

</html>
