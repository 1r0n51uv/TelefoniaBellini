@extends('layouts.master')

@section('content')

    <div class="section">

        <div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
            <div class="container">

                <div class="row" style="margin-top: -8%">

                    <div class="col-md-6">

                        <div class="row">

                            <div class="card col-md-12" style="margin-top:-3%; background-color: #F7F8F9">

                                <div class="header text-center">
                                    <h4 class="title title-up" style="color: black"><i class="far fa-credit-card"></i> Pagamento</h4>
                                </div>

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <form action="/api/pay" method="post" id="payment-form">
                                                    <div class="form-group">

                                                        <div id="card-element">
                                                            <!-- A Stripe Element will be inserted here. -->
                                                        </div>

                                                        <!-- Used to display Element errors. -->
                                                        <div id="card-errors" role="alert"></div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button class="btn btn-success">Acquista</button>
                                                    </div>

                                                    <input type="text" hidden value="{{Cart::subtotal()}}" name="amount">
                                                    <input type="text" hidden value="{{Auth::user()->id}}" name="user">

                                                </form>
                                            </div>

                                        </div>


                                    </div>

                                </div>


                            </div>

                        </div>

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
                                                <h5 style="color: black; margin-top:1%; ">{{$item->name}}</h5>
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



                                </div>




                            </div>

                        </div>







                    </div>

                    <div class="col-md-1">

                    </div>

                    <div class="col-md-5">

                        <div class="row">

                            <div class="card col-md-12" style="margin-top:-3%; background-color: #F7F8F9">

                                <div class="header text-center">
                                    <h4 class="title title-up" style="color: black"><i class="fas fa-truck"></i> Destinazione</h4>
                                </div>

                                <div class="card-body">


                                    <div class="row">

                                        <div class="col-md-12">
                                            <h4 class="title">{{ $shipment->address }}</h4>
                                            <p class="category">Indirizzo</p>

                                            <h4 class="title">{{ $shipment->number }}</h4>
                                            <p class="category">Numero Civico</p>

                                            <h4 class="title">{{ $shipment->city }}</h4>
                                            <p class="category">Città</p>

                                            <h4 class="title">{{ $shipment->province }}</h4>
                                            <p class="category">Provincia</p>

                                            <h4 class="title">{{ $shipment->cap }}</h4>
                                            <p class="category">CAP</p>

                                            @if($shipment->description != null)

                                                <h4 class="title">{{ $shipment->description }}</h4>
                                                <p class="category">Note</p>

                                            @endif



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




    <script src="./assets/js/stripeui.js" type="text/javascript"></script>

@endsection