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
                    <select name="" id="program" class="form-select mb-3">
                        <option value="">-- Pilih Program vaksinasi --</option>
                        <option value="covid">Covid-19</option>
                        <option value="lainnya">Vaksin lainnya</option>
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
                <div id="covid" class="hidden">
                    <table class="table table-striped" id="table_covid">
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
                            <tr>
                                <td>400000</td>
                                <td>Theo</td>
                                <td>20</td>
                                <td>25-6-2021</td>
                                <td>25-9-2021</td>
                                <td>Astrazeneca</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>Arifin</td>
                                <td>19</td>
                                <td>30-6-2021</td>
                                <td>30-9-2021</td>
                                <td>Sinovac</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>600000</td>
                                <td>Denis</td>
                                <td>21</td>
                                <td>02-7-2021</td>
                                <td>02-10-2021</td>
                                <td>Sinovac</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>700000</td>
                                <td>Kevin</td>
                                <td>21</td>
                                <td>05-7-2021</td>
                                <td>05-10-2021</td>
                                <td>Astrazeneca</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>800000</td>
                                <td>Ivan</td>
                                <td>22</td>
                                <td>12-7-2021</td>
                                <td>12-10-2021</td>
                                <td>Sinovac</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>900000</td>
                                <td>Bryan</td>
                                <td>22</td>
                                <td>18-7-2021</td>
                                <td>18-10-2021</td>
                                <td>Astrazeneca</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>1100000</td>
                                <td>Budi</td>
                                <td>25</td>
                                <td>21-7-2021</td>
                                <td>21-10-2021</td>
                                <td>Astrazeneca</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="lainnya" class="hidden">
                    <table class="table table-striped" id="table_lainnya">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama Peserta</th>
                                <th>Usia</th>
                                <th>Tgl. Vaksin</th>
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
                                <td>Campak</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>200000</td>
                                <td>Adit</td>
                                <td>21</td>
                                <td>19-6-2021</td>
                                <td>Influenza</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>300000</td>
                                <td>Yoga</td>
                                <td>21</td>
                                <td>18-6-2021</td>
                                <td>Varisela</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>400000</td>
                                <td>Theo</td>
                                <td>20</td>
                                <td>25-6-2021</td>
                                <td>Hepatitis A</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>Arifin</td>
                                <td>19</td>
                                <td>30-6-2021</td>
                                <td>Campak</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>600000</td>
                                <td>Denis</td>
                                <td>21</td>
                                <td>02-7-2021</td>
                                <td>Hepatitis A</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>700000</td>
                                <td>Kevin</td>
                                <td>21</td>
                                <td>05-7-2021</td>
                                <td>Pneumokokus</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>800000</td>
                                <td>Ivan</td>
                                <td>22</td>
                                <td>12-7-2021</td>
                                <td>Varisela</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>900000</td>
                                <td>Bryan</td>
                                <td>22</td>
                                <td>18-7-2021</td>
                                <td>Varisela</td>
                                <td><button type="button" class="btn btn-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>1100000</td>
                                <td>Budi</td>
                                <td>25</td>
                                <td>21-7-2021</td>
                                <td>Campak</td>
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
            $('#table_covid').DataTable();
            $('#table_lainnya').DataTable();
        } );
        $(document).on('change','#program', function(){
            var vaksin = $('#program').val();
            if(vaksin == "covid"){
                $('#covid').removeClass("hidden");
                $('#lainnya').addClass("hidden");
            }
            else{
                $('#covid').addClass("hidden");
                $('#lainnya').removeClass("hidden");
            }
        });
    </script>
@endsection