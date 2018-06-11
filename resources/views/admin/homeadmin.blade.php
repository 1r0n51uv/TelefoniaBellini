@extends('layouts.admin')

@section('content')



    <div class="section" style="background-image: url('/assets/img/wear.jpg'); background-size: cover;">

        <div class="row justify-content-center" style="margin-left: 1%; margin-top: 1%;">
            <div class="col-12">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12">
                            <h4>Magazzino</h4>
                            <hr>



                            <div class="card" style="background-color: white">
                                <div class="header">
                                    <h2 style="margin-left: 1%"><small>Dispositivi</small></h2>

                                </div>
                                <div class="body">
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
                            </div>
                            <br>

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

                                            </ul>
                                        </div>



                                        <div class="card-body">
                                            <!-- Tab panes -->
                                            <div class="tab-content text-center">
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

                                                </div>



                                            </div>

                                        </div>
                                    </div>


                                    <div>

                                    </div>


                                    <a href="/addphone"><button class="btn btn-success btn-lg">Aggiungi un telefono</button></a>
                                    <a href="/index"><button class="btn btn-warning btn-lg">Vai al sito!</button></a>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>











@endsection