@extends('beautymail::templates.widgets')

@section('content')

    @include('beautymail::templates.widgets.articleStart')

    <h4 class="secondary"><strong>Come richiesto ecco la nuova password</strong></h4>
    <h3 class="secondary">La password generata è: {{$content}}</h3>
    <p>Potrai effettuare l'accesso con la mail e la password</p>

    @include('beautymail::templates.widgets.articleEnd')


    @include('beautymail::templates.widgets.newfeatureStart')

    <h4 class="secondary"><strong>Telefonia Bellini</strong></h4>
    <ul>
        <li style="font-size: 120%">
            P.IVA 08875171210
            <br>
            <br>
            Contatti
            <br>
            0812158318
            <br>
            +39 3343724246
            <br>
            telefoniabellini@outlook.it
            <br>
            <br>
            Via Passanti 268, San Giuseppe Vesuviano (NA) - 80047
        </li>

@stop


