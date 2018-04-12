@extends('layouts.master')

@section('content')

    <div class="section" id="carousel" style="background-image: url('assets/img/wall.png'); background-size: cover; background-position: top center; min-height: 700px;">

            <div class="row" style="margin-top: 4%; margin-left: -1%;">
                <div class="col-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block" src="assets/img/s9.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Samsung Galaxy S9</h5>
                                    <button class="btn btn-danger" style="background-color: #9097A2;">Shop Now</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/img/iphone10.png" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>I-Phone X</h5>
                                    <button class="btn btn-danger" style="background-color: #9097A2;">Shop Now</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/img/wall2.png" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Samsung Galaxy S8 & 8+</h5>
                                    <button class="btn btn-danger" style="background-color: #9097A2;">Shop Now</button>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3" style="">
                    <div class="card" style="background-color: whitesmoke;">

                        <div class="card-header">
                            <span class="badge badge-danger" style="border-color: #9097A2; color: black;">Novità</span>
                        </div>

                        <img class="card-img-top" src="assets/image/x.png" alt="Card image cap" style="width: 60%; display:block; margin:auto; padding-top: 5%">
                        <div class="card-body" style="text-align:center;">

                            <h5 class="card-text"><i class="fas fa-mobile-alt"></i> IPhone X</h5>
                            <h5 class="card-text"><i class="far fa-hdd"></i> 256 GB</h5>
                            <h5 class="card-text"><i class="fas fa-paint-brush"></i> Black</h5>
                            <h5 class="card-text"><i class="far fa-money-bill-alt"></i> 999€</h5>

                        </div>

                        <div class="card-footer text-muted">
                            <div class="text-center">
                                <a href="/shop2"><button class="btn btn-primary btn-round" type="button" style="background-color:#9097A2;">
                                    <i class="fas fa-shopping-cart" style="font-size:120%; margin-top:2%"></i> Aggiugi al carrello
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection