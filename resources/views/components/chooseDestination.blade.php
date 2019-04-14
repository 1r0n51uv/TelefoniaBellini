<div class="row">

    <div class="card col-md-12" style="margin-top:-3%; background-color: #F7F8F9">


        <div class="card-body">


            <div class="row justify-content-center">
                <div style="text-align: center">
                    <h2>Scegli come avere il tuo ordine</h2>
                    <hr>
                </div>

                <ul class="nav nav-pills nav-pills-primary" role="tablist">

                    <div class="col-md-12" style="text-align: center">

                        <h2>Ritiro in sede <b>gratuito</b></h2>
                        <p>Puoi ritirare il tuo ordine gratuitamente presso il nostro punto vendita</p>

                        @if(session()->get('dest') == 'ritiro')

                            <li class="nav-item" style="display:inline-block">
                                <a class="nav-link active" href="/switchDestination/ritiro">
                                    <i class="fas fa-people-carry" style="font-size: 170%"></i>
                                </a>
                            </li>

                            @else

                            <li class="nav-item" style="display:inline-block">
                                <a class="nav-link" href="/switchDestination/ritiro">
                                    <i class="fas fa-people-carry" style="font-size: 170%"></i>
                                </a>
                            </li>


                        @endif


                    </div>

                    <div class="col-md-12" style="text-align: center; margin-top: 5%">

                        <h2>Spedizione</h2>
                        <p>Provvederemo a spedire il tuo ordine all'indirizzo specificato. Il costo di spedizione è pari a 10€. <b>Gratuita</b> per ordini superiori a 200€</p>

                        @if(session()->get('dest') == 'spedizione')

                            <li class="nav-item" style="display:inline-block">
                                <a class="nav-link active"  href="/switchDestination/spedizione" >
                                    <i class="fas fa-truck-loading" style="font-size: 170%"></i>
                                </a>
                            </li>

                        @else

                            <li class="nav-item" style="display:inline-block">
                                <a class="nav-link"  href="/switchDestination/spedizione" >
                                    <i class="fas fa-truck-loading" style="font-size: 170%"></i>
                                </a>
                            </li>


                        @endif


                    </div>


                </ul>

                <hr>

            </div>


        </div>


    </div>

</div>