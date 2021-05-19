<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Register</title>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>

<body class="bg-dark">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-md-center">
      <div class="col-xl-8 col-lg-12 col-md-4">
        <div class="card o-hidden border-0 my-5">
          <!-- Card -->
          <div class="card-body">
            <!-- <div class="bg-dark card-body p-0"> kalo udah fix hitam baru dipake -->
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form class="user" method="POST" action="{{ url('/register') }}">
                    @csrf
                    @method('post')
                    <div class="form-group">
                      <input type="text" name="fullname" class="form-control form-control-user" placeholder="Fullname" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control form-control-user" placeholder="Email" required>
                      <a id="result-email"></a>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirm_password" class="form-control form-control-user" id="exampleConfirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Sign Up</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" id="color">Already have account?</a>
                    <a class="small" style="color: #0069d9;" href="{{ url('/login') }}">Sign In</a>
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
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>