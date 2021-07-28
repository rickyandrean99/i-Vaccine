@extends('layout.pemerintah')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4">
                <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Grafik Vaksinasi</div>
                <img src="{{ asset('assets/img/covid.png') }}" alt="gambar grafik" class="img-fluid ">

                <div class="row justify-content-center">
                <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Data</div>

                    <div class="col-6 mb-5">
                        <div class="card ms-5 me-5 w-100">
                            <div class="card-body">
                                <h5 class="card-title">Vaksin Pertama</h5>
                                <p class="card-text">34.173.832</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-6 mb-5">
                        <div class="card ms-5 me-5 w-100">
                            <div class="card-body">
                                <h5 class="card-title">Vaksin Kedua</h5>
                                <p class="card-text">13.584.190</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <div class="card ms-5 me-5 w-100">
                            <div class="card-body">
                                <h5 class="card-title">Stok Tersedia</h5>
                                <p class="card-text">131.451.247</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card ms-5 me-5 w-100">
                            <div class="card-body">
                                <h5 class="card-title">Penyelenggara</h5>
                                <p class="card-text">47.193</p>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="peta-sebaran">
                    <div class="container daftar-vaksin-wrapper rubik-medium pt-5 pb-5">
                        <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Peta Sebaran Vaksinasi COVID-19</div>

                        <div class="row mb-4 justify-content-center">
                            <div class="col-11 col-md-12 bg-secondary text-white text-center h4 d-flex align-items-center justify-content-center" style="min-height: 500px">
                                Peta Sebaran
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        $('#nav-dashboard').addClass('active');
    </script>
@endsection