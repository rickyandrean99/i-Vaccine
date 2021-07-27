@extends('layout.penyelenggara')

@section('content')
        <div class="row">
            <div class="col-12 mt-5">
                <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4">
                    <form action="" method="post">
                        <select name="" id="" class="form-select">
                            <option value="">-- Tampilkan Perdaerah --</option>
                            <option value="">Denpasar</option>
                            <option value="">Badung</option>
                            <option value="">Singaraja</option>
                            <option value="">Negare</option>
                            <option value="">Karang Asem</option>
                        </select>
                    </form>
                    <br>
                    <img src="{{ asset('assets/img/covid.png') }}" alt="gambar grafik" class="img-fluid ">
                </div>

            </div>
        </div>
    <script>
        $('#nav-dashboard').addClass('active');
    </script>
@endsection