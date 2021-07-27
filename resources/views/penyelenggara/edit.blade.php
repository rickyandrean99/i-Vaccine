@extends('layout.penyelenggara')
    
@section('content')
<div class="row ">
        <div class="col-12 mt-5 me-3">
            <div class="mb-5 mb-md-5 mt-1 mt-md-4">
                <div class="card ms-5 me-5">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="col-sm-10 mb-3">
                                <label for="" class="form-label"> Nama Instansi: </label>
                                    <input type="text" class="form-control ">
                                <label for="" class="form-label"> Alamat: </label>
                                    <input type="email" class="form-control">
                                <label for="" class="form-label"> Deskripsi: </label>
                                    <input type="password" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Daftar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#nav-edit').addClass('active');
    </script>
@endsection