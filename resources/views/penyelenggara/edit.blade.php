@extends('layout.penyelenggara')
    
@section('content')
<div class="row ">
        <div class="col-12 mt-5 me-3">
            <div class="mb-5 mb-md-5 mt-1 mt-md-4">
                <div class="card ms-5 me-5">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Nama Instansi</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Alamat</label>
                                </div>
                                <div class="">
                                    <label for="">Deskripsi</label>
                                    <textarea rows="4" cols="50" class="form-control" name="deskripsi" required> </textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">TUTUP</button>
                                <button class="btn btn-success ms-3" type="submit">SIMPAN</button>
                            </div>
                            
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