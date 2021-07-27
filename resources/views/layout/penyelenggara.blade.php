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
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    </head>

    <body>
        <div class="container-fluid container-wrapper m-0 p-0">
            <!-- Navigation Website -->
            <div class="row m-0 p-0">
                <div class="col-2 m-0 p-0">

                    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark rubik-medium" style="width: 100%; height: 100vh">
                        <div class="fs-4 text-center"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></div>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item mb-1">
                                <a href="{{ route('dashboard-penyelenggara') }}" class="nav-link text-white p-3" id="nav-dashboard">
                                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                    Dashboard
                                </a>
                            </li>

                            <li class="nav-item mb-1">
                                <a href="{{ route('edit-data-penyelenggara') }}" class="nav-link text-white p-3" id="nav-edit">
                                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                    Edit Data
                                </a>
                            </li>

                            <li class="nav-item mb-1">
                                <a href="{{ route('antrian-vaksin-penyelenggara') }}" class="nav-link text-white p-3" id="nav-antrian">
                                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                    Antrian Vaksin
                                </a>
                            </li>
                            
                            <li class="nav-item mb-1">
                                <a href="{{ route('rekap-peserta-penyelenggara') }}" class="nav-link text-white p-3" id="nav-rekap">
                                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                    Rekap Peserta
                                </a>
                            </li>

                            <li class="nav-item mb-1">
                                <a href="{{ route('vaksin-penyelenggara') }}" class="nav-link text-white p-3" id="nav-vaksin">
                                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                    Vaksin
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-10" style="max-height: 100vh; overflow-y: auto">
                    <!-- Content Website -->
                    <main>
                        <div class="container-fluid p-0">
                            @yield("content")
                        </div>
                    </main>

                    <footer>
                        <div class="container footer-wrapper p-1">
                            <div class="text-center h5 p-4 footer-text rubik-medium text-dark">
                                Copyright © 2021 | i-Vaccine
                            </div>
                        </div>
                    </footer>
                    <!-- Content Website End -->
                </div>
            </div>

            <!-- Javascript & Jquery -->
            <script>
                
            </script>
        </div>
    </body>
</html>