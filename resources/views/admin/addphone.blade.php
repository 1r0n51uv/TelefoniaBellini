@extends('layouts.admin')

@section('content')

    <div class="col-sm-6">
    <form action="/addPhone" method="post">
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