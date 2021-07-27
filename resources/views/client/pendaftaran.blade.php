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
                    <div class="progress mt-3">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" id="step-bar"></div>
                    </div>
                </div>

                <div class="col-3 text-center" style="z-index: 99">
                    <button type="button" class="btn btn-primary" style="border-radius: 100%; width: 50px; height: 50px;"><span class="h4">1</span></button>
                </div>

                <div class="col-3 text-center" style="z-index: 99">
                    <button type="button" class="btn btn-primary" style="border-radius: 100%; width: 50px; height: 50px;"><span class="h4">2</span></button>
                </div>

                <div class="col-3 text-center" style="z-index: 99">
                    <button type="button" class="btn btn-primary" style="border-radius: 100%; width: 50px; height: 50px;"><span class="h4">3</span></button>
                </div>

                <div class="col-3 text-center" style="z-index: 99">
                    <button type="button" class="btn btn-primary" style="border-radius: 100%; width: 50px; height: 50px;"><span class="h4">4</span></button>
                </div>
            </div>

            <div class="content-wrapper mt-3 pt-4">
                <div class="mt-5 content-part" id="content-step-1">
                    <div class="card w-100">
                        <div class="card-body pt-4">
                            <h2 class="card-title text-center mb-5">Pilih Vaksin</h2>
                            
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

                <div class="mt-5 content-part" id="content-step-2">
                    <div class="card w-100">
                        <div class="card-body pt-4">
                            <h2 class="card-title text-center mb-5">Pilih Lokasi Vaksin</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Saat load halaman
        hideContent();
        $('#content-step-1').show();

        function hideContent() {
            $('#content-step-1').hide();
            $('#content-step-2').hide();
            $('#content-step-3').hide();
            $('#content-step-4').hide();
        }

        // Pindah ke step 2
        $(document).on('click', '.pilih-vaksin', function() {
            hideContent();
            $('#content-step-2').show();
            $('#step-bar').css('width', '50%');
        });

        // Pindah ke step 3
        // $(document).on('click', '.pilih-vaksin', function() {
        //     hideContent();
        //     $('#content-step-3').show();
        //     $('#step-bar').css('width', '75%');
        // });
    </script>
@endsection