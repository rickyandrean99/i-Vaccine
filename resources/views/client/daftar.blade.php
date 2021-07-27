@extends('layout.client')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="card mt-5" style="border: solid black 2px">
                    <div class="card-body row">
                        <div class="col-4 align-self-center" style="margin-left:3vw;">
                            <h4>Sudah Punya Akun?</h4>
                            <a href="" class="btn btn-primary"> Masuk Sekarang</a>
                        </div>  
                        <div class="col-7 mb-3">
                            <h2 class="float-end">DAFTAR</h2>
                            <div class="clearfix"></div>
                            <div>===================================================</div> <br>
                            <form action="" method="post">
                                <label for="" class="form-label"> Nama: </label>
                                     <input type="text" class="form-control">
                                <label for="" class="form-label"> Email: </label>
                                     <input type="email" class="form-control">
                                <label for="" class="form-label"> Password: </label>
                                     <input type="password" class="form-control">
                                <label for="" class="form-label"> Ulangi Password: </label>
                                     <input type="password" class="form-control"> <br>
                                <button class="btn btn-primary" type="submit">Daftar Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection