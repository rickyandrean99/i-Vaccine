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
                            <th scope="col">Jenis Vaksin</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col" style="width: 150px;"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Astra Zeneca</td>
                            <td>2000</td>
                            <td><button type="button" class="btn btn-primary">Ubah</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Sinovac</td>
                            <td>2000</td>
                            <td><button type="button" class="btn btn-primary">Ubah</button></td>
                        </tr>
                    </tbody>
                </table>
                    
            </div>
        </div>
    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <script>
        $('#nav-stok').addClass('active');

        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
@endsection