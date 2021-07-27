@extends('layout.client')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11" style="height:83vh;">
                <div class="card mt-5" style="border: solid black 2px" >
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
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingnama" placeholder="">
                                    <label for="floatingnama">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingemail" placeholder="">
                                    <label for="floatingemail">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingpassword" placeholder="">
                                    <label for="floatingpassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingUlangPassword" placeholder="">
                                    <label for="floatingUlangPassword">Ulangi Password</label>
                                </div>
                                <button class="btn btn-primary" type="submit">Daftar Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection