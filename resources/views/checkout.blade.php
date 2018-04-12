@extends('layouts.master')

@section('content')

<div class="section">

        <div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
            <div class="container">
                <div class="row">
            
                    <div class="col-md-3">

                    </div>

                    

                    <div class="card col-md-6" style="margin-top:-3%; background-color: #F7F8F9">
                        
                            <div class="header text-center">
                                <h4 class="title title-up" style="color: black"><i class="far fa-credit-card"></i> Checkout</h4>
                            </div>
        
                            <div class="card-body">
          
                                
                                <div class="row">
        
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                    <form action="/api/pay" method="post" id="payment-form">
                                                        <div class="form-group">
                                                    
                                                          <div id="card-element">
                                                            <!-- A Stripe Element will be inserted here. -->
                                                          </div>
                                                      
                                                          <!-- Used to display Element errors. -->
                                                          <div id="card-errors" role="alert"></div>
                                                        </div>

                                                        <div class="text-center">
                                                                <button class="btn btn-success">Submit Payment</button>
                                                        </div>
                                                      
                                                    <input type="text" hidden value="{{Cart::subtotal()}}" name="amount">
                                                    <input type="text" hidden value="{{Auth::user()->id}}" name="user">

                                                      </form>
                                            </div>
                                            
                                    </div>
                                   
                                        
                                </div>
        
                                <div class="row" style="padding-top: 2%; padding-bottom: 2%">
        
                                    <div class="col-md-6">
        
                                       
                                    </div>
        
                                    <div class="col-md-6">
        
                                        <div class="text-center">
        
                                        <h5>{{ Cart::subtotal()}} </h5>
        
                                        </div>
        
                                    </div>
        
                                </div>
                            
                            </div>
        
                               
        
                            
                            </div>
                                
        
                    </div>

                                                
        
                    </div>


                </div>
               
                
            </div>
        </div>
        

</div>

<script src="./assets/js/stripeui.js" type="text/javascript"></script>

@endsection