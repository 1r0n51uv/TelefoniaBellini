
@extends('layouts.master')

@section('content')



    <div class="section">
        <div class="container">

            <div class="row" style="margin-top:5%">

                <div class="col-md-12 col-sm-12 col-xs-12" style="border: 1px red solid">

                    <div class="row justify-content-center" style="border: 1px blue solid;">


                        <div class="col-md-12">

                            <div class="row justify-content-center" style="border: 1px yellow solid;">




                            </div>


                        </div>

                    </div>

                </div>


            </div>





            <div class="row justify-content-center">

                @foreach ($phones as $phone)


                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="card">

                            <div class="card-header" style="background-color: white">
                                <span class="badge badge-danger">Novità</span>
                            </div>

                            <img class="card-img-top" src="{{ $phone->pic}}" alt="Card image cap" style="width: 60%; display:block; margin:auto; padding-top: 5%">
                            <div class="card-body" style="text-align:center;">

                                <h5 class="card-text"><i class="fas fa-mobile-alt"></i> {{ $phone->brand}}</h5>
                                <h5 class="card-text"><i class="fas fa-mobile-alt"></i> {{ $phone->model}}</h5>
                                <h5 class="card-text"><i class="far fa-hdd"></i> {{ $phone->storage}}GB</h5>
                                <h5 class="card-text"><i class="fas fa-paint-brush"></i> {{ $phone->color}}</h5>
                                <h5 class="card-text"><i class="far fa-money-bill-alt"></i> {{ $phone->price}}€</h5>

                            </div>

                            <div class="card-footer text-muted">
                                <div class="text-center">
                                    <a href="/addToCart/{{$phone->id}}">
                                        <button class="btn btn-primary btn-round" type="button">
                                            <i class="fas fa-shopping-cart" style="font-size:120%; margin-top:2%"></i> Aggiugi al carrello
                                        </button>
                                    </a>

                                </div>
                            </div>


                        </div>

                    </div>


                @endforeach


            </div>



            <div style="text-align: center">

                <div style="display: inline-block;">
                    <ul class="pagination pagination-primary">
                        {{ $phones->links() }}
                    </ul>

                </div>
            </div>

        </div>

    </div>




@endsection