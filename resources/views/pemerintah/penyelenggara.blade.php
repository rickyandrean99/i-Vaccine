@extends('layout.pemerintah')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4">
                <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Data Penyelenggara</div>
                <form action="" method="post">
                    <select name="" id="" class="form-select">
                        <option value="">-- Tampilkan Perdaerah --</option>
                        <option value="">Denpasar</option>
                        <option value="">Badung</option>
                        <option value="">Singaraja</option>
                        <option value="">Negara</option>
                        <option value="">Karangasem</option>
                    </select>
                </form>
                <div class="text-end mb-5 mb-md-5 mt-1 mt-md-4 header-section">
                    Nama Penyelenggara:
                    <form action="" method="post" class="d-inline">
                        <input type="text" placeholder="Nama Penyelenggara" class="w-25 p-2">
                    </form>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="min-width: 70px; width: 70px">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" style="width: 150px;"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Jalanan</td>
                            <td><a href="">Detail</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Jalanin</td>
                            <td><a href="">Detail</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Matthew</td>
                            <td>Jalanon</td>
                            <td><a href="">Detail</a></td>
                        </tr>
                    </tbody>
                    </table>
            </div>

        </div>
    </div>
    <script>
        $('#nav-penyelenggara').addClass('active');
    </script>
@endsection