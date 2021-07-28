@extends('layout.client')

@section('content')
    <div class="container-fluid bg-light">
        <div class="row justify-content-center">
            <div class="col-11 d-flex flex-column justify-content-center" style="height:87vh;">
                <div class="card">
                    <div class="card-body row p-5">
                        <div class="col-4 d-flex align-items-center justify-content-center flex-column border-start-1">
                            <div class="h2 rubik-medium">Sudah Punya Akun?</div>
                            <a href="{{ route('masuk') }}" class="btn btn-primary p-2 ps-4 pe-4 mt-4"><span class="rubik-medium h5">Masuk Sekarang</span></a>
                        </div>

                        <div class="col-8">
                            <h2 class="rubik-medium text-end">DAFTAR</h2>
                            <hr class="mb-5">

                            <div class="form-floating mb-4">
                                <input type="text" class="form-control rubik-medium" id="nama" placeholder="Nama">
                                <label for="nama">Nama</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="email" class="form-control rubik-medium" id="email" placeholder="Email">
                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" class="form-control rubik-medium" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" class="form-control rubik-medium" id="password" placeholder="Ulangi Password">
                                <label for="password">Ulangi Password</label>
                            </div>

                            <div class="mt-5">
                               <a href="{{ route('masuk') }}"><button class="btn btn-primary col-6 w-100 rubik-medium p-2" id="masuk-akun">DAFTAR</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection