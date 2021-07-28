@extends('layout.penyelenggara')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<style>
    .hidden{
        display: none;
    }
</style>

@section('content')
    <div class="row vh-100">
        <div class="col-12 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4 pe-5 ps-5">
                <form action="">
                    <select name="" id="program" class="form-select">
                        <option value="">-- Pilih Program vaksinasi --</option>
                        <option value="">Covid-19</option>
                        <option value="">Vaksin lainnya</option>
                    </select>
                </form>
            </div>
            <div class="container">
            <div class="row mb-5 mb-md-5 mt-1 mt-md-4 pe-5 ps-5">
                <div class="col text-center align-self-center">
                    <h4>Nomor Antrian</h4>
                    <h2 id="antrian-sekarang" class="hidden">2</h2>
                    <button type="button" class="btn btn-success">SELANJUTNYA</button>
                </div>
                <div class="col">
                    <table class="table table-striped" id="table_id">
                        <thead>
                            <tr>
                                <th>Antrian</th>
                                <th>Nama Peserta</th>
                            </tr>
                        </thead>
                        <tbody id="table-antrian" class="hidden">
                            <tr>
                                <td>1</td>
                                <td>Ricky</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adit</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Yoga</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Theo</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Kevin</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Arifin</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Nathasya</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Christo</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Ivan</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Denis</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $('#nav-antrian').addClass('active');
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
        $(document).on('change','#program', function(){
            $('#antrian-sekarang').removeClass('hidden');
            $('#table-antrian').removeClass('hidden');
        });
    </script>
@endsection