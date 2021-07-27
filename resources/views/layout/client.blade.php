<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>i-Vaccine</title>

        <!-- Bootstrap Source -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

        <style>
            @media screen and (max-width: 720px) {
                .footer-text {
                    font-size: 1rem; 
                }
            }
            
        </style>
    </head>

    <body>
        <div class="container-fluid container-wrapper">
            <!-- Navigation Website -->
            <nav class="navbar navbar-expand-lg bg-primary m-0" id="navigation-bar" style="margin-bottom: 10px;">
                <div class="container-fluid">
                    <div class="navbar-brand text-white ps-3 rubik-medium">
                        Logo i-Vaccine
                    </div>

                    <!-- Collapse button for trigger mobile -->
                    <button onclick="openNav()" style="background: none; border: 0; outline: 0" class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        =
                    </button>

                    <!-- Navigation for desktop view before login -->
                    <div class="collapse navbar-collapse navigation-wrapper row rubik-medium" id="navbarTogglerDemo02">
                        <div class="col-6 text-white ps-5">
                            Logo i-Vaccine
                        </div>

                        <div class="col-6 pe-5">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navigation-list float-end">
                                @if (true)
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('beranda') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('pendaftaran-vaksin') }}">Daftar Vaksin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="">Tiketmu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="">Ricky&nbsp;&nbsp;></a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('beranda') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('masuk') }}">Masuk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('daftar') }}">Daftar</a>
                                    </li>
                                @endif 
                            </ul>
                        </div>
                    </div>
                    

                    <!-- Navigation for mobile view before login -->
                    <div class="side-navigation bg-primary rubik-medium">
                        <!-- <i class="large material-icons text-white btn-close" onclick="closeNav()" style="cursor: pointer"></i> -->
                        <button class="text-white btn-close" onclick="closeNav()" style="cursor: pointer; background: none">X</button>
                        
                        <ul class="mr-auto mt-2 mt-lg-0 side-nav-list">
                            @if (true)
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('beranda') }}">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('pendaftaran-vaksin') }}">Daftar Vaksin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Tiketmu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Edit Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Keluar</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('beranda') }}">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('masuk') }}">Masuk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('daftar') }}">Daftar</a>
                                </li>
                            @endif 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navigation Website End -->

            <!-- Content Website -->
            <main style="min-height: 87vh">
                <div class="container-fluid p-0">
                    @yield("content")
                </div>
            </main>
            <!-- Content Website End -->

            <!-- Footer Website -->
            <footer>
                <div class="container-fluid bg-dark">
                    <div class="container footer-wrapper p-1">
                        <div class="text-white text-center h5 p-4 footer-text">
                            Copyright © 2021 | i-Vaccine
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Website End -->

            <!-- Javascript & Jquery -->
            <script>
                function openNav() {
                    $('.side-navigation').css('width', '50vw');
                }

                function closeNav() {
                    $('.side-navigation').css('width', '0');
                }
            </script>
        </div>
    </body>
</html>