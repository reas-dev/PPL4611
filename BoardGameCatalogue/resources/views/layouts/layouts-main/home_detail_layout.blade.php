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
    <i class="fa fa-arrow-left text-white mx-3 my-3" aria-hidden="true"></i>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-md-center">

            <div class="col-xl-8 col-lg-12 col-md-4">

                <div class="card o-hidden border-0 my-5">

                    <!-- Card Body -->
                    <div class="card-body" id="card-body">


                        <!-- End of Topbar -->
                        @yield('content')
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
    <script>
        function myFunction(x) {
            if (x.classList.contains('fa-heart-o')) {
                x.classList.remove('fa-heart-o');
                x.classList.toggle('fa-heart');
                const icon = x.getElementById("btn");
                if (icon.style.color == "#FFF") {
                    icon.style.color = "red";
                } else {
                    icon.style.color = "#FFF";
                }
            } else {
                x.classList.remove('fa-heart');
                x.classList.toggle('fa-heart-o');
                const icon = x.getElementById("btn");
                if (icon.style.color == "#FFF") {
                    icon.style.color = "red";
                } else {
                    icon.style.color = "#FFF";
                }
            }
        }
    </script>
</body>

</html>