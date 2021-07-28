@extends('layout.penyelenggara')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<style>
    .hidden{
        display: none;
    }
</style>
@section('content')
    <div class="row">   
        <div class="col-12 mt-5">
            <div class="text-center mb-5 mb-md-5 mt-1 mt-md-4 pe-5 ps-5">
                <form action="" method="post">
                    <select name="" id="data-vaksin" class="form-select mb-3">
                        <option value="masuk"> Pilih Data vaksin [Masuk] </option>
                        <option value="keluar"> Pilih Data vaksin [Keluar] </option>
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
                <div id="table-masuk">
                    <table class="table table-striped" id="table_id_masuk">
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
                            <tr>
                                <td>32425252</td>
                                <td>11-5-21</td>
                                <td>campak</td>
                                <td>1000</td>
                                <td>10-5-22</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>5646435</td>
                                <td>21-4-21</td>
                                <td>Astrazeneca</td>
                                <td>5000</td>
                                <td>22-8-21</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>4532442</td>
                                <td>28-5-21</td>
                                <td>Sinovac</td>
                                <td>2000</td>
                                <td>10-7-22</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>32425252</td>
                                <td>11-6-21</td>
                                <td>campak</td>
                                <td>600</td>
                                <td>10-6-22</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>4324234</td>
                                <td>01-7-21</td>
                                <td>campak</td>
                                <td>100</td>
                                <td>30-4-22</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>342424</td>
                                <td>11-7-21</td>
                                <td>Sinovac</td>
                                <td>1000</td>
                                <td>10-9-21</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>5675643</td>
                                <td>21-7-21</td>
                                <td>Sinovac</td>
                                <td>1000</td>
                                <td>20-9-21</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="hidden" id="table-keluar">
                    <table class="table table-striped" id="table_id_keluar">
                        <thead>
                            <tr>
                                <th>Tgl. Keluar</th>
                                <th>Jenis</th>
                                <th>Jumlah</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10-2-20</td>
                                <td>Sinovac</td>
                                <td>2000</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>25-2-21</td>
                                <td>Astrazeneca</td>
                                <td>1000</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>11-2-21</td>
                                <td>Sinovac</td>
                                <td>3000</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>21-2-21</td>
                                <td>Campak</td>
                                <td>200</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>25-2-21</td>
                                <td>Astrazeneca</td>
                                <td>1000</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>01-6-21</td>
                                <td>Sinovac</td>
                                <td>3000</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>21-6-21</td>
                                <td>Sinovac</td>
                                <td>2500</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>30-6-21</td>
                                <td>Astrazeneca</td>
                                <td>3000</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>02-7-21</td>
                                <td>Astrazeneca</td>
                                <td>4000</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>12-7-21</td>
                                <td>Sinovac</td>
                                <td>5000</td>
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
            $('#table_id_keluar').DataTable();
        } );
        $(document).ready( function () {
            $('#table_id_masuk').DataTable();
        } );
        $(document).on('change','#data-vaksin', function(){
            var vaksin = $('#data-vaksin').val();
            if(vaksin == "masuk"){
                $('#table-masuk').removeClass("hidden");
                $('#table-keluar').addClass("hidden");
            }
            else{
                $('#table-masuk').addClass("hidden");
                $('#table-keluar').removeClass("hidden");
            }
        });

    </script>
@endsection