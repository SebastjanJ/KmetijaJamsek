<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <style>
        img {
            float: left;
            max-height: 100px;

        }
    </style> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <title>Kmetija Jamšek</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{url('')}}">
                    <h2>Kmetija <em>Jamšek</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('')}}">Domov
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('mlekomati')}}">Mlekomati</a>
                            <span class="sr-only">(current)</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('onas')}}">O nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('kontakt')}}">Kontakt</a>
                        </li>

                        <li class="nav-item">
                            @if (Route::has('login'))

                            @auth



                            <x-app-layout>

                            </x-app-layout>

                            @else
                        <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                        @endauth

                        @endif
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        @if(session()->has('message'))

        <div align="center" class="alert alert-success">

            {{session()->get('message')}}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;

                </span>
            </button>

        </div>

        @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="container">

        <div class="section-heading">

        </div>



        <img align="center" height="100%" width="100%" src="assets/images/slide_01.jpg" alt="">

    </div>
    <!-- Banner Ends Here -->


    <div class="container">

        <div class="section-heading">
            <h2>Mlekomati</h2>
        </div>



        <img align="center" height="100%" width="100%" src="/productimage/mlekomati.png" alt="">

    </div>









    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>