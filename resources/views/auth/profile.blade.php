@extends('layouts.profile')


@section('content')

    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="blue">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/image/02.jpg'); background-repeat: repeat">
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
                                    <i class="now-ui-icons shopping_delivery-fast"></i> Indirizzo di spedizione
                                </a>
                            </li>

                        </ul>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content text-center">

                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    @include('components.profileTabUserInfo')
                                </div>

                                <div class="tab-pane" id="order" role="tabpanel">
                                    @include('components.profileTabOrderInfo')

                                </div>

                                <div class="tab-pane" id="spedizione" role="tabpanel">
                                    @include('components.profileTabShipmentInfo')

                                </div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection