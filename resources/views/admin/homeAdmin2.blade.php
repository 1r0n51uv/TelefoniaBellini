@extends('layouts.admin')

@section('content')

    <div class="section">


        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">
                    <h5 class="title">MAGAZZINO</h5>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header-pills">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                                        <i class="now-ui-icons users_single-02"></i> Utenti
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#order" role="tab">
                                        <i class="now-ui-icons shopping_cart-simple"></i> Ordini
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#device" role="tab">
                                        <i class="now-ui-icons tech_mobile"></i> Device
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#imgManager" role="tab">
                                        <i class="now-ui-icons design_image"></i> Image Manager
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    @include('admin.adminUserTab')
                                </div>
                                <div class="tab-pane" id="order" role="tabpanel">
                                    @include('admin.adminOrderTab')
                                </div>
                                <div class="tab-pane" id="device" role="tabpanel">
                                    @include('admin.adminDeviceTab')
                                </div>
                                <div class="tab-pane" id="imgManager" role="tabpanel">
                                    @include('admin.editSlider')
                                </div>


                            </div>

                        </div>

                    </div>


                    <div>

                    </div>

                </div>
            </div>
        </div>
    </div>







@endsection