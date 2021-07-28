@extends('layout.pemerintah')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

@section('content')
    <div class="row justify-content-center">
        <div class="col-11 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4">
                <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Rekap Peserta Vaksinasi</div>
                <form action="" method="post">
                    <select name="" id="program-vaksin" class="form-select">
                        <option value="">-- Pilih Program Vaksinasi --</option>
                        <option value="covid">COVID-19</option>
                        <option value="lain-lain">Lain-Lain</option>
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

                        <table class="table table-striped" id="table_id_2">
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
                                    <td>Andi Lianto</td>
                                    <td>Jl. Belimbing No. 1, Denpasar</td>
                                    <td>Puri Raharja General Hospital</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Agus Prayoga</td>
                                    <td>Jl. Kedondong No. 8, Denpasar</td>
                                    <td>RUMAH SAKIT Udayana</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Made Baruna</td>
                                    <td>Jl. Kepundung No. 12, Denpasar</td>
                                    <td>Bhayangkara Hospital Denpasar</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Agung Suteja</td>
                                    <td>Jl. Cokroaminoto No. 225, Denpasar</td>
                                    <td>Wangaya Regional General Hospital</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Made Yoga</td>
                                    <td>Jl. Gatot Subroto No. 112, Denpasar</td>
                                    <td>Bali Royal Hospital</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Purnomo</td>
                                    <td>Jl. Kartini No. 12, Denpasar</td>
                                    <td>Rumah Sakit Manuaba</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Ketut Sudrajat</td>
                                    <td>Jl. Raya Sesetan No. 110, Denpasar</td>
                                    <td>Rumah Sakit Prima Medika</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>I Made Anom</td>
                                    <td>Jl. Nanas No. 11, Denpasar</td>
                                    <td>Surya Husada General Hospital</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Nyoman Dewata</td>
                                    <td>Jl. Gatot Subroto V No. 199, Denpasar</td>
                                    <td>Rumah Sakit Ibu dan Anak Puri Bunda</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Albert</td>
                                    <td>Jl. Teuku Umar No. 355, Denpasar</td>
                                    <td>Kasih Ibu Hospital</td>
                                    <td><button type="button" class="btn btn-primary">Detail</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="data-vaksin-lain">
                    <table class="table table-striped" id="table_id_1">
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
                                <td>Andi Lianto</td>
                                <td>Jl. Belimbing No. 1, Denpasar</td>
                                <td>Puri Raharja General Hospital</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Agus Prayoga</td>
                                <td>Jl. Kedondong No. 8, Denpasar</td>
                                <td>RUMAH SAKIT Udayana</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Made Baruna</td>
                                <td>Jl. Kepundung No. 12, Denpasar</td>
                                <td>Bhayangkara Hospital Denpasar</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Agung Suteja</td>
                                <td>Jl. Cokroaminoto No. 225, Denpasar</td>
                                <td>Wangaya Regional General Hospital</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Made Yoga</td>
                                <td>Jl. Gatot Subroto No. 112, Denpasar</td>
                                <td>Bali Royal Hospital</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Purnomo</td>
                                <td>Jl. Kartini No. 12, Denpasar</td>
                                <td>Rumah Sakit Manuaba</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Ketut Sudrajat</td>
                                <td>Jl. Raya Sesetan No. 110, Denpasar</td>
                                <td>Rumah Sakit Prima Medika</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>I Made Anom</td>
                                <td>Jl. Nanas No. 11, Denpasar</td>
                                <td>Surya Husada General Hospital</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Nyoman Dewata</td>
                                <td>Jl. Gatot Subroto V No. 199, Denpasar</td>
                                <td>Rumah Sakit Ibu dan Anak Puri Bunda</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Albert</td>
                                <td>Jl. Teuku Umar No. 355, Denpasar</td>
                                <td>Kasih Ibu Hospital</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <script>
        $('#nav-rekap').addClass('active');

        $(document).ready(function() {
            $("#data-covid").hide();
            $("#data-vaksin-lain").hide();
        });

        $("#program-vaksin").change(function() {
            if(this.value == "covid") {
                $("#data-vaksin-lain").hide();
                $("#data-covid").fadeTo(300, 1);
                $('#table_id_1').DataTable();
            } else if(this.value == "lain-lain") {
                $("#data-covid").hide();
                $("#data-vaksin-lain").fadeTo(300, 1);
                $('#table_id_2').DataTable();
            } else {
                $("#data-covid").hide();
                $("#data-vaksin-lain").hide();
            }
        });
    </script>
@endsection