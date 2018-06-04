@extends('layouts.admin')

@section('content')



    <div class="section" style="background-image: url('/assets/img/wear.jpg'); background-size: cover;">

        <div class="row" style="margin-left: 1%; margin-top: 1%;">
            <div class="col-sm-11">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-6">
                            <h4>I TUOI TELEFONI</h4>
                            <hr>



                            <div class="card" style="background-color: floralwhite">
                                <div class="header">
                                  <h2 style="margin-left: 1%"><small>SPECIFICATION</small></h2>

                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-hover dashboard-task-infos">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Marca</th>
                                                <th>Modello</th>
                                                <th>Memoria</th>
                                                <th>Schermo</th>
                                                <th>Fotocamera</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($spec as $specc)


                                                <tr>
                                                    <td>{{ $specc->id }}</td>
                                                    <td>{{ $specc->brand }}</td>
                                                    <td>{{ $specc->model }}</td>
                                                    <td>{{ $specc->memory }}</td>
                                                    <td>{{ $specc->system }}</td>
                                                    <td>{{ $specc->camera }}</td>
                                                    <td><a href="/deleteDevice/{{$specc->id}}"><i class="fas fa-times" style="color: red;"></i></a></td>
                                                    <td><a href="/editphone/{{$specc->id}}"><i class="fas fa-edit" style="color: blue;"></i></a></td>
                                                </tr>

                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>



                        <div class="col-md-6 col-xs-12" style="margin-top: 7%;">
                            <div class="row">
                                 <div class="col-md-12 col-xs-12">
                                     <div class="card" style="background-color: floralwhite;">
                                         <ul class="nav nav-tabs justify-content-center" role="tablist">
                                             <li class="nav-item">
                                                 <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                                     <i class="now-ui-icons objects_umbrella-13"></i> Tutti gli ordini
                                                 </a>
                                             </li>
                                             <li class="nav-item">
                                                 <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                                     <i class="now-ui-icons objects_key-25"></i> Tutti gli utenti
                                                 </a>
                                             </li>
                                         </ul>
                                         <div class="card-body">
                                             <div class="tab-content text-center">
                                                 <div class="tab-pane active" id="home" role="tabpanel">


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