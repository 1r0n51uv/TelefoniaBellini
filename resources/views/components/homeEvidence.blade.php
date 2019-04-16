

@if(isset($evidence))
    <div class="row justify-content-center" >

        <div class="col-md-12">
            <hr>
            <h1>Ultimi arrrivi</h1>
            <hr>

        </div>
        @foreach( $evidence as $phone)

            <a href="/showDevice/{{ $phone->id }}" style="text-decoration: none; color: #16181b">

                <div class="col-md-3 col-sm-6 col-xs-6">


                    <div class="card">

                        <div class="card-header ">

                            @if(strcmp($phone->description, 'Novità') == 0)

                                <span class="badge badge-danger">Novità</span>

                            @elseif(strcmp($phone->description, 'Usato') == 0)
                                <span class="badge badge-warning">Usato</span>
                            @else

                                <span class="badge badge-danger" style="color: #F7F7F7; border-color: #F7F7F7">Pelo </span>
                            @endif


                        </div>

                        <img class="card-img-top" src="{{ $phone->pic4 }}" alt="Card image cap"
                             style="width: 60%; display:block; margin:auto; margin-top: 2%">


                        <div class="card-body">

                            <h5 class="card-text" style="text-align:center;">

                                @if($phone->brand == 'Apple')
                                    <i class="icofont icofont-brand-apple" style="font-size: 200%"></i>
                                @elseif($phone->brand == 'Samsung')
                                    <i class="icofont icofont-brand-samsung" style="font-size: 350%"></i>
                                @elseif($phone->brand == 'Huawei')
                                    <i class="icofont icofont-brand-huawei" style="font-size: 350%"></i>
                                @endif
                                <br></h5>

                            <h5 class="card-text">{{ $phone->brand . ' ' . $phone->model}}</h5>

                            <h5 class="card-text"> {{ $phone->memory}}</h5>
                            <h5 class="card-text"> {{ $phone->color}}</h5>
                            <hr>
                            <h5 style="text-align:right;" class="card-text"> <b>{{ $phone->price}}€</b></h5>


                        </div>

                        <div class="card-footer text-muted">
                            <div class="text-center">

                                @if($phone->qty > 0)

                                    <a href="/addToCart/{{ $phone->id }}">
                                        <button class="btn btn-shop" type="button">
                                            <i class="fas fa-shopping-cart" style="font-size:150%; margin-top:2%"></i> Aggiungi
                                        </button>
                                    </a>

                                @else

                                    <a href="#">
                                        <button class="btn btn-default" disabled type="button">
                                            <i class="fas fa-shopping-cart" style="font-size:150%; margin-top:2%"></i> Non
                                            disponibile
                                        </button>
                                    </a>

                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </a>

        @endforeach
    </div>
@endif



