@extends('layout.pemerintah')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4">
                <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Rekap Peserta Vaksinasi</div>
                <form action="" method="post">
                    <select name="" id="program-vaksin" class="form-select">
                        <option value="">-- Pilih Program Vaksinasi --</option>
                        <option value="covid">COVID-19</option>
                        <option value="lain-lain">Lain-Lain</option>
                    </select>
                </form>

                <br>

                <form action="" method="post">
                    <select name="cari-berdasarkan" id="" class="form-select">
                        <option value="">-- Cari Berdasarkan --</option>
                        <option value="">Kota</option>
                        <option value="">Provinsi</option>
                    </select>
                </form>

                <div id="data-covid">
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

                    <div class="text-end mb-5 mb-md-5 mt-1 mt-md-4 header-section">
                        Nama Peserta:
                        <form action="" method="post" class="d-inline">
                            <input type="text" placeholder="Nama Peserta" class="w-25 p-2">
                        </form>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="min-width: 70px; width: 70px">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Penyelenggara</th>
                                <th scope="col" style="width: 150px;"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Jalanan</td>
                                <td>RSUD A</td>
                                <td><a href="">Detail</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Jalanin</td>
                                <td>RSUD B</td>
                                <td><a href="">Detail</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Matthew</td>
                                <td>Jalanon</td>
                                <td>RSUD C</td>
                                <td><a href="">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="data-vaksin-lain">
                    <div class="text-end mb-5 mb-md-5 mt-1 mt-md-4 header-section">
                        Nama Peserta:
                        <form action="" method="post" class="d-inline">
                            <input type="text" placeholder="Nama Peserta" class="w-25 p-2">
                        </form>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="min-width: 70px; width: 70px">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Penyelenggara</th>
                                <th scope="col" style="width: 150px;"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Jalanan</td>
                                <td>RSUD D</td>
                                <td><a href="">Detail</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Jalanin</td>
                                <td>RSUD E</td>
                                <td><a href="">Detail</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Matthew</td>
                                <td>Jalanon</td>
                                <td>RSUD F</td>
                                <td><a href="">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#nav-rekap').addClass('active');

        $(document).ready(function() {
            $("#data-covid").hide();
            $("#data-vaksin-lain").hide();
        });

        $("#program-vaksin").change(function() {
            if(this.value == "covid") {
                $("#data-vaksin-lain").hide();
                $("#data-covid").show();  
                alert("dar");
            } else if(this.value == "lain-lain") {
                $("#data-covid").hide();
                $("#data-vaksin-lain").show();
                alert("dor");
            } else {
                alert("kosong");
            }
        });
    </script>
@endsection