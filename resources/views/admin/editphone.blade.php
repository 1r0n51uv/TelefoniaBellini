@extends('layouts.admin')

@section('content')


    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

        <div class="row" style="margin-left: 1%; margin-top: 1%;">
            <div class="col-12">
                <div class="container-fluid">

                    <div class="row content">
                        <div class="col-sm-5 sidenav">
                            <form action="/updatePhone/{{ $specification->id }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Brand</label>
                                    <input type="text" class="form-control" name="marca" placeholder="{{ $specification->marca }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Modello</label>
                                    <input type="text" class="form-control" name="model" placeholder="{{ $specification->model }}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Peso</label>
                                    <input type="text" class="form-control"  name="peso" placeholder="{{ $specification->peso }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Anno</label>
                                    <input type="text" class="form-control" name="anno" placeholder="{{ $specification->anno }}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Memoria</label>
                                    <input type="text" class="form-control" name="memory" placeholder="{{ $specification->memory }}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sistema Operativo</label>
                                    <input type="text" class="form-control" name="sistem" placeholder="{{ $specification->sistem }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Processore</label>
                                    <input type="text" class="form-control" name="processor" placeholder="{{ $specification->processor }}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Schermo</label>
                                    <input type="text" class="form-control"  name="screen" placeholder="{{ $specification->screen }}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Display</label>
                                    <input type="text" class="form-control"  placeholder="{{ $specification->display }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Risoluzione</label>
                                    <input type="text" class="form-control"  name="resolution" placeholder="{{ $specification->resolution }}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fotocamera</label>
                                    <input type="text" class="form-control"  name="camera" placeholder="{{ $specification->camera }}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Media</label>
                                    <input type="text" class="form-control"  placeholder="{{ $specification->media }}">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" href="/update/{{ $specification->id }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>
                        </div>



                </div>

            </div>

        </div>

    </div>







@endsection