@extends('layouts.admin')

@section('content')

    <div class="col-sm-6">
    <form action="/addPhone" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Brand</label>
            <input type="text" class="form-control" name="marca" placeholder="{{ $phone->brand }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Modello</label>
            <input type="text" class="form-control" name="model" placeholder="{{ $phone->model }}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Memoria</label>
            <input type="text" class="form-control"  name="peso" placeholder="{{ $phone->storage }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Colore</label>
            <input type="text" class="form-control" name="anno" placeholder="{{ $phone->color }}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prezzo</label>
            <input type="text" class="form-control" name="sistem" placeholder="{{ $phone->price }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Descrizione</label>
            <input type="text" class="form-control" name="memory" placeholder="{{ $phone->description }}">

        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" href="/update/{{ $phone->id }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection