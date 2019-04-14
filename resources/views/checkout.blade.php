@extends('layouts.master')

@section('content')



    <div class="section section-signup" style="background-image: url('assets/image/checkout.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">

            <div class="row">

                <div class="col-md-6">


                    <div class="row">

                        <div class="card col-md-12" style="background-color: #F7F8F9">

                            <div class="header text-center">
                                <h4 class="title title-up" style="color: black"><i class="fas fa-shopping-cart"></i> Checkout</h4>
                            </div>

                            <div class="card-body">


                                @foreach (Cart::content() as $item)

                                    <div class="row">

                                        <div class="col-md-5 col-sm-5 col-xs-5 text-center" style="border-right: 1px #a8a7a7 solid">
                                            <p class="category">Prodotto</p>
                                            <h5 style="color: black; margin-top:1%;">{{
                                        $item->name['brand'] . ' ' . $item->name['model']}}

                                                <br>

                                                {{ $item->name['memory']}}

                                                <br>

                                                {{ $item->name['color'] }}


                                            </h5>
                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-3 text-center" style="border-right: 1px #a8a7a7 solid">
                                            <p class="category">Prezzo</p>
                                            <h5 style="color: black; margin-top:1%; ">{{$item->price}} €</h5>
                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-3 text-center" style="border-right: 1px #a8a7a7 solid">
                                            <p class="category">Quantità</p>
                                            <h5 style="color: black; margin-top:1%; ">{{$item->qty}}</h5>
                                        </div>




                                        <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                            <a href="/cart/{{$item->rowId}}">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                                <hr>

                                <div class="row justify-content-center">

                                    <div class="col-md-12" style="text-align: left">

                                        @if(session()->get('dest') == 'spedizione')
                                            <h4>Articoli: <b>{{ Cart::subtotal()}} €</b></h4>
                                            <h4>Spedizione: <b>10€</b></h4>
                                            <hr>
                                        <div style="text-align: center">
                                            <p class="category">Totale</p>
                                            <h2>{{ Cart::subtotal() + 10.00}} €</h2>
                                        </div>

                                            @else
                                            <h4>Articoli: <b>{{ Cart::subtotal()}} €</b></h4>
                                            <h4>Spedizione: <b>Gratis</b></h4>
                                            <hr>
                                            <div style="text-align: center">
                                                <p class="category">Totale</p>
                                                <h2>{{ Cart::subtotal() }} €</h2>
                                            </div>

                                        @endif




                                    </div>

                                </div>


                            </div>

                            <div class="card-footer" style="text-align: center">
                                <button class="btn btn-lg btn-success">Vai al pagamento <i class="far fa-credit-card"></i></button>
                            </div>

                        </div>


                    </div>




                </div>

                <div class="col-md-1">

                </div>

                <div class="col-md-5">


                    @include('components.chooseDestination')

                </div>

            </div>

        </div>



    </div>


    <script src="./assets/js/stripeui.js" type="text/javascript"></script>

@endsection