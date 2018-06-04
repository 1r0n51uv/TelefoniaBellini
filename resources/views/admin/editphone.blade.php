@extends('layouts.admin')

@section('content')

    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

        <div class="row" style="margin-left: 1%; margin-top: 1%;">

                <div class="container-fluid">

                    <div class="row content">
                        <div class="col-sm-5 sidenav">
                            <form action="/updatePhone/{{ $specification->id }}" method="post" style="border: 1px whitesmoke solid; margin-top: 10%; padding: 3%; background-color: floralwhite;">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Brand</label>
                                    <input type="text" class="form-control" name="marca" placeholder="{{ $specification->marca }}">
                                </div>
                                <div class="form-group">
                                    <label>Modello</label>
                                    <input type="text" class="form-control" name="model" placeholder="{{ $specification->model }}">

                                </div>
                                <div class="form-group">
                                    <label>Peso</label>
                                    <input type="text" class="form-control"  name="peso" placeholder="{{ $specification->peso }}">
                                </div>
                                <div class="form-group">
                                    <label>Anno</label>
                                    <input type="text" class="form-control" name="anno" placeholder="{{ $specification->anno }}">

                                </div>
                                <div class="form-group">
                                    <label>Memoria</label>
                                    <input type="text" class="form-control" name="memory" placeholder="{{ $specification->memory }}">

                                </div>
                                <div class="form-group">
                                    <label>Sistema Operativo</label>
                                    <input type="text" class="form-control" name="sistem" placeholder="{{ $specification->sistem }}">
                                </div>
                                <div class="form-group">
                                    <label >Processore</label>
                                    <input type="text" class="form-control" name="processor" placeholder="{{ $specification->processor }}">

                                </div>
                                <div class="form-group">
                                    <label>Schermo</label>
                                    <input type="text" class="form-control"  name="screen" placeholder="{{ $specification->screen }}">

                                </div>
                                <div class="form-group">
                                    <label>Display</label>
                                    <input type="text" class="form-control"  placeholder="{{ $specification->display }}">
                                </div>
                                <div class="form-group">
                                    <label>Risoluzione</label>
                                    <input type="text" class="form-control"  name="resolution" placeholder="{{ $specification->resolution }}">

                                </div>
                                <div class="form-group">
                                    <label>Fotocamera</label>
                                    <input type="text" class="form-control"  name="camera" placeholder="{{ $specification->camera }}">

                                </div>
                                <div class="form-group">
                                    <label>Media</label>
                                    <input type="text" class="form-control"  placeholder="{{ $specification->media }}">
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/admin"><button type="submit" class="btn btn-primary">Torna alla home</button></a>
                            </form>
                            </div>
                        </div>



            </div>

        </div>

    </div>







@endsection