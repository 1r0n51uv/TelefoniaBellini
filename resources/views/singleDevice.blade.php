@extends('layouts.master')

@section('content')



<div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

    <div class="row" style="margin-left: 1%; margin-top: 1%;">
<div class="col-12">
        <div class="container-fluid">

            <div class="row content">
                <div class="col-sm-5 sidenav">
                    <h4>Pics</h4>
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
                    <ul class="nav nav-pills nav-stacked">
                    </ul><br>
                    <div class="input-group">
                        <span class="input-group-btn">
                    </div>
                </div>

                <div class="col-sm-6">
                    <h4><small>CARATTERISTICHE TELEFONO</small></h4>
                    <hr>

                    <h2>{{ $phone->brand }} {{ $phone->model }}</h2>

                    <div style="font-size: 50%">
          <div class="row">
                        <div class="col-6">

                    <h5 class="card-text"><i class=""></i>Marca: {{ $specification->brand}} </h5>
                    <h5 class="card-text"><i class=""></i>Modello: {{ $specification->model}}</h5>
                    <h5 class="card-text"><i class=""></i>Peso: {{ $specification->weight}}</h5>
                    <h5 class="card-text"><i class=""></i>Memoria: {{ $specification->memory}}</h5>
                    <h5 class="card-text"><i class=""></i>Sistema Operativo: {{ $specification->system}}</h5>
                    <h5 class="card-text"><i class=""></i>Processore: {{ $specification->processor}}</h5>
                    <h5 class="card-text"><i class=""></i>Dimensione Schermo: {{ $specification->screen}}</h5>

                            </div>
                        <br>
                        <div class="col-6">
                    <h5 class="card-text"><i class=""></i>Schermo: {{ $specification->display}}</h5>
                    <h5 class="card-text"><i class=""></i>Risoluzione Schermo: {{ $specification->resolution}}</h5>
                    <h5 class="card-text"><i class=""></i>Fotocamera: {{ $specification->camera}}</h5>
                    <h5 class="card-text"><i class=""></i>Media Supportati: {{ $specification->media}}</h5>
                    <h5 class="card-text"><i class=""></i>Autofocus: {{ $specification->autofocus}}</h5>
                    <h5 class="card-text"><i class=""></i>Bluetooth: {{ $specification->bluetooth}}</h5>

                        </div>
                    </div>

                        <div class="row justify-content">
                            <div class="col-3">
                              <a href="/addToCart/{{$phone->id}}"><button class="btn btn-warning" type="button" style="margin-left: 188%; margin-top: 60%; font-size: 170%;">
                                    <i class="fas fa-shopping-cart" style="font-size:150%; margin-top:2%;"></i>Procedi All'acquisto
                                </button></a>
                            </div>
                        </div>


                            </div>
                        </div>
                    </div>

        </div>

</div>

    </div>

</div>








@endsection