@extends('layouts.admin')

@section('content')

    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

        <div class="row" style="margin-left: 1%; margin-top: 1%;">
            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4">
                <form action="/addSpecification" method="post" style="border: 1px whitesmoke solid; margin-top: 10%; padding: 3%; background-color: floralwhite;">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" class="form-control" name="brand" required>
                    </div>
                    <div class="form-group">
                        <label>Modello</label>
                        <input type="text" class="form-control" name="model" required>

                    </div>
                    <div class>Peso</label>
                        <input type="text" class="form-control"  name="weight" required>
                    </div>
                    <div class="form-group">
                        <label>Anno</label>
                        <input type="text" class="form-control" name="year" required>

                    </div>
                    <div class="form-group">
                        <label>Memoria</label>
                        <input type="text" class="form-control" name="memory" required >
                    </div>

                    <div class="form-group">
                        <label>Sistema Operativo</label>
                        <input type="text" class="form-control" name="system" required>

                    </div>
                    <div class="form-group">
                        <label>Processore</label>
                        <input type="text" class="form-control" name="processor" required>
                    </div>
                    <div class="form-group">
                        <label >Schermo</label>
                        <input type="text" class="form-control" name="screen" required >

                    </div>
                    <div class="form-group">
                        <label>Display</label>
                        <input type="text" class="form-control"  name="display" required>
                    </div>
                    <div class="form-group">
                        <label >Risoluzione</label>
                        <input type="text" class="form-control" name="resolution" required>

                    </div>
                    <div class="form-group">
                        <label>Fotocamera</label>
                        <input type="text" class="form-control" name="camera" required>
                    </div>

                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" name="color" required>
                    </div>

                    <div class="form-group">
                        <label>Condizione</label>
                        <input type="text" class="form-control" name="status" required >
                    </div>

                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" class="form-control" name="price" required>
                    </div>


                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="/admin"><button type="submit" class="btn btn-primary">Torna alla home</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection