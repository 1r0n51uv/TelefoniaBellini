@extends('layouts.master')

@section('content')

<div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
    <div class="container">
        <div class="row">
            <div class="card card-signup" data-background-color="blue" style="margin-top:-3%">
                <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="header text-center">
                        <p>Inserisci una password</p>
                        <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fas fa-unlock-alt"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="" name="password" required>
                                
                            </div>
                        <p>Compleanno?</p>

                        <div class="datepicker-container">
                            <div class="form-group">
                                <input type="text" class="form-control date-picker" value="10/05/2016" / data-datepicker-color="info">
                            </div>
                        </div>

                        <a href="{{ route('register') }}" class="btn btn-neutral btn-round btn-lg">Completa Registrazione</a>
                        
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>
       
    </div>
</div>


@endsection