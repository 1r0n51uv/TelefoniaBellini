@extends('layouts.admin')

@section('content')

    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover;">

        <div class="row">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-4 sidenav">
                        <form action="/addSpecification" method="post" enctype="multipart/form-data" style="border: 1px whitesmoke solid; padding: 3%; background-color: white;">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Brand</label>
                                <input type="text" class="form-control" name="brand">
                            </div>
                            <div class="form-group">
                                <label>Modello</label>
                                <input type="text" class="form-control" name="model" >

                            </div>
                            <div class="form-group">
                                <label>Peso</label>
                                <input type="text" class="form-control"  name="weight">
                            </div>
                            <div class="form-group">
                                <label>Anno</label>
                                <input type="text" class="form-control" name="year">

                            </div>
                            <div class="form-group">
                                <label>Memoria</label>
                                <input type="text" class="form-control" name="memory">

                            </div>
                            <div class="form-group">
                                <label>Sistema Operativo</label>
                                <input type="text" class="form-control" name="system">
                            </div>
                            <div class="form-group">
                                <label >Processore</label>
                                <input type="text" class="form-control" name="processor">

                            </div>
                            <div class="form-group">
                                <label>Schermo</label>
                                <input type="text" class="form-control"  name="screen">

                            </div>
                            <div class="form-group">
                                <label>Display</label>
                                <input type="text" class="form-control"  name="display">
                            </div>
                            <div class="form-group">
                                <label>Risoluzione</label>
                                <input type="text" class="form-control"  name="resolution">

                            </div>
                            <div class="form-group">
                                <label>Fotocamera</label>
                                <input type="text" class="form-control"  name="camera">

                            </div>

                            <div class="form-group">
                                <label>Colore</label>
                                <input type="text" class="form-control"  name="color">

                            </div>

                            <div class="form-group">
                                <label>Condizione</label>
                                <input type="text" class="form-control"  name="status">
                            </div>

                            <div class="form-group">
                                <label>Quantità</label>
                                <input type="number" class="form-control"  name="qty">
                            </div>

                            <div class="form-group">
                                <label>Etichetta (Nuovo - Usato)</label>
                                <input type="text" class="form-control"  name="description">
                            </div>

                            <div class="form-group">
                                <label>Prezzo</label>
                                <input type="number" class="form-control"  name="price">
                            </div>

                            <div class="form-group">
                                <label>Immagini</label>
                                <input type="file" name="image[]" class="form-control" required multiple>
                            </div>



                            <a href="/admin"><button type="submit" class="btn btn-primary">Torna alla home</button></a>
                            <button type="submit" class="btn btn-info">Inserisci</button>

                        </form>
                    </div>

                </div>

            </div>



        </div>






    </div>

@endsection