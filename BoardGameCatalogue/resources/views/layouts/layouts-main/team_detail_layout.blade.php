<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
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
                                <div class="col-12 col-lg-12 col-xs-12 mb-4">
                                    <!-- Approach -->
                                    <div class="card shadow mb-4" id="card1">
                                        <div class="card-header py-3" id="card-header1">
                                            <div class="row">
                                                <div class="col-12 col-lg-12 col-xs-12 mb-2 text-center">
                                                    <h6 class="m-0 font-weight-bold" id="coloring">Alamat Game</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-4 col-xs-4 m-auto" id="icon">
                                                    <div class="card shadow1 mb-2 m-auto" id="card2">
                                                        <img class="card-header" id="card-header2" src="{{ asset('img/logo_bgc.png') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-12 col-xs-12 mb-2 mt-2 text-center">
                                                    <h6 class="m-0 font-weight-bold" id="coloring">Game Name</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dropdown" aria-labelledby="icon">
                                            <div class="card-body dropdown-item" id="card-body">
                                                <div class="container col-lg-12 col-xs-12 container-buttons" id="coloring1">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                                            <!-- <button class="btn btn-warning buttons-4 active">Member</button> -->
                                                            <a class="font-weight-bold btn btn-dark active" id="menu">Member</a>
                                                        </div>
                                                        <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                                            <!-- <button class="btn btn-warning buttons-4">Schedule</button> -->
                                                            <a class="font-weight-bold btn" href="#" id="menu">Schedule</a>
                                                        </div>
                                                        <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                                            <!-- <button class="btn btn-warning buttons-4">Statistic</button> -->
                                                            <a class="font-weight-bold btn" href="#" id="menu">Statistic</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @yield('content')
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
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>
