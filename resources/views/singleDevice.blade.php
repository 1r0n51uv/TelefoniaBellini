@extends('layouts.master')

@section('content')


            <div class="section" id="carousel" style="background-image: url('/assets/img/blurredimage-1.jpg')">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block" src="/assets/img/bg1.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Nature, United States</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block" src="/assets/img/bg1.jpg" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Somewhere Beyond, United States</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block" src="/assets/img/bg1.jpg" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Yellowstone National Park, United States</h5>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="section" style="background-image: url('/assets/img/cloud.png'); background-size: cover;">


<div class="row" style="margin-left: -1%;">


    <div class="col-md-3">
        <div class="card" style="background-color: transparent;">

            <div class="card-header" style="background-color: transparent;  border-color: grey;">
                <span class="badge badge-danger" style="border-color: grey; color: black">Caratteristiche Tecniche</span>
            </div>

            <img class="card-img-top"  style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">
            <div class="card-body" style="text-align:left;">

                <h5 class="card-text"><i class=""></i>Marca: {{ $specification->marca}}</h5>
                <h5 class="card-text"><i class=""></i>Modello: {{ $specification->model}}</h5>
                <h5 class="card-text"><i class=""></i>Peso: {{ $specification->peso}}</h5>


            </div>

            <div class="card-footer text-muted">

            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="card" style="background-color: transparent;">

            <div class="card-header" style="background-color: transparent;  border-color: grey;">
            </div>

            <img class="card-img-top"  style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">
            <div class="card-body" style="text-align:left;">

                <h5 class="card-text"><i class=""></i>Memoria: {{ $specification->memory}}</h5>
                <h5 class="card-text"><i class=""></i>Sistema Operativo: {{ $specification->sistem}}</h5>
                <h5 class="card-text"><i class=""></i>Processore: {{ $specification->processor}}</h5>


            </div>

            <div class="card-footer text-muted">

            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="card" style="background-color: transparent;">

            <div class="card-header" style="background-color: transparent;  border-color: grey;">
            </div>

            <img class="card-img-top"  style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">
            <div class="card-body" style="text-align:left;">

                <h5 class="card-text"><i class=""></i>Dimensione Schermo: {{ $specification->screen}}</h5>
                <h5 class="card-text"><i class=""></i>Schermo: {{ $specification->display}}</h5>
                <h5 class="card-text"><i class=""></i>Risoluzione Schermo: {{ $specification->resolution}}</h5>
                <h5 class="card-text"><i class=""></i>Fotocamera: {{ $specification->camera}}</h5>

            </div>

            <div class="card-footer text-muted">

            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="card" style="background-color: transparent;">

            <div class="card-header" style="background-color: transparent;  border-color: grey;">
            </div>

            <img class="card-img-top"  style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">
            <div class="card-body" style="text-align:left;">


                <h5 class="card-text"><i class=""></i>Media Supportati: {{ $specification->media}}</h5>
                <h5 class="card-text"><i class=""></i>Autofocus: {{ $specification->autofocus}}</h5>
                <h5 class="card-text"><i class=""></i>Bluetooth: {{ $specification->bluetooth}}</h5>



            </div>

            <div class="card-footer text-muted">

            </div>
        </div>


</div>


</div>
</div>


@endsection