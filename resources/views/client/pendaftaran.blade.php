@extends('layout.client')

<style>
    .content-part {
        transition: 1s;
    }
</style>

@section('content')
    <div class="container">
        <div class="pendaftaran-wrapper pt-5 pb-5">
            <div class="row" style="position: relative">
                <div class="col-12 text-center" style="position: absolute">
                    <div class="progress mt-3 w-75" style="margin: auto">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 0%" id="step-bar"></div>
                    </div>
                </div>

                <div class="col-3 text-center" style="z-index: 99">
                    <button type="button" class="btn btn-success" style="border-radius: 100%; width: 50px; height: 50px; opacity: 1" id="btn-step-1" disabled><span class="h4">1</span></button>
                    <div class="rubik-medium h5 mt-3 text-dark">Pilih Jenis Vaksin</div>
                </div>

                <div class="col-3 text-center" style="z-index: 99">
                    <button type="button" class="btn btn-secondary" style="border-radius: 100%; width: 50px; height: 50px; opacity: 1" id="btn-step-2" disabled><span class="h4">2</span></button>
                    <div class="rubik-medium h5 mt-3">Pilih Lokasi Vaksin</div>
                </div>

                <div class="col-3 text-center" style="z-index: 99">
                    <button type="button" class="btn btn-secondary" style="border-radius: 100%; width: 50px; height: 50px; opacity: 1" id="btn-step-3" disabled><span class="h4">3</span></button>
                    <div class="rubik-medium h5 mt-3">Lengkapi Data Diri</div>
                </div>

                <div class="col-3 text-center" style="z-index: 99">
                    <button type="button" class="btn btn-secondary" style="border-radius: 100%; width: 50px; height: 50px; opacity: 1" id="btn-step-4" disabled><span class="h4">4</span></button>
                    <div class="rubik-medium h5 mt-3">Konfirmasi Pendaftaran</div>
                </div>
            </div>

            <!-- Step 1 : Menentukan jenis vaksin -->
            <div class="content-wrapper mt-3 pt-4">
                <div class="mt-5 content-part bg-light" id="content-step-1">
                    <div class="card w-100 bg-light border-0">
                        <div class="card-body pt-4">
                            <h2 class="card-title text-center mb-5">Pilih Jenis Vaksin</h2>
                            
                            <div class="row justify-content-center">
                                @php $arr_vaksin = ['Vaksin COVID-19', 'Vaksin Hepatitis', 'Vaksin PrPP', 'Vaksin Cacar']; @endphp
                                @for ($i = 0; $i < count($arr_vaksin); $i++) 
                                    <div class="col-5 mb-4">
                                        <div class="card w-100" style="height: 300px">
                                            <div class="card-body p-0">
                                                <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center pilih-vaksin" style="height: 100%">
                                                    <div class="h3 rubik-medium">{{ $arr_vaksin[$i] }}</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 : Menentukan lokasi vaksin -->
                <div class="mt-5 content-part bg-light" id="content-step-2">
                    <div class="card w-100 bg-light border-0">
                        <div class="card-body pt-4">
                            <h2 class="card-title text-center mb-5 rubik-medium">Pilih Lokasi Vaksin</h2>
                            <input type="text" class="form-control rubik-medium mb-5 p-2 ps-4 pe-4" placeholder="Cari penyelenggara...">
                            <div class="row">
                                @for($i = 0; $i < 4; $i++)
                                    <div class="col-12 mb-4">
                                        <div class="card w-100" style="height: 300px; max-height: 300px">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-3 p-0">
                                                        <div class="d-flex align-items-center justify-content-center" style="height: 300px; max-height: 300px">
                                                            <img src="{{ asset('assets/img/baal.jpg') }}" alt="img-penyelenggara" style="height: 270px">
                                                        </div>
                                                    </div>
                                                    <div class="col-9 d-flex flex-column pe-4" style="position: relative">
                                                        <div class="rubik-medium h5 mt-4">Nama penyelenggara</div>
                                                        <div class="rubik-medium mt-3">
                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, esse odit exercitationem ipsum id enim atque eos, sed ex facere accusamus, reprehenderit et voluptatem voluptate velit suscipit fugit quaerat. Ut ex nam minus minima quis eius nobis laboriosam quidem ipsa? (Nanti limit katanya)
                                                        </div>
                                                        <div class="row rubik-medium mt-4">
                                                            <div class="col-4">
                                                                Jam Kerja
                                                            </div>
                                                            <div class="col-4">
                                                                Sisa Vaksin
                                                            </div>
                                                        </div>

                                                        <button type="button" class="btn btn-primary ps-4 pe-4 pt-2 pb-2 mb-4 me-5 pilih-lokasi-vaksin" style="width: fit-content; position: absolute; bottom: 0; right: 0"><span class="h5">Pilih</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <button type="button" class="btn btn-danger ps-4 pe-4 pt-2 pb-2 mt-3 mb-1" id="btn-back-step2"><span class="h5">Kembali</span></button>
                        </div>
                    </div>
                </div>

                <!-- Step 3 : Mengisi data diri -->
                <div class="mt-5 content-part bg-light" id="content-step-3">
                    <div class="card w-100 bg-light border-0">
                        <div class="card-body pt-4">
                            <h2 class="card-title text-center mb-5 rubik-medium">Lengkapi Data Diri</h2>
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('assets/img/baal.jpg') }}" alt="" style="width: 95%">
                                    <div>
                                        <label for="files" class="btn text-decoration-underline" style="font-weight:500">Ubah foto</label>
                                        <input id="files" style="visibility:hidden;" type="file">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="nik" class="form-label" style="font-weight: 500">NIK</label>
                                        <input type="text" class="form-control" id="nik">
                                    </div>

                                    <div class="mb-3">
                                        <label for="nama" class="form-label" style="font-weight: 500">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama">
                                    </div>

                                    <div class="mb-3">
                                        <label for="tempat-lahir" class="form-label" style="font-weight: 500">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat-lahir">
                                    </div>

                                    <div class="mb-3">
                                        <label for="tanggal-lahir" class="form-label" style="font-weight: 500">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label d-block" style="font-weight: 500">Jenis Kelamin</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" checked>
                                            <label class="form-check-label" for="pria">Pria</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita">
                                            <label class="form-check-label" for="wanita">Wanita</label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="agama" class="form-label" style="font-weight: 500">Agama</label>
                                        <select class="form-select" id="agama">
                                            <option selected disabled>-- Pilih Agama --</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="budha">Budha</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="pekerjaan" class="form-label" style="font-weight: 500">Pekerjaan</label>
                                        <select class="form-select" id="pekerjaan">
                                            <option selected disabled>-- Pilih Pekerjaan --</option>
                                            <option value="">Advokat</option>
                                            <option value="">Akuntan</option>
                                            <option value="">Apoteker</option>
                                            <option value="">Arsitek</option>
                                            <option value="">Desainer</option>
                                            <option value="">Direktur</option>
                                            <option value="">Dokter</option>
                                            <option value="">Dosen</option>
                                            <option value="">Diplomat</option>
                                            <option value="">Editor</option>
                                            <option value="">Fotografer</option>
                                            <option value="">Guru</option>
                                            <option value="">Insinyur</option>
                                            <option value="">Jaksa</option>
                                            <option value="">Jurnalis</option>
                                            <option value="">Karyawan Swasta</option>
                                            <option value="">Konsultan</option>
                                            <option value="">Manajer</option>
                                            <option value="">Nelayan</option>
                                            <option value="">Notaris</option>
                                            <option value="">Pedagang</option>
                                            <option value="">PNS</option>
                                            <option value="">Pemrogram</option>
                                            <option value="">Pengacara</option>
                                            <option value="">Pengusaha</option>
                                            <option value="">Penulis</option>
                                            <option value="">Polisi</option>
                                            <option value="">Psikiater</option>
                                            <option value="">Psikolog</option>
                                            <option value="">Pramugara/i</option>
                                            <option value="">Petani</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat" class="form-label" style="font-weight: 500">Alamat</label>
                                        <textarea class="form-control" id="alamat" rows="4"></textarea>
                                    </div>

                                    <button type="button" class="btn btn-danger ps-4 pe-4 pt-2 pb-2 mt-3 mb-1" id="btn-back-step3"><span class="h5">Kembali</span></button>
                                    <button type="button" class="btn btn-success ps-4 pe-4 pt-2 pb-2 mt-3 mb-1 float-end" id="btn-daftar-vaksin"><span class="h5">Daftar</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 : Konfirmasi Pendaftaran -->
                <div class="mt-5 content-part bg-light pt-4 pb-4" id="content-step-4">
                    <div class="card w-100 bg-light border-0">
                        <div class="card-body pt-4">
                            <h2 class="card-title text-center mb-5 rubik-medium">Konfirmasi Pendaftaran</h2>
                            <div class="row justify-content-center mb-1">
                                <div class="text-center h5 col-8" style="line-height: 1.9rem">Dengan ini saudara/i <b><u>nama</u></b> mendaftarkan diri dalam program vaksinasi nasional yang bertempat di <b><u>nama penyelenggara</u></b> dalam rangka mensukseskan program vaksinasi nasional yang diselenggarakan Pemerintah RI</div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-success ps-4 pe-4 pt-2 pb-2 mt-4 mb-1 w-25" id="btn-konfirmasi-daftar"><span class="h5">Daftar</span></button>
                            </div>
                            <div class="text-center mt-3"><button type="button" class="btn w-25" style="outline: none; box-shadow: none;" id="btn-back-step4"><span class="text-danger rubik-medium h6">Kembali</span></button></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal-success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body h4 p-5 pb-4 row justify-content-center">
                            <div class="text-center"><img src="{{ asset('assets/img/confirm-done.png') }}" class="w-25"></div>
                            <div class="mt-4 col-10 text-center rubik-medium" style="line-height: 2.3rem">Selamat, pendaftaran vaksin berhasil dilakukan!</div>
                        </div>

                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-success w-100" id="btn-konfirmasi-berhasil">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Saat load halaman
        hideContent();
        $('#content-step-1').fadeTo(300, 1);

        // Sembunyikan semua step progress
        function hideContent() {
            $('#content-step-1').hide();
            $('#content-step-2').hide();
            $('#content-step-3').hide();
            $('#content-step-4').hide();
        }

        // Step 1 > Step 2
        $(document).on('click', '.pilih-vaksin', function() {
            hideContent();
            window.scrollTo(0, 0);
            $('#step-bar').css('width', '33%');
            $('#btn-step-2').removeClass('btn-secondary');
            $('#btn-step-2').addClass('btn-success');
            $('#btn-step-1').html("<img src='{{ asset('assets/img/yay.png') }}' class='w-100'>");
            $('#content-step-2').fadeTo(300, 1);
        });

        // Step 2 > Step 1
        $(document).on('click', '#btn-back-step2', function() {
            hideContent();
            window.scrollTo(0, 0);
            $('#step-bar').css('width', '0%');
            $('#btn-step-2').removeClass('btn-success');
            $('#btn-step-2').addClass('btn-secondary');
            $('#btn-step-1').html("<span class='h4'>1</span>");
            $('#content-step-1').fadeTo(300, 1);
        });

        // Step 2 > Step 3
        $(document).on('click', '.pilih-lokasi-vaksin', function() {
            hideContent();
            window.scrollTo(0, 0);
            $('#step-bar').css('width', '66%');
            $('#btn-step-3').addClass('btn-success');
            $('#btn-step-3').removeClass('btn-secondary');
            $('#btn-step-2').html("<img src='{{ asset('assets/img/yay.png') }}' class='w-100'>");
            $('#content-step-3').fadeTo(300, 1);
        });

        // Step 3 > Step 2
        $(document).on('click', '#btn-back-step3', function() {
            hideContent();
            window.scrollTo(0, 0);
            $('#step-bar').css('width', '33%');
            $('#btn-step-3').removeClass('btn-success');
            $('#btn-step-3').addClass('btn-secondary');
            $('#btn-step-2').html("<span class='h4'>2</span>");
            $('#content-step-2').fadeTo(300, 1);
        });

        // Step 3 > Step 4
        $(document).on('click', '#btn-daftar-vaksin', function() {
            hideContent();
            window.scrollTo(0, 0);
            $('#step-bar').css('width', '100%');
            $('#btn-step-4').addClass('btn-success');
            $('#btn-step-4').removeClass('btn-secondary');
            $('#btn-step-3').html("<img src='{{ asset('assets/img/yay.png') }}' class='w-100'>");
            $('#content-step-4').fadeTo(300, 1);
        });

        // Step 4 > Step 3
        $(document).on('click', '#btn-back-step4', function() {
            hideContent();
            window.scrollTo(0, 0);
            $('#step-bar').css('width', '66%');
            $('#btn-step-4').removeClass('btn-success');
            $('#btn-step-4').addClass('btn-secondary');
            $('#btn-step-3').html("<span class='h4'>3</span>");
            $('#content-step-3').fadeTo(300, 1);
        });

        // Konfirmasi pendaftaran
        $(document).on('click', '#btn-konfirmasi-daftar', function() {
            window.scrollTo(0, 0);
            $('#btn-step-4').html("<img src='{{ asset('assets/img/yay.png') }}' class='w-100'>");
            
            // Modal berhasil
            $('#modal-success').modal('show');
        });

        // Redirect ke halaman tiket
        $(document).on('click', '#btn-konfirmasi-berhasil', function() {
            window.location = "/antrian";
        });
    </script>
@endsection