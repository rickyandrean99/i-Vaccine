@extends('layout.penyelenggara')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4 pe-5 ps-5">
                <form action="" method="post">
                    <select name="" id="" class="form-select mb-3">
                        <option value="">-- Pilih Program vaksinasi --</option>
                        <option value="">Covid-19</option>
                        <option value="">Vaksin lainnya</option>
                    </select>
                    <select name="" id="" class="form-select mb-5">
                        <option value="">-- Tampilkan Data Berdasarkan --</option>
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
                                <th>NIK</th>
                                <th>Nama Peserta</th>
                                <th>Usia</th>
                                <th>Vaksin 1</th>
                                <th>Vaksin 2</th>
                                <th>Jenis Vaksin</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100000</td>
                                <td>Ricky</td>
                                <td>20</td>
                                <td>20-6-2021</td>
                                <td>20-9-2021</td>
                                <td>Astrazeneca</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>200000</td>
                                <td>Adit</td>
                                <td>21</td>
                                <td>19-6-2021</td>
                                <td>19-9-2021</td>
                                <td>Sinovac</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>300000</td>
                                <td>Yoga</td>
                                <td>21</td>
                                <td>18-6-2021</td>
                                <td>18-9-2021</td>
                                <td>Sinovac</td>
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
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection