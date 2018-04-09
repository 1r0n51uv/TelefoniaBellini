@extends('layouts.master')

@section('content')

<div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
    <div class="container">
        <div class="row">
        
            <div class="card col-md-7" data-background-color="white" style="margin-top:-3%">
                
                    <div class="header text-center">
                        <h4 class="title title-up" style="color: black"><i class="fas fa-shopping-cart"></i> Carrello</h4>
                    </div>

                    <div class="card-body" >

                        @foreach (Cart::content() as $item)
                        
                        <div class="row">

                                <div class="col-md-2 col-sm-2 col-xs-2 text-center" style="color: black; font-size: 200%; border-right: 1px gray solid">
                                        <i class="fas fa-mobile-alt"></i>
                                </div>
    
                                <div class="col-md-5 col-sm-5 col-xs-5 text-center" style="border-right: 1px gray solid">
                                    <h5 style="color: black; margin-top:1%; ">{{$item->name}}</h5>
                                </div>
    
                                <div class="col-md-3 col-sm-3 col-xs-3 text-center" style="border-right: 1px gray solid">
                                    <h5 style="color: black; margin-top:1%; ">{{$item->price}}</h5>
                                </div>
    
    
                            
                                <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                    <a href="/cart/{{$item->rowId}}">
                                            <button class="btn btn-danger btn-icon btn-round" type="button">
                                                    <i class="fas fa-times" style="font-size: 150%; margin-top:5%"></i>
                                                </button>                               
                                            </a>
                                    </div>
    
    
    
                                </div>
                                @endforeach
                        </div>

                    </div>

                        

            </div>
                        
                   

                       
                    <div class="footer text-center">
                            
                       

                    </div>
                    

            </div>
        </div>
       
    </div>
</div>


@endsection



