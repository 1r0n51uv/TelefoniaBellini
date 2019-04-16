<div>
    @if(isset($shipment))

        <h3 class="title">{{$shipment->address}}</h3>
        <p class="category">Indirizzo</p>

        <h3 class="title">{{$shipment->number}}</h3>
        <p class="category">Numero</p>

        <h3 class="title">{{$shipment->city}}</h3>
        <p class="category">Città</p>

        <h3 class="title">{{$shipment->province}}</h3>
        <p class="category">Provincia</p>

        <h3 class="title">{{$shipment->state}}</h3>
        <p class="category">Stato</p>

        <h3 class="title">{{$shipment->cap}}</h3>
        <p class="category">CAP</p>

        <h3 class="title">{{$shipment->phone}}</h3>
        <p class="category">Telefono</p>

        @if($shipment->description != null)
            <h3 class="title">{{$shipment->description}}</h3>
            <p class="category">Note</p>
        @else


        @endif



        <a href="/updateDetailsView/{{$shipment->id}}">
            <button class="btn btn-info btn-round" type="button">
                <i class="fas fa-edit" style="color: white;  font-size: 150%;"></i>Modifica indirizzo di spedizione
            </button>
        </a>

    @else

        <h4>Nessuna informazione di spedizione</h4>

        <a href="/shipmentDetails">
            <button class="btn btn-primary btn-round" type="button">
                <i class="fas fa-shipping-fast" style="font-size: 120%"></i> Inserisci
            </button>
        </a>



    @endif
</div>