@extends('layouts.master')

@section('content')
<div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
    <div class="container">
        <div class="row">
            <div class="card card-signup" data-background-color="orange" style="margin-top:-3%">
                <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="header text-center">
                        <h4 class="title title-up">Login</h4>
                        <div class="social-line">
                            <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-round">
                                <i class="fab fa-twitter" style="font-size:120%; margin-top:25%"></i>
                            </a>
                            <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round">
                                <i class="fab fa-facebook-square" style="font-size:170%; margin-top:25%"></i>
                            </a>
                            <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                <i class="fab fa-google-plus-g" style="font-size:120%; margin-top:25%"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                       

                        
                        <div class="input-group form-group-no-border">
                            <span class="input-group-addon">
                                <i class="far fa-envelope-open"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>

                        <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fas fa-unlock-alt"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                
                            </div>
                        
                           

                        <!-- If you want to add a checkbox to this form, uncomment this code -->
                        <!-- <div class="checkbox">
                          <input id="checkboxSignup" type="checkbox">
                              <label for="checkboxSignup">
                              Unchecked
                              </label>
                            </div> -->
                    </div>
                    <div class="footer text-center">
                            
                        <a href="{{ route('register') }}" class="btn btn-neutral btn-round btn-lg">Registrati</a>
                        <button type="submit" class="btn btn-success btn-round btn-lg">Login</button>

                    </div>
                    
                    <div class="text-center" style="padding-bottom:10%">
                        <a href="{{ route('password.request') }}">Passowrd dimenticata?</a>
                    </div>
                    
                </form>
            </div>
        </div>
       
    </div>
</div>
@endsection
