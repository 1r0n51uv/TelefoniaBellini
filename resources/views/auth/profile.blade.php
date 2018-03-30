@extends('layouts.profile')


@section('content')

<div class="wrapper">
    <div class="page-header page-header-small" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg5.jpg');">
        </div>
        <div class="container">
            <div class="content-center">
                <div class="photo-container">

                    @if(isset(Auth::user()->fb_pic))
                    <img src="{{Auth::user()->fb_pic}}">
                    @elseif(isset(Auth::user()->g_pic))
                    <img src="{{Auth::user()->g_pic}}">
                    @endif
                
                
                </div>
                
                <h3 class="title">Il tuo profilo</h3>                
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">

            <h3 class="title">{{Auth::user()->name}} {{Auth::user()->surname}}</h3>
            <p class="category">Nome</p>

            <h3 class="title">{{Auth::user()->email}}</h3>
            <p class="category">Email</p>
        
        
        </div>
    </div>
    <a href="{{ Auth::logout() }}">logout</a>
</div>



@endsection