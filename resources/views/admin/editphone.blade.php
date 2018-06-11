@extends('layouts.admin')

@section('content')



    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

        <div class="row">

                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-sm-5 sidenav">
                            <form action="/updateSpecification/{{ $specification->id }}" method="post" style="border: 1px whitesmoke solid; margin-top: 10%; padding: 3%; background-color: white;">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Brand</label>
                                    <input type="text" class="form-control" name="brand" placeholder="{{ $specification->brand }}">
                                </div>
                                <div class="form-group">
                                    <label>Modello</label>
                                    <input type="text" class="form-control" name="model" placeholder="{{ $specification->model }}">

                                </div>
                                <div class="form-group">
                                    <label>Peso</label>
                                    <input type="text" class="form-control"  name="weight" placeholder="{{ $specification->weight }}">
                                </div>
                                <div class="form-group">
                                    <label>Anno</label>
                                    <input type="text" class="form-control" name="year" placeholder="{{ $specification->year }}">

                                </div>
                                <div class="form-group">
                                    <label>Memoria</label>
                                    <input type="text" class="form-control" name="memory" placeholder="{{ $specification->memory }}">

                                </div>
                                <div class="form-group">
                                    <label>Sistema Operativo</label>
                                    <input type="text" class="form-control" name="system" placeholder="{{ $specification->system }}">
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
                                    <input type="text" class="form-control"  name="display" placeholder="{{ $specification->display }}">
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
                                    <label>Colore</label>
                                    <input type="text" class="form-control"  name="color" placeholder="{{ $specification->color }}">

                                </div>

                                <div class="form-group">
                                    <label>Condizione</label>
                                    <input type="text" class="form-control"  name="status" placeholder="{{ $specification->status }}">

                                </div>

                                <div class="form-group">
                                    <label>Prezzo</label>
                                    <input type="number" class="form-control"  name="price" placeholder="{{ $specification->price }}">
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