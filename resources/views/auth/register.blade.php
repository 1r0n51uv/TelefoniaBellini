@extends('layouts.master')

@section('content')

<div class="section section-signup" style="background-image: url('assets/img/blurredimage-1.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
    <div class="container">
        <div class="row">
            <div class="card card-signup" data-background-color="black" style="margin-top:-3%">
                <form class="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="header text-center">
                        <h4 class="title title-up">Sign In</h4>
                        <div class="social-line">
                            <a href="login/google" class="btn btn-neutral btn-google btn-icon btn-round">
                                <i class="fab fa-google-plus-g" style="font-size:120%; margin-top:25%"></i>
                            </a>
                            <a href="login/facebook" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                <i class="fab fa-facebook-square" style="font-size:120%; margin-top:25%"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">


                        <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nome" name="name" required>
                            </div>

                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Cognome" name="surname" required>
                                </div>

                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="far fa-envelope-open"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                                </div>
                        <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fas fa-unlock-alt"></i>
                                </span>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>

                        </div>
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fas fa-user"></i>
                                    </span>
                            <input type="text" class="form-control" placeholder="Indirizzo" name="indirizzo" required>
                        </div>
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fas fa-user"></i>
                                    </span>
                            <input type="text" class="form-control" placeholder="Provincia" name="provincia" required>
                        </div>
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fas fa-user"></i>
                                    </span>
                            <input type="text" class="form-control" placeholder="CAP" name="cap" required>
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
                            
                        <button type="submit" class="btn btn-success btn-round btn-lg" style="background-color: whitesmoke; color: black;">Registrati</button>

                    </div>
                    
                    
                </form>
            </div>
        </div>
       
    </div>
</div>

@endsection
