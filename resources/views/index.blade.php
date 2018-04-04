@extends('layouts.master')

@section('content')

    <div class="section" id="carousel" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9">
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
                                    <button class="btn btn-danger">Shop Now</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/img/iphone10.png" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>I-Phone X</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/img/iphone8.png" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>I-phone 8 & 8+</h5>
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
            </div>
        </div>
    </div>
    @endsection