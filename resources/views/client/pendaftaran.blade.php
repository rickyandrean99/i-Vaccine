@extends('layout.client')

@section('content')
    <div class="container" style="height: 1000px">
        <div class="pendaftaran-wrapper pt-5 pb-5">
            <div class="row" style="position: relative">
                <div class="col-12 text-center" style="position: absolute">
                    <div class="progress mt-3">
                        <div class="progress-bar" role="progressbar" style="width: 25%;"></div>
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

            <div class="content-wrapper mt-5 pt-4">
                <div class="row mt-5 pt-5 bg-primary" id="content-step-1">
                    Punten Gopud
                </div>

                <!-- <div class="row mt-5 pt-5 bg-primary" id="content-step-2">
                    Punten Gopud
                </div> -->
            </div>
        </div>
    </div>
@endsection