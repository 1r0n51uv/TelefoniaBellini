@extends('layouts.master')

@section('content')



    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

        <div class="row" style="margin-left: 1%; margin-top: 1%; width: 95%;">
            <div class="col-12">
                <div class="container-fluid">

                    <div class="row content" style="">
                        <div class="col-sm-5 sidenav">
                            <h4>Pics</h4>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active" style="background-color: white">
                                        <img class="d-block" src="{{ $specification->pic1 }}" alt="First slide" style="width: 60%; display:block; margin:auto;">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                    <div class="carousel-item" style="background-color: white;">
                                        <img class="d-block" src="{{ $specification->pic2 }}" alt="Second slide" style="width: 60%; display:block; margin:auto;">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                    <div class="carousel-item" style="background-color: white">
                                        <img class="d-block" src="{{ $specification->pic3 }}" alt="Third slide" style="width: 60%; display:block; margin:auto;">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <i class="now-ui-icons arrows-1_minimal-left" style="color: black"></i>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <i class="now-ui-icons arrows-1_minimal-right" style="color: black"></i>
                                </a>
                            </div>
                            <ul class="nav nav-pills nav-stacked">
                            </ul><br>
                            <div class="input-group">
                                <span class="input-group-btn"></span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h4><small>CARATTERISTICHE TELEFONO</small></h4>
                            <hr>

                            <h2>{{ $specification->brand }} {{ $specification->model }}</h2>

                            <div style="font-size: 80%">
                                <div class="row">
                                    <div class="col-6">

                                        <h5 class="card-text"><i class=""></i><b>Marca: </b> {{ $specification->brand}} </h5>
                                        <h5 class="card-text"><i class=""></i><b>Modello:</b> {{ $specification->model}}</h5>
                                        <h5 class="card-text"><i class=""></i><b>Peso:</b> {{ $specification->weight}}</h5>
                                        <h5 class="card-text"><i class=""></i><b>Memoria:</b> {{ $specification->memory}}</h5>
                                        <h5 class="card-text"><i class=""></i><b>Sistema Operativo:</b> {{ $specification->system}}</h5>
                                        <h5 class="card-text"><i class=""></i><b>Processore:</b> {{ $specification->processor}}</h5>
                                        <h5 class="card-text"><i class=""></i><b>Dimensione Schermo:</b> {{ $specification->screen}}</h5>

                                    </div>
                                    <br>
                                    <div class="col-6">
                                        <h5 class="card-text"><i class=""></i><b>Schermo:</b> {{ $specification->display}}</h5>
                                        <h5 class="card-text"><i class=""></i><b>Risoluzione Schermo:</b> {{ $specification->resolution}}</h5>
                                        <h5 class="card-text"><i class=""></i><b>Fotocamera:</b> {{ $specification->camera}}</h5>
                                        <a href="/addToCart/{{$specification->id}}"><button class="btn btn-shop" type="button" style="font-size: 100%">
                                                <i class="fas fa-shopping-cart" style="font-size: 150%"></i> Aggiungi al carrello
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

    </div>








@endsection