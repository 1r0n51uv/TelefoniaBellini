@extends('layouts.admin')

@section('content')
    <nav class="navbar" style="background-color: #1d75b3">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/admin">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">

            </div>
        </div>
    </nav>

    <<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <form action="/addPhone" method="post" style="border: 1px #1d75b3 solid; margin-top: 10%; padding: 3%; background-color: darkgray">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Brand</label>
            <input type="text" class="form-control" name="marca">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Modello</label>
            <input type="text" class="form-control" name="model" >

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Memoria</label>
            <input type="text" class="form-control"  name="storage">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Colore</label>
            <input type="text" class="form-control" name="color" >

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prezzo</label>
            <input type="text" class="form-control" name="price" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Descrizione</label>
            <input type="text" class="form-control" name="description">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection