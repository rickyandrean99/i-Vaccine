@extends('layout.client')

@section('content')
    <div class="container-fluid bg-light">
        <div class="row justify-content-center">
            <div class="col-11 d-flex flex-column justify-content-center" style="min-height:87vh;">
                <div class="card">
                    <div class="card-body row p-5">
                        <div class="col-8">
                            <h2 class="rubik-medium">MASUK</h2>
                            <hr class="mb-5">

                            <div class="form-floating mb-5">
                                <input type="email" class="form-control rubik-medium" id="email" placeholder="Email">
                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rubik-medium" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <div class="form-floating mb-3 form-inline">
                                <input type="checkbox" nama="remember" id="remember"><span class="ms-2" style="font-weight: 500">Ingat akun</span>
                                <span class="float-end me-5" style='cursor: pointer; text-decoration: underline; font-weight: 500'>Lupa password?</span>
                            </div>

                            <div class="mt-5">
                                <button class="btn btn-primary col-6 w-100 rubik-medium p-2" id="masuk-akun">MASUK</button>
                            </div>
                        </div>

                        <div class="col-4 d-flex align-items-center justify-content-center flex-column border-start-1">
                            <div class="h2 rubik-medium">Belum Punya Akun?</div>
                            <a href="{{ route('daftar') }}" class="btn btn-primary p-2 ps-4 pe-4 mt-4"><span class="rubik-medium h5">Daftar Sekarang</span></a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '#masuk-akun', function() {
            $.ajax({
                type: 'POST',
                url: '{{ route('session-login') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>'
                },
                success: function(data) {
                    window.location = "/";
                }
            });
        });
    </script>
@endsection