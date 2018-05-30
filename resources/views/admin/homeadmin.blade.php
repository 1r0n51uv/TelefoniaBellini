@extends('layouts.admin')

@section('content')

    <nav class="navbar" style="background-color: #1d75b3;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/admin">Admin - Telefonia Bellini</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            </div>
        </div>
    </nav>
    <aside id="leftsidebar" class="sidebar">
        <div class="">
            <div class="info-container">

                <div class="btn-group user-helper-dropdown">


                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Navigazione</li>
                <li class="">
                    <a href="/index">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="">
                    <a href="/addphone">
                        <i class="material-icons">smartphone</i>
                        <span>Inserisci un telefono</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                 <a href="javascript:void(0);"></a>.
            </div>
            <div class="version">
                <b></b>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <aside id="rightsidebar" class="right-sidebar">


    </aside>
    <section class="content" style="font-family: 'Raleway Medium'">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>



            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>SPECIFICATION</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                                        <th>Processore</th>
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
                                            <td>{{ $specc->processor }}</td>
                                            <td>{{ $specc->screen }}</td>
                                            <td>{{ $specc->camera }}</td>
                                            <td><a href="/deleteDevice/{{$specc->id}}"><i class="fas fa-times"></i></a></td>
                                            <td><a href="/editphone/{{$specc->id}}"><i class="fas fa-times"></i></a></td>
                                            <td><a href="/addphone"><i class="fas fa-times"></i></a></td>
                                        </tr>

                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>SMARTPHONE</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Marca</th>
                                        <th>Modello</th>
                                        <th>Prezzo</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($phones as $phone)


                                        <tr>
                                            <td>{{ $phone->id }}</td>
                                            <td>{{ $phone->brand }}</td>
                                            <td>{{ $phone->model }}</td>
                                            <td>{{ $phone->price }}€</td>
                                            <td><a href="/deleteDevice/{{$phone->id}}"><i class="fas fa-times"></i></a></td>
                                            <td><a href="/editphone/{{$phone->id}}"><i class="fas fa-times"></i></a></td>
                                            <td><a href="/addphone"><i class="fas fa-times"></i></a></td>
                                        </tr>

                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <section>



@endsection