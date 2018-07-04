@extends('layouts.profile')


@section('content')

    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="blue">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/image/02.jpg'); background-repeat: repeat">
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
                                    <i class="now-ui-icons shopping_delivery-fast"></i> Indirizzo di spedizione
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
                                <div class="tab-pane" id="order" role="tabpanel">

                                    @if(isset($orders) && count($orders) > 0)


                                        <table class="table table-hover dashboard-task-infos">

                                            <thead>
                                            <tr>

                                                <th>#</th>
                                                <th>Dispositivi</th>
                                                <th>Totale</th>
                                                <th>Stato</th>

                                            </tr>
                                            </thead>

                                            <tbody>

                                            @foreach($orders as $order)


                                                <tr>

                                                    <td>{{ $order->id }}</td>
                                                    <td>
                                                        @foreach(\App\Http\Controllers\OrderController::extractDeviceFromOrder($order->id) as $dev_id)

                                                            @if(strcmp($dev_id, null) == 0)

                                                            @else



                                                                <p>{{ \App\Specification::whereId($dev_id)->first()['brand'] }}
                                                                    <br>
                                                                    {{ \App\Specification::whereId($dev_id)->first()['model'] }}
                                                                    <br>
                                                                    {{ \App\Specification::whereId($dev_id)->first()['storage'] }}GB
                                                                    <br>
                                                                    {{ \App\Specification::whereId($dev_id)->first()['color'] }}
                                                                </p>



                                                            @endif

                                                            <br>



                                                        @endforeach
                                                    </td>

                                                    <td>{{ $order->total }}€</td>


                                                    @switch($order->status)

                                                        @case('Spedito')
                                                        <td>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="L'ordine è stato spedito, riceverai il codice di tracciabilità via email" data-container="body" data-animation="true"
                                                               data-delay="100"><i class="fas fa-truck" style="font-size: 200%; color: coral;"></i></a>
                                                        </td>
                                                        @break


                                                        @case('Cancellato')
                                                        <td>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="L'ordine è stato cancellato" data-container="body" data-animation="true"
                                                               data-delay="100"><i class="fas fa-ban" style="font-size: 200%; color: red"></i></a>
                                                        </td>
                                                        @break


                                                        @case('In lavorazione')
                                                        <td>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="L'ordine è in lavorazione, verrà spedito il prima possibile" data-container="body" data-animation="true"
                                                               data-delay="100"><i class="fas fa-box" style="font-size: 200%; color: black"></i></a>
                                                        </td>
                                                        @break

                                                        @case('Ricevuto')
                                                        <td>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="L'ordine è stato completato, riceverai una mail di conferma nelle prossime ore" data-container="body" data-animation="true"
                                                               data-delay="100"><i class="far fa-check-circle" style="font-size: 200%; color: forestgreen"></i></a>

                                                            <a href="/deleteOrder/{{ $order->id }}" data-toggle="tooltip" data-placement="top" title="Hai 24h di tempo per cancellare il tuo ordine" data-container="body" data-animation="true"
                                                               data-delay="100"><i class="fas fa-times-circle" style="font-size: 200%; color: darkred"></i></a>
                                                        </td>


                                                        @break

                                                    @endswitch






                                                </tr>


                                            @endforeach



                                            </tbody>



                                        </table>





                                    @else

                                        <h4>Nessun ordine</h4>

                                    @endif



                                </div>
                                <div class="tab-pane" id="spedizione" role="tabpanel">

                                    @if(isset($shipment))

                                        <h3 class="title">{{$shipment->address}}</h3>
                                        <p class="category">Indirizzo</p>

                                        <h3 class="title">{{$shipment->number}}</h3>
                                        <p class="category">Numero</p>

                                        <h3 class="title">{{$shipment->city}}</h3>
                                        <p class="category">Città</p>

                                        <h3 class="title">{{$shipment->province}}</h3>
                                        <p class="category">Provincia</p>

                                        <h3 class="title">{{$shipment->state}}</h3>
                                        <p class="category">Stato</p>

                                        <h3 class="title">{{$shipment->cap}}</h3>
                                        <p class="category">CAP</p>

                                        <h3 class="title">{{$shipment->phone}}</h3>
                                        <p class="category">Telefono</p>

                                        <h3 class="title">{{$shipment->description}}</h3>
                                        <p class="category">Note</p>

                                        <p>Modifica indirizzo di spedizione</p>
                                    <a href="/updateDetailsView/{{$shipment->id}}">
                                        <button class="btn btn-info btn-icon btn-round" type="button">
                                            <i class="fas fa-edit" style="color: white;  font-size: 150%;"></i>
                                        </button>
                                    </a>

                                    @else

                                        <h4>Nessuna informazione di spedizione</h4>

                                        <a href="/shipmentDetails">
                                            <button class="btn btn-primary btn-round" type="button">
                                                <i class="fas fa-shipping-fast" style="font-size: 120%"></i> Inserisci
                                            </button>
                                        </a>



                                    @endif




                                </div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection