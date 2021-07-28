@extends('layout.client')
<style>
    #identity {
        background: url('{{ asset('/assets/img/background.png') }}');
    }
</style>
@section('content')
    <!-- Sumber background: Freepik -->
    <!-- <a href="http://www.freepik.com">Designed by Freepik</a> -->
    <section id="identity">
        <div class="container-fluid identity-wrapper rubik-medium">
            <div class="row mt-0 mt-md-5 justify-content-center justify-content-md-start">
                <div class="col-0 col-md-1"></div>
                <div class="col-11 col-md-9 col-lg-5 display-3">i-Vaccine</div>
            </div>

            <div class="row pb-4 pb-lg-5 pt-4 pt-lg-5 justify-content-center justify-content-md-start">
                <div class="col-0 col-md-1"></div>
                <div class="col-11 col-md-9 col-lg-5 identity-description h4">
                    i-Vaccine merupakan aplikasi berbasis website yang memudahkan pengguna dalam melakukan pendaftaran berbagai jenis vaksin yang tersedia
                </div>
            </div>

            <div class="row justify-content-center justify-content-md-start">
                <div class="col-0 col-md-1"></div>
                <div class="col-11 col-md-9 col-lg-5 mb-5 mb-lg-0 identity-description">
                    <a href="#daftar-vaksin"><button type="button" class="btn btn-primary p-2 btn-mulai"><span class="h5">Mulai</span></button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="daftar-vaksin" class="bg-light">
        <div class="container daftar-vaksin-wrapper rubik-medium pt-5 pb-3">
            <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Daftar Vaksin COVID-19</div>
            
            <div class="row justify-content-center mb-5">
                <div class="col-11 col-lg-10 text-left text-md-center daftar-vaksin-deskripsi h5">
                    Pandemi COVID-19 yang tidak kunjung selesai membuat aktivitas masyarakat menjadi sangat terbatas. Ayo daftarkan dirimu untuk ikut dalam program vaksinasi COVID-19 untuk mencegah penyebaran dan melindungi keluarga tercinta
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-sm-11 col-md-11 col-lg-4 mb-5">
                    <div class="card w-100 bg-white border-0">
                        <div class="card-body">
                            <div class="text-center h2 mt-4 mt-md-5 mb-4 mb-md-4">Vaksin Pertama</div>
                            <div class="text-center h1 mt-5 mt-md-5 mb-4 mb-md-5">44.824.910</div>
                        </div>
                    </div>
                </div>

                <div class="col-0 col-sm-0 col-md-0 col-lg-1"></div>

                <div class="col-11 col-sm-11 col-md-11 col-lg-4 mb-5">
                    <div class="card w-100 bg-white border-0">
                        <div class="card-body">
                            <div class="text-center h2 mt-4 mt-md-5 mb-4 mb-md-4">Vaksin Kedua</div>
                            <div class="text-center h1 mt-5 mt-md-5 mb-4 mb-md-5">18.820.012</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4">
                @php $login = session()->get('login'); @endphp
                @if ($login)
                    <a href="{{ route('pendaftaran-vaksin') }}"><button type="button" class="btn btn-success p-2 btn-daftar-vaksin"><span class="h5">Daftar Sekarang</span></button></a>
                @else
                    <a href="{{ route('masuk') }}"><button type="button" class="btn btn-success p-2 btn-daftar-vaksin"><span class="h5">Daftar Sekarang</span></button></a>
                @endif
                
            </div>
        </div>
    </section>

    <section id="peta-sebaran">
        <div class="container daftar-vaksin-wrapper rubik-medium pt-5 pb-5">
            <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Peta Sebaran Vaksinasi COVID-19</div>

            <div class="row mb-4 justify-content-center">
                <div class="col-11 col-md-12 bg-secondary text-white text-center h4 d-flex align-items-center justify-content-center" style="min-height: 500px">
                    Peta Sebaran
                </div>
            </div>
        </div>
    </section>

    <section id="grafik-sebaran" class="bg-light">
        <div class="container daftar-vaksin-wrapper rubik-medium pt-5 pb-5">
            <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Grafik Vaksinasi COVID-19</div>

            <div class="row mb-4 justify-content-center">
                <div class="col-11 col-md-12 bg-secondary text-white h4 text-center d-flex align-items-center justify-content-center" style="min-height: 500px">
                    Grafik Vaksinasi
                </div>
            </div>
        </div>
    </section>
@endsection