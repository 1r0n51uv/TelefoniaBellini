@extends('layouts.master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section('content')



    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover; " >

        <div class="row justify-content-center">
            <div class="container-fluid">

                <div class="col-sm-12">
                    <hr>

                    <div class="row justify-content-center" style="text-align: center">

                        <div class="row justify-content-center">

                            <div class="col-12">

                                <h5>Scegli tra i migliori brand</h5>

                            </div>

                        </div>

                        <div class="row justify-content-center">

                            <div class="col-md-2 col-sm-4 col-xs-12" style="display: inline-block;">

                                <a href="/shopfilter/Huawei">
                                    <img src="../assets/image/huawei.png" alt="Raised Image" class="img-raise" width="60%">

                                </a>


                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12" style="display: inline-block;">
                                <a href="/shopfilter/Samsung">
                                    <img src="../assets/image/samsara.png" alt="Raised Image" class="img-raise" width="60%">

                                </a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12" style="display: inline-block;">
                                <a href="/shopfilter/Apple">
                                    <img src="../assets/image/appleb.png" alt="Raised Image" class="img-raise" width="60%">
                                </a>
                            </div>

                        </div>



                    </div>

                    <hr>

                    <div>

                        <div class="row justify-content-center" >
                            @foreach( $phones as $phone)



                                <a href="/showDevice/{{ $phone->id }}" style="text-decoration: none; color: #16181b">

                                    <div class="col-md-3 col-sm-6 col-xs-6">


                                        <div class="card" >

                                            <div class="card-header ">

                                                @if(strcmp($phone->description, 'Novità') == 0)

                                                    <span class="badge badge-danger">Novità</span>
                                                @else

                                                    <span> </span>
                                                @endif


                                            </div>

                                            <div style="background-image: url('/assets/img/blur.jpg'); background-size: cover;">
                                                <img class="card-img-top" src="{{ $phone->pic4 }}" alt="Card image cap" style="width: 60%; display:block; margin:auto; padding-top: 5%; background-color: transparent;">
                                            </div>



                                            <div class="card-body" style="text-align:center;">

                                                <h5 class="card-text" >

                                                    @if($phone->brand == 'Apple')
                                                        <i class="icofont icofont-brand-apple" style="font-size: 200%"></i>
                                                    @elseif($phone->brand == 'Samsung')
                                                        <i class="icofont icofont-brand-samsung" style="font-size: 350%"></i>
                                                    @elseif($phone->brand == 'Huawei')
                                                        <i class="icofont icofont-brand-huawei" style="font-size: 350%"></i>
                                                    @endif
                                                    <br>
                                                    {{ $phone->brand}}</h5>


                                                <h5 class="card-text"> {{ $phone->model}}</h5>
                                                <h5 class="card-text"> {{ $phone->price}}€</h5>
                                                <h5 class="card-text" >{{ $phone->color }}</h5>
                                            </div>

                                            <div class="card-footer text-muted">
                                                <div class="text-center">

                                                    @if($phone->qty > 0)

                                                        <a  href="/addToCart/{{ $phone->id }}"><button class="btn btn-shop" type="button">
                                                                <i class="fas fa-shopping-cart" style="font-size:150%; margin-top:2%"></i> Aggiungi</button>
                                                        </a>

                                                    @else

                                                        <a href="#"><button class="btn btn-default" disabled type="button">
                                                                <i class="fas fa-shopping-cart" style="font-size:150%; margin-top:2%"></i> Non disponibile</button>
                                                        </a>

                                                    @endif

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>

                            @endforeach
                        </div>
                    </div>

                    <div class="row justify-content-center">


                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary">
                                @if($paginate == true)

                                    {{ $phones->links() }}

                                @else

                                @endif
                            </ul>

                        </nav>


                    </div>


                </div>

            </div>
        </div>
    </div>



@endsection

