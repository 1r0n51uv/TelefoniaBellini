@extends('layouts.master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section('content')



    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

        <div class="row" style="margin-left: 1%; margin-top: 1%;">
            <div class="container-fluid">





                <div class="col-sm-12">
                    <h4><small>Telefoni</small></h4>
                    <hr>

                    <div>
                        <div class="row justify-content-center">
                            @foreach( $phones as $phone)
                                <div class="col-md-3 col-sm-6 col-xs-6">


                                    <div class="card" style="background-color: transparent;">

                                        <div class="card-header " style="background-color: ghostwhite;">

                                            @if(strcmp($phone->description, 'Novità') == 0)

                                                <span class="badge badge-danger">Novità</span>
                                                @else

                                                <span> </span>
                                                @endif


                                        </div>

                                        <img class="card-img-top" src="{{ $phone->pic }}" alt="Card image cap" style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">

                                        <div class="card-body" style="text-align:center;">

                                            <h5 class="card-text" >

                                                @if($phone->brand == 'Apple')
                                                    <i class="icofont icofont-brand-apple"></i>
                                                @elseif($phone->brand == 'Samsung')
                                                    <i class="icofont icofont-brand-samsung" style="font-size: 350%"></i>
                                                @elseif($phone->brand == 'Huawei')
                                                    <i class="icofont icofont-brand-huawei"></i>
                                                @endif
                                                    <br>
                                                {{ $phone->brand}}</h5>


                                            <h5 class="card-text" ></i> {{ $phone->model}}</h5>
                                            <h5 class="card-text" ></i> {{ $phone->price}}</h5>
                                            <h5 class="card-text" >{{ $phone->description }}</h5>
                                        </div>

                                        <div class="card-footer text-muted">
                                            <div class="text-center">
                                                <a  href="/showDevice/{{ $phone->id }}"><button class="btn btn-warning" type="button" style="font-size: 150%;">
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
            </div>
        </div>
    </div>



@endsection

