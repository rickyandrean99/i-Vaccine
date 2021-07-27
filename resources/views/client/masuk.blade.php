@extends('layout.client')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="card mt-5" style="border: solid black 2px">
                    <div class="card-body row">
                        <div class="col-8 d-grid gap-2 mx-auto">
                            <h2 class="">MASUK</h2>
                            <div>===================================================</div> <br>
                            <form action="" method="post">
                                <label for="" class="form-label"> Email: </label>
                                     <input type="email" class="form-control">
                                <label for="" class="form-label"> Password: </label>
                                     <input type="password" class="form-control"> <br>
                                <div class="d-flex justify-content-around">
                                    <label for="">
                                    <input type="checkbox"> Ingat Password
                                    </label>
                                    <a href="">Lupa Password</a>
                                </div>
                                <br>
                                <button class="btn btn-primary d-grid gap-2 mx-auto col-6" type="submit">MASUK</button>
                            </form> <br>
                        </div>
                        <div class="col-3 align-self-center" style="margin-left:3vw;">
                            <h4>Belum Punya Akun?</h4>
                            <a href="" class="btn btn-primary"> Daftar Sekarang</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection