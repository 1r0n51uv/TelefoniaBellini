<div class="row">

    <div class="card col-md-12" style="margin-top:-3%; background-color: #F7F8F9">

        <div class="header text-center">
            <h4 class="title title-up" style="color: black"><i class="fas fa-truck"></i> Destinazione</h4>
        </div>

        <div class="card-body">


            <div class="row">

                <div class="col-md-12">
                    <h4 class="title">{{ $shipment->address }}</h4>
                    <p class="category">Indirizzo</p>

                    <h4 class="title">{{ $shipment->number }}</h4>
                    <p class="category">Numero Civico</p>

                    <h4 class="title">{{ $shipment->city }}</h4>
                    <p class="category">Città</p>

                    <h4 class="title">{{ $shipment->province }}</h4>
                    <p class="category">Provincia</p>

                    <h4 class="title">{{ $shipment->cap }}</h4>
                    <p class="category">CAP</p>

                    @if($shipment->description != null)

                        <h4 class="title">{{ $shipment->description }}</h4>
                        <p class="category">Note</p>

                    @endif


                </div>


            </div>


        </div>


    </div>

</div>