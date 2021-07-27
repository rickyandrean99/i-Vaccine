@extends('layout.pemerintah')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4">
                <p><b>Grafik Vaksinasi</b></p>
                <img src="{{ asset('assets/img/covid.png') }}" alt="gambar grafik" class="img-fluid ">

                <div class="row">
                    <div class="card ms-5 me-5" style="width: 25%;">
                        <div class="card-body">
                            <h5 class="card-title">Vaksin Pertama</h5>
                            <p class="card-text">34.173.832</p>
                        </div>
                    </div>

                    <div class="card ms-5 me-5" style="width: 25%;">
                        <div class="card-body">
                            <h5 class="card-title">Vaksin Kedua</h5>
                            <p class="card-text">13.584.190</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#nav-dashboard').addClass('active');
    </script>
@endsection