

@extends('beautymail::templates.widgets')

@section('content')

    @include('beautymail::templates.widgets.articleStart')

    <h1>Ordine  n° {{ $id }} cancellato con successo</h1>

    <h2>I seguenti prodotti non verranno spediti</h2>


    @include('beautymail::templates.widgets.articleEnd')

    @include('beautymail::templates.widgets.articleStart')


    @foreach(\App\Http\Controllers\OrderController::extractDeviceFromOrder($id) as $dev_id)

        @if(strcmp($dev_id, null) == 0)


        @else

            <ul>

                <li>{{ \App\Specification::whereId($dev_id)->first()['brand'] }}</li>
                <br>
                {{ \App\Specification::whereId($dev_id)->first()['model'] }}
                <br>
                {{ \App\Specification::whereId($dev_id)->first()['memory'] }}
                <br>
                {{ \App\Specification::whereId($dev_id)->first()['color'] }}
                <br>
                {{ \App\Specification::whereId($dev_id)->first()['price'] }}
            </ul>



        @endif







    @endforeach

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



