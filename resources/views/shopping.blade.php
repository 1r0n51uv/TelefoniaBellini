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

                                <a href="/showDevice/{{ $phone->id }}" style="text-decoration: none; color: #16181b">

                                    <div class="col-md-3 col-sm-6 col-xs-6">


                                        <div class="card" style="background-color: transparent;">

                                            <div class="card-header " style="background-color: ghostwhite;">

                                                @if(strcmp($phone->description, 'Novità') == 0)

                                                    <span class="badge badge-danger">Novità</span>
                                                @else

                                                    <span> </span>
                                                @endif


                                            </div>

                                            <img class="card-img-top" src="{{ $phone->pic4 }}" alt="Card image cap" style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">

                                            <div class="card-body" style="text-align:center;">

                                                <h5 class="card-text" >

                                                    @if($phone->brand == 'Apple')
                                                        <i class="icofont icofont-brand-apple" style="font-size: 200%"></i>
                                                    @elseif($phone->brand == 'Samsung')
                                                        <i class="icofont icofont-brand-samsung" style="font-size: 350%"></i>
                                                    @elseif($phone->brand == 'Huawei')
                                                        <i class="icofont icofont-brand-huawei" style="font-size: 350%"></i>
                                                    @endif
                                                    <br>
                                                    {{ $phone->brand}}</h5>


                                                <h5 class="card-text"> {{ $phone->model}}</h5>
                                                <h5 class="card-text"> {{ $phone->price}}</h5>
                                                <h5 class="card-text" >{{ $phone->description }}</h5>
                                            </div>

                                            <div class="card-footer text-muted">
                                                <div class="text-center">
                                                    <a  href="/addToCart/{{ $phone->id }}"><button class="btn btn-success" type="button">
                                                            <i class="fas fa-shopping-cart" style="font-size:150%; margin-top:2%"></i> Aggiungi
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>




                            @endforeach
                        </div>
                    </div>

                    <div class="row justify-content-center">

                        <div>
                            {{ $phones->links() }}
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection

