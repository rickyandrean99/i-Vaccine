@extends('layout.client')

@section('content')
    <div class="container">
        <div class="profil-wrapper bg-light" style="height: 1000px">
            <div class="card w-100 bg-light border-0">
                <div class="card-body pt-5">
                    <h2 class="card-title text-center mb-5 rubik-medium">Data Diri</h2>
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <!-- Photo by Spencer Selover from Pexels -->
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

                            <a href="{{ route('beranda') }}"><button type="button" class="btn btn-success ps-4 pe-4 pt-2 pb-2 mt-3 mb-1 float-end" id="btn-daftar-vaksin"><span class="h5">Simpan</span></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection