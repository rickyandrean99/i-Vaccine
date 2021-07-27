@extends('layout.penyelenggara')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@section('content')
    <div class="row">   
        <div class="col-12 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4 pe-5 ps-5">
                <form action="" method="post">
                    <select name="" id="" class="form-select mb-3">
                        <option value="">-- Pilih Data vaksinasi [Masuk] --</option>
                        <option value="">Covid-19</option>
                        <option value="">Vaksin lainnya</option>
                    </select>
                    <select name="" id="" class="form-select mb-5">
                        <option value="">-- Cari Berdasarkan --</option>
                             <option value="">Denpasar</option>
                            <option value="">Badung</option>
                            <option value="">Singaraja</option>
                            <option value="">Negare</option>
                            <option value="">Karang Asem</option>
                    </select>
                </form>
                <div>
                    <table class="table table-striped" id="table_id">
                        <thead>
                            <tr>
                                <th>No. Resi</th>
                                <th>Tgl. Masuk</th>
                                <th>Jenis</th>
                                <th>Jumlah</th>
                                <th>Tgl. Kadaluarsa</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>9182093102</td>
                                <td>10-1-20</td>
                                <td>Sinovac</td>
                                <td>2000</td>
                                <td>10-1-22</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>79213912</td>
                                <td>14-7-21</td>
                                <td>Astrazeneca</td>
                                <td>1000</td>
                                <td>10-8-22</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>2424142</td>
                                <td>01-5-21</td>
                                <td>Sinovac</td>
                                <td>600</td>
                                <td>10-10-21</td>
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
        $('#nav-vaksin').addClass('active');
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection