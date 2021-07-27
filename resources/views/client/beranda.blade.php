@extends('layout.client')

@section('content')
    <section id="identity">
        <div class="container-fluid identity-wrapper rubik-medium">
            <div class="row mt-0 mt-md-5 justify-content-center justify-content-md-start">
                <div class="col-0 col-md-1"></div>
                <div class="col-11 col-md-9 col-lg-5 display-3">i-Vaccine</div>
            </div>

            <div class="row pb-4 pb-lg-5 pt-4 pt-lg-5 justify-content-center justify-content-md-start">
                <div class="col-0 col-md-1"></div>
                <div class="col-11 col-md-9 col-lg-5 identity-description">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt enim hic iusto, eveniet, praesentium fugiat ipsum distinctio asperiores autem facilis quia ab quaerat inventore libero accusantium sequi facere, sapiente molestias harum suscipit dolores corporis voluptatum? Doloribus, sit quidem odio corporis laudantium provident culpa veritatis quibusdam molestiae perferendis repellat eum eligendi ullam ipsam, illo explicabo quia mollitia iure voluptates est ea autem dignissimos exercitationem beatae. Odio magni totam nihil, consequatur atque blanditiis ipsa earum quisquam numquam!
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
                <div class="col-11 col-lg-10 text-left text-md-center daftar-vaksin-deskripsi">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit facilis ut, aspernatur animi consequuntur itaque officiis, maiores corporis eius qui dolores inventore excepturi accusamus ad dolor delectus, sint esse! Sunt nisi voluptatem minima quam veniam esse repudiandae, labore eveniet. Illo voluptates recusandae alias molestias iusto earum adipisci? Corporis, obcaecati vitae, architecto magni placeat dolorem mollitia cupiditate autem harum iste, at officiis consequatur animi? Id tempora, at illo quia blanditiis magnam delectus sed assumenda magni hic.
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
                            <div class="text-center h1 mt-5 mt-md-5 mb-4 mb-md-5">16.820.012</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4">
                <a href="#"><button type="button" class="btn btn-success p-2 btn-daftar-vaksin"><span class="h5">Daftar Sekarang</span></button></a>
            </div>
        </div>
    </section>

    <section id="peta-sebaran">
        <div class="container daftar-vaksin-wrapper rubik-medium pt-5 pb-5">
            <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Peta Sebaran Vaksinasi COVID-19</div>

            <div class="row mb-4 justify-content-center">
                <div class="col-11 col-md-12 bg-primary text-white text-center h4 d-flex align-items-center justify-content-center" style="min-height: 500px">
                    Google Maps API + Python Matplotlib
                </div>
            </div>
        </div>
    </section>

    <section id="grafik-sebaran" class="bg-light">
        <div class="container daftar-vaksin-wrapper rubik-medium pt-5 pb-5">
            <div class="h1 text-center mb-5 mb-md-5 mt-1 mt-md-4 header-section">Grafik Vaksinasi COVID-19</div>

            <div class="row mb-4 justify-content-center">
                <div class="col-11 col-md-12 bg-primary text-white h4 text-center d-flex align-items-center justify-content-center" style="min-height: 500px">
                    Python Matplotlib
                </div>
            </div>
        </div>
    </section>
@endsection