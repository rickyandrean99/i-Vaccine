@extends('layout.pemerintah')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

@section('content')
    <div class="row justify-content-center">
        <div class="col-11 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4">
                <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Stok Vaksin COVID - 19</div>

                <table class="table table-striped" id="table_id">
                    <thead>
                        <tr>
                            <th scope="col" style="min-width: 70px; width: 70px">No</th>
                            <th scope="col">Nama Penyelenggara</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kabupaten</th>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Tanggal Kirim</th>
                            <th scope="col">Jumlah Kirim</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Puri Raharja General Hospital</td>
                            <td>Jl. WR Supratman No. 14 & 19</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>RUMAH SAKIT Udayana</td>
                            <td>Jl. P.B. Sudirman No. 1</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Bhayangkara Hospital Denpasar</td>
                            <td>Jl. Trijata No. 32</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Wangaya Regional General Hospital</td>
                            <td>Jl. Kartini No. 133</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Bali Royal Hospital</td>
                            <td>Jl. Tantular No. 6</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Rumah Sakit Manuaba</td>
                            <td>Jl. Cokroaminoto No. 28</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Rumah Sakit Prima Medika</td>
                            <td>Jl. Raya Sesetan No. 10</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Surya Husada General Hospital</td>
                            <td>Jl. Cokroaminoto No. 356</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Rumah Sakit Ibu dan Anak Puri Bunda</td>
                            <td>Jl. Gatot Subroto VI No. 19</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Kasih Ibu Hospital</td>
                            <td>Jl. Teuku Umar No. 120</td>
                            <td>Denpasar</td>
                            <td>Bali</td>
                            <td>12-1-21</td>
                            <td>2000</td>
                        </tr>
                    </tbody>
                </table>
                    
            </div>
        </div>
    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <script>
        $('#nav-distribusi').addClass('active');

        $(document).ready( function () {
            $('#table_id').DataTable();
        });
    </script>
@endsection