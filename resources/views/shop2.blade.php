@extends('layouts.master')

@section('content')



<div class="section">
        <div class="container">
            
                <div class="row" style="margin-top:5%">
                        
                    <div class="col-md-2 col-sm-3 col-xs-2" style="border: 1px red solid">

                    </div>

                    <div class="col-md-10 col-sm-9 col-xs-9">

                        
                        <div class="row">

                                @foreach ($phones as $phone)

                            
                                        <div class="col-md-5 col-sm-10"> 
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
                                                                <button class="btn btn-primary btn-round" type="button">
                                                                        <i class="fas fa-shopping-cart" style="font-size:120%; margin-top:2%"></i> Aggiugi al carrello
                                                                    </button>
                                                           </div>
                                                     </div>
                                                     
                                                    
                                                    </div>
                                        </div>
                
                                        <div class="col-md-1">

                                        </div>
                                        
                                    
                                @endforeach
        

                        </div>
                            
                    

                      </div>

                    </div>

                </div>
        </div>
</div>



@endsection