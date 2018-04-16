@extends('layouts.profile')


@section('content')

<div class="wrapper">
    <div class="page-header page-header-small" filter-color="blue">
        <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/a.jpg');">
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
    


</div>

<div class="section section-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-6 ml-auto mr-auto">
                
                <!-- Nav tabs -->
                <div class="card">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                                <i class="now-ui-icons users_single-02"></i> Profilo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#order" role="tab">
                                <i class="now-ui-icons shopping_cart-simple"></i> Ordini
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#spedizione" role="tab">
                                <i class="now-ui-icons ui-1_settings-gear-63"></i> Spedizione {{Auth::user()->name}}
                            </a>
                        </li>
                       
                    </ul>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="profile" role="tabpanel">
                                <h3 class="title">{{Auth::user()->name}} {{Auth::user()->surname}}</h3>
                                <p class="category">Nome</p>
                    
                                <h3 class="title">{{Auth::user()->email}}</h3>
                                <p class="category">Email</p>

                            <a href="logout"><button class="btn btn-danger">Logout</button></a>
                            </div>
                            <div class="tab-pane" id="order" role="tabpanel">


                            </div>
                            <div class="tab-pane" id="spedizione" role="tabpanel">

                                @if (isset($shipment))
                            <h3 class="title">{{Auth::user()->address}}</h3>
                            <p class="category">Address</p>

                            <h3 class="title">{{Auth::user()->number}}</h3>
                            <p class="category">Number</p>

                            <h3 class="title">{{Auth::user()->city}}</h3>
                            <p class="category">City</p>

                            <h3 class="title">{{Auth::user()->province}}</h3>
                            <p class="category">Province</p>

                            <h3 class="title">{{Auth::user()->state}}</h3>
                            <p class="category">State</p>

                            <h3 class="title">{{Auth::user()->cap}}</h3>
                            <p class="category">CAP</p>


                                    @else
                                    <h3 class="title">Nessuna informazione di spedizione inserita</h3>
                                    <a  href="/shipmentDetails"><button class="btn btn-warning">Inserisci i dati</button></a>

                                    @endif


                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection