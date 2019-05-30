<div>


    @if(isset($orders) && count($orders) > 0)


        <table class="table table-hover dashboard-task-infos">

            <thead>
            <tr>

                <th>#</th>
                <th>Dispositivi</th>
                <th>Totale</th>
                <th>Stato</th>

            </tr>
            </thead>

            <tbody>

            @foreach($orders as $order)


                <tr>

                    <td>{{ $order->id }}</td>
                    <td>
                        @foreach(\App\Http\Controllers\OrderController::extractDeviceFromOrder($order->id) as $dev_id)

                            @if(strcmp($dev_id, null) == 0)

                            @else



                                <p>{{ \App\Specification::whereId($dev_id)->first()['brand'] }}
                                    <br>
                                    {{ \App\Specification::whereId($dev_id)->first()['model'] }}
                                    <br>
                                    {{ \App\Specification::whereId($dev_id)->first()['storage'] }}GB
                                    <br>
                                    {{ \App\Specification::whereId($dev_id)->first()['color'] }}
                                </p>



                            @endif

                            <br>



                        @endforeach
                    </td>

                    <td>{{ $order->total }}€</td>


                    @switch($order->status)

                        @case('Spedito')
                        <td>
                            <a href="#" data-toggle="tooltip" data-placement="top"
                               title="L'ordine è stato spedito, riceverai il codice di tracciabilità via email"
                               data-container="body" data-animation="true"
                               data-delay="100"><i class="fas fa-truck" style="font-size: 200%; color: coral;"></i></a>

                        </td>
                        @break


                        @case('Cancellato')
                        <td>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="L'ordine è stato cancellato"
                               data-container="body" data-animation="true"
                               data-delay="100"><i class="fas fa-ban" style="font-size: 200%; color: red"></i></a>
                        </td>
                        @break


                        @case('In lavorazione')
                        <td>
                            <a href="#" data-toggle="tooltip" data-placement="top"
                               title="L'ordine è in lavorazione, verrà spedito il prima possibile" data-container="body"
                               data-animation="true"
                               data-delay="100"><i class="fas fa-box" style="font-size: 200%; color: black"></i></a>
                        </td>
                        @break

                        @case('Ricevuto')
                        <td>
                            <a href="#" data-toggle="tooltip" data-placement="top"
                               title="L'ordine è stato completato, riceverai una mail di conferma nelle prossime ore"
                               data-container="body" data-animation="true"
                               data-delay="100"><i class="far fa-check-circle"
                                                   style="font-size: 200%; color: forestgreen"></i></a>

                            <a href="/deleteOrder/{{ $order->id }}" data-toggle="tooltip" data-placement="top"
                               title="Hai 24h di tempo per cancellare il tuo ordine" data-container="body"
                               data-animation="true"
                               data-delay="100"><i class="fas fa-times-circle"
                                                   style="font-size: 200%; color: darkred"></i></a>

                            <br>

                            @if($order->destination)
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                   title="L'ordine verrà spedito all'indirizzo specificato"
                                   data-container="body" data-animation="true"
                                   data-delay="100"><i class="fas fa-truck-loading" style="font-size: 200%; color: black;"></i></a>
                            @else
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                   title="Aspettiamo il tuo ritiro presso il nostro magazzino"
                                   data-container="body" data-animation="true"
                                   data-delay="100"><i class="far fa-truck-handshake" style="font-size: 200%; color: black;"></i></a>

                            @endif
                        </td>


                        @break

                    @endswitch


                </tr>


            @endforeach


            </tbody>


        </table>





    @else

        <h4>Nessun ordine</h4>

    @endif

</div>