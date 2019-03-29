@extends('layouts.admin')

@section('content')



    <div class="section" style="background-image: url('/assets/img/wear.jpg'); background-size: cover;">

        <div class="row justify-content-center" style="margin-left: 1%; margin-top: 1%;">
            <div class="col-12">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h5 class="title">MAGAZZINO</h5>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="card-header-pills">
                                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                                                        <i class="now-ui-icons users_single-02"></i> Utenti
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#order" role="tab">
                                                        <i class="now-ui-icons shopping_cart-simple"></i> Ordini
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#device" role="tab">
                                                        <i class="now-ui-icons tech_mobile"></i> Device
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#imgManager" role="tab">
                                                        <i class="now-ui-icons design_image"></i> Image Manager
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div class="card-body">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="profile" role="tabpanel">

                                                    <div class="body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover dashboard-task-infos">
                                                                <thead>
                                                                <tr>

                                                                    <th>#</th>
                                                                    <th>Nome</th>
                                                                    <th>Cognome</th>
                                                                    <th>Email</th>
                                                                    <th>Facebook</th>
                                                                    <th>Google</th>



                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                @foreach($users as $usr)


                                                                    <tr>

                                                                        <td>{{ $usr->id }}</td>
                                                                        <td>{{ $usr->name }}</td>
                                                                        <td>{{ $usr->surname }}</td>
                                                                        <td>{{ $usr->email }}</td>
                                                                        <td>{{ $usr->fb_id }}</td>
                                                                        <td>{{ $usr->g_id }}</td>

                                                                    </tr>

                                                                @endforeach


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="order" role="tabpanel">
                                                    <div class="table-responsive">


                                                        <table class="table table-hover dashboard-task-infos">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Destinatario</th>
                                                                <th>Destinazione</th>
                                                                <th>Dispositivi</th>
                                                                <th>Totale</th>
                                                                <th>Stato</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach($orders as $order)


                                                                <tr>

                                                                    <td>{{ $order->id }}</td>
                                                                    <td>{{ \App\User::whereId($order->user_id)->first()->name . ' ' .  \App\User::whereId($order->user_id)->first()->surname }}</td>
                                                                    <td>

                                                                        {{ \App\ShipmentDetails::whereId($order->shipment_id)->first()->address }} <br>
                                                                        {{ \App\ShipmentDetails::whereId($order->shipment_id)->first()->number }} <br>
                                                                        {{ \App\ShipmentDetails::whereId($order->shipment_id)->first()->city }} <br>
                                                                        {{ \App\ShipmentDetails::whereId($order->shipment_id)->first()->province }} <br>
                                                                        {{ \App\ShipmentDetails::whereId($order->shipment_id)->first()->state }} <br>
                                                                        {{ \App\ShipmentDetails::whereId($order->shipment_id)->first()->cap }} <br>
                                                                        {{ \App\ShipmentDetails::whereId($order->shipment_id)->first()->phone }} <br>
                                                                        {{ \App\ShipmentDetails::whereId($order->shipment_id)->first()->description }}

                                                                    </td>
                                                                    <td>
                                                                        @foreach(\App\Http\Controllers\OrderController::extractDeviceFromOrder($order->id) as $dev_id)

                                                                            @if(strcmp($dev_id, null) == 0)


                                                                            @else

                                                                                <a  href="/showDevice/{{$dev_id}}">

                                                                                    <button type="button" class="btn btn-info btn-tooltip" data-toggle="tooltip"
                                                                                            data-placement="left" title="{{ \App\Specification::whereId($dev_id)->first()['brand'] }} -
                                                                                                                     {{ \App\Specification::whereId($dev_id)->first()['model'] }} -
                                                                                                                     {{ \App\Specification::whereId($dev_id)->first()['memory'] }} -
                                                                                                                     {{ \App\Specification::whereId($dev_id)->first()['color'] }} -
                                                                                                                     {{ \App\Specification::whereId($dev_id)->first()['price'] }}€" data-container="body"
                                                                                            data-animation="true" data-delay="100">{{ $dev_id }}

                                                                                    </button>

                                                                                </a>


                                                                            @endif

                                                                            <br>

                                                                        @endforeach
                                                                    </td>


                                                                    <td>{{ $order->total }}€</td>

                                                                    <td>
                                                                        <div class=" btn-group">
                                                                            <button type="button" class="btn btn-default">{{ $order->status }}</button>
                                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            </button>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a href="/updateOrderStatus/{{ $order->id }}/Spedito">Spedito</a></li>
                                                                                <li><a href="/updateOrderStatus/{{ $order->id }}/Cancellato">Cancellato</a></li>
                                                                                <li><a href="/updateOrderStatus/{{ $order->id }}/In lavorazione">In lavorazione</a></li>
                                                                                <li><a href="/updateOrderStatus/{{ $order->id }}/Ricevuto">Ricevuto</a></li>
                                                                            </ul>
                                                                        </div></td>


                                                                </tr>

                                                            @endforeach


                                                            </tbody>
                                                        </table>



                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="device" role="tabpanel">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover dashboard-task-infos">
                                                            <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th>#</th>
                                                                <th>Marca</th>
                                                                <th>Modello</th>
                                                                <th>Memoria</th>
                                                                <th>Colore</th>
                                                                <th>Anno</th>
                                                                <th>Schermo</th>
                                                                <th>Display</th>
                                                                <th>Risoluzione</th>
                                                                <th>Camera</th>
                                                                <th>Processore</th>
                                                                <th>Condizione</th>
                                                                <th>Prezzo</th>


                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach($spec as $specc)


                                                                <tr>
                                                                    <td><a href="/deleteDevice/{{$specc->id}}"><i class="fas fa-times" style="color: red;"></i></a></td>
                                                                    <td><a href="/editphone/{{$specc->id}}"><i class="fas fa-edit" style="color: blue;"></i></a></td>

                                                                    <td>{{ $specc->id }}</td>
                                                                    <td>{{ $specc->brand }}</td>
                                                                    <td>{{ $specc->model }}</td>
                                                                    <td>{{ $specc->memory }}</td>
                                                                    <td>{{ $specc->color }}</td>
                                                                    <td>{{ $specc->year }}</td>
                                                                    <td>{{ $specc->screen }}</td>
                                                                    <td>{{ $specc->display }}</td>
                                                                    <td>{{ $specc->resolution }}</td>
                                                                    <td>{{ $specc->camera }}</td>
                                                                    <td>{{ $specc->processor }}</td>
                                                                    <td>{{ $specc->status }}</td>
                                                                    <td>{{ $specc->price }}</td>
                                                                </tr>

                                                            @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="imgManager" role="tabpanel">

                                                    <div class="body">
                                                        @include('admin.editSlider')
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>


                                    <div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 text-center">
                            <a href="/addphone"><button class="btn btn-success btn-lg">Aggiungi un dispositivo</button></a>
                            <a href="/index"><button class="btn btn-warning btn-lg">Vai al sito!</button></a>
                            <a href="{{route('logout')}}"><button class="btn btn-danger btn-lg">Logout</button></a>

                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>











@endsection