@extends('layouts.profile')


@section('content')

    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg5.jpg');">
            </div>
            <div class="container">
                <div class="content-center">
                    <div class="photo-container">

                        @if(isset(Auth::user()->fb_pic))
                            <img src="{{Auth::user()->fb_pic}}">
                        @elseif(isset(Auth::user()->g_pic))
                            <img src="{{Auth::user()->g_pic}}">
                        @endif


                    </div>

                    <h3 class="title">Il tuo profilo</h3>
                </div>
            </div>
        </div>



    </div>

    <div class="section section-tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 ml-auto mr-auto">

                    <!-- Nav tabs -->
                    <div class="card">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                                    <i class="now-ui-icons users_single-02"></i> Profilo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#order" role="tab">
                                    <i class="now-ui-icons shopping_cart-simple"></i> Ordini
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#spedizione" role="tab">
                                    <i class="now-ui-icons ui-1_settings-gear-63"></i> Spedizione {{Auth::user()->name}}
                                </a>
                            </li>

                        </ul>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <h3 class="title">{{Auth::user()->name}} {{Auth::user()->surname}}</h3>
                                    <p class="category">Nome</p>

                                    <h3 class="title">{{Auth::user()->email}}</h3>
                                    <p class="category">Email</p>

                                    <a href="logout"><button class="btn btn-danger">Logout</button></a>
                                </div>

                          @if(isset($orders))
                                    <div class="tab-pane" id="order" role="tabpanel">
                                        @foreach($orders as $order)

                                            <h4>{{ $order->id }}</h4>

                                        @endforeach

                                    </div>
                              @else
                                    <div class="tab-pane" id="order" role="tabpanel">

                                        <h3 class="title">Nessun ordine presente</h3>

                                    </div>

                              @endif


                               @if(isset($hipment))
                                    <div class="tab-pane" id="spedizione" role="tabpanel">

                                        <h3 class="title">{{$shipment->address}}</h3>
                                        <p class="category">Indirizzo</p>

                                        <h3 class="title">{{$shipment->number}}</h3>
                                        <p class="category">Numero</p>

                                        <h3 class="title">{{$shipment->city}}</h3>
                                        <p class="category">Città</p>

                                        <h3 class="title">{{$shipment->address}}</h3>
                                        <p class="category">Indirizzo</p>

                                        <h3 class="title">{{$shipment->address}}</h3>
                                        <p class="category">Indirizzo</p>

                                        <h3 class="title">{{$shipment->address}}</h3>
                                        <p class="category">Indirizzo</p>

                                        <h3 class="title">{{$shipment->address}}</h3>
                                        <p class="category">Indirizzo</p>

                                        <h3 class="title">{{$shipment->address}}</h3>
                                        <p class="category">Indirizzo</p>

                                    </div>
                                   @else
                                    <div class="tab-pane" id="spedizione" role="tabpanel">

                                        <h3 class="title">Nessun indirizzo di spedizione</h3>

                                    </div>
                                   @endif





                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection