@extends('layouts.master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section('content')



    <div class="section"  style="background-image: url('./assets/img/blurredimage-1.jpg')">
        <div class="container">


                    <div class="row">
                        <div style="margin-left: 2%; margin-right: 2%; border-color: 1px red solid;">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#appleDevice">
                                        <i class="icofont icofont-brand-apple" style="height: 5%; color: black; font-size: 380%;"></i>
                                    </a>
                                </li>
                                <br>
                                <br>
                                <br>
                                <li class="nav-item">
                                    <a class="nav-link" href="#samsungDevice">
                                        <i class="icofont icofont-brand-samsung" style="height: 5%; color: black; font-size: 380%; color: blue;"></i>
                                    </a>
                                </li>
                                <br>
                                <br>
                                <br>
                                <li class="nav-item">
                                    <a class="nav-link" href="#samsungDevice" style="height: 5%; color: black; font-size: 380%; color: red">
                                        <i class="icofont icofont-brand-huawei"></i>
                                    </a>
                                </li>
                        </div>



                        @foreach ($phones as $phone)



                        <div class="col-3">



                            <div class="card" style="background-color: transparent;">

                                <div class="card-header" style="background-color: transparent;  border-color: grey;">
                                    <span class="badge badge-danger" style="border-color: grey; color: black">Novità</span>
                                </div>

                                <img class="card-img-top" src="{{ $phone->pic }}" alt="Card image cap" style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">
                                <div class="card-body" style="text-align:center;">

                                    <h5 class="card-text"><i class="fas fa-mobile-alt"></i> {{ $phone->brand}}</h5>
                                    <h5 class="card-text"><i class="fas fa-mobile-alt"></i> {{ $phone->model}}</h5>
                                    <h5 class="card-text"><i class="fas fa-mobile-alt"></i> {{ $phone->price}}</h5>

                                </div>

                                <div class="card-footer text-muted">
                                    <div class="text-center">
                                        <a  href="/showDevice/{{ $phone->id }}"><button class="btn btn-warning" type="button">
                                            <i class="fas fa-shopping-cart" style="font-size:120%; margin-top:2%"></i> Aggiugi al carrello
                                        </button></a>
                                    </div>
                                </div>



                            </div>

                    </div>
                            @endforeach
                </div>
            </div>
    </div>



    @endsection