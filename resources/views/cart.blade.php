@extends('layouts.master')

@section('content')

    <div class="section section-signup" style="background-image: url('assets/img/blurredimage-1.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
            <div class="row">

                <div class="card col-md-8 col-sm-12" data-background-color="white" style="margin-top:-3%">

                    <div class="header text-center">
                        <h4 class="title title-up" style="color: black"><i class="fas fa-shopping-cart"></i> Carrello</h4>
                    </div>

                    <div class="card-body" style="border-bottom: 1px #a8a7a7 solid">


                        @if(count(Cart::content()) > 0)

                            @foreach (Cart::content() as $item)



                                <div class="row justify-content-center" style="margin-top: 2%">


                                    <div class="col-md-3 col-sm-3 col-xs-1 text-center" style="color: black; font-size: 200%; border-right: 1px #a8a7a7 solid">

                                        <img class="card-img-top" src="{{App\Phone::whereId($item->id)->first()->pic}}" alt="Card image cap" l>
                                    </div>

                                    <div class="col-md-5 col-sm-5 col-xs-3 text-center" style="border-right: 1px #a8a7a7 solid;">
                                        <p style="color: black;">Modello</p>
                                        <h5 style="color: black; margin-top:1%;">{{$item->name}}</h5>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-3 text-center" style="border-right: 1px #a8a7a7 solid">
                                        <p style="color: black;">Prezzo</p>
                                        <h5 style="color: black; margin-top:1%; ">{{$item->price}}€</h5>
                                    </div>

                                    <div class="col-md-3 col-sm-4">

                                    </div>

                                    <div class="col-md-5 col-sm-4 col-xs-3 text-center" style="border-right: 1px #a8a7a7 solid;">
                                        <p style="color: black;">Quantità</p>
                                        <h5 style="color: black; margin-top:1%; ">{{$item->qty}}</h5>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-1 text-center" style="border-right: 1px #a8a7a7 solid;">
                                        <p style="color: black;">Rimuovi dal carrello</p>
                                        <a href="/cart/{{$item->rowId}}">
                                            <button class="btn btn-danger btn-icon btn-round" type="button">
                                                <i class="fas fa-times" style="font-size: 150%;"></i>
                                            </button>
                                        </a>
                                    </div>

                                </div>

                            @endforeach

                        @else


                            <div class="row justify-content-center" style="margin-top: 2%">




                                <div class="col-12 text-center">
                                    <h5 style="color: black;"></h5>

                                </div>


                            </div>

                        @endif






                    </div>


                    <div class="row" style="padding-top: 2%; padding-bottom: 2%">

                        <div class="col-md-6">

                            <div class="text-center">
                                <a href="/checkout">
                                    <button class="btn btn-warning btn-lg" type="button">
                                        <i class="fas fa-credit-card"></i> Checkout
                                    </button>
                                </a>

                            </div>


                        </div>

                        <div class="col-md-6">

                            <div class="text-center">

                                <h5 style="color:black; margin-top:4%">Totale: {{Cart::subTotal()}} €</h5>


                            </div>

                        </div>

                    </div>

                </div>




            </div>


        </div>







    </div>



@endsection



