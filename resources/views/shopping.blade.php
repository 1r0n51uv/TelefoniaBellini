@extends('layouts.master')

@section('content')



    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

        <div class="row">
            <div class="container-fluid">


                <div class="col-sm-12">

                    <hr>

                    <div>
                        <div class="row justify-content-center">
                            @foreach( $phones as $phone)
                                <div class="col-md-3 col-sm-6 col-xs-6">


                                    <div class="card" style="background-color: transparent;">

                                        <div class="card-header" style="background-color: transparent;  border-color: grey;">
                                            <span class="badge badge-danger" style="border-color: grey; color: black; font-size: 100%">Novità</span>
                                        </div>

                                        <img class="card-img-top" src="{{ $phone->pic }}" alt="Card image cap" style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">
                                        <div class="card-body" style="text-align: center">

                                                <h5 class="card-text">

                                                    @if($phone->brand == 'Apple')
                                                        <i class="icofont icofont-brand-apple"></i>
                                                    @elseif($phone->brand == 'Samsung')
                                                        <i class="icofont icofont-brand-samsung"></i>
                                                    @elseif($phone->brand == 'Huawei')
                                                        <i class="icofont icofont-brand-huawei"></i>
                                                    @endif

                                                    {{ $phone->brand}}</h5>

                                                <h5 class="card-text"><i class="fas fa-mobile-alt"></i> {{ $phone->model}}</h5>
                                                <h5 class="card-text"><i class="fas fa-euro-sign"></i> {{ $phone->price}}</h5>
                                                <h5 class="card-text"><i class="fas fa-paint-brush"></i> {{ $phone->color}}</h5>
                                                <h5 class="card-text">{{ $phone->description }}</h5>

                                            </div>



                                        <div class="card-footer text-muted text-center">

                                            <div class="row justify-content-center">

                                                <div class="col-md-12">
                                                    <a href="/addToCart/{{$phone->id}}"><button class="btn btn-warning" type="button">
                                                            <i class="fas fa-shopping-cart" style="font-size:120%; margin-top:2%"></i> Aggiungi </button></a>
                                                </div>

                                                <div class="col-md-12">
                                                    <a href="/showDevice/{{ $phone->id }}"><button class="btn btn-info" type="button">
                                                            <i class="fas fa-info-circle" style="font-size:120%; margin-top:2%"></i> Informazioni</button></a>
                                                </div>

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

