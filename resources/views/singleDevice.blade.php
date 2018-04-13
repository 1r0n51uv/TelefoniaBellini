@extends('layouts.master')

@section('content')

<div class="section">

        <div class="section section-signup" style="background-image: url('../assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
            <div class="container">
                <div class="row justify-content-center">
            
                

                    <div class="card col-md-10" style="margin-top:-10%; background-color: #F7F8F9">
                        
                            <div class="header text-center">
                            </div>
        
                            <div class="card-body">
          
                                
                                <div class="row">
        
                                   <div class="col-md-8 col-sm-12">
                                    
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" >
                                                
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block" src="../assets/img/bg1.jpg" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Nature, United States</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="../assets/img/bg3.jpg" alt="Second slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Somewhere Beyond, United States</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="../assets/img/bg4.jpg" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Yellowstone National Park, United States</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                                        </a>
                                    </div>
                                    
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-6" style="border: 1px red solid">

                                        <div class="row">

                                            <div class="col-md-12 text-left" style="border: blue 1px solid">

                                                <h4 class="card-text"><i class="fab fa-apple"></i> {{ $phone->brand}}</h4>
                                                <h4 class="card-text"><i class="fas fa-mobile-alt"></i> {{ $phone->model}}</h4>
                                                <h4 class="card-text"><i class="far fa-hdd"></i> {{ $phone->storage}} GB</h4>
                                                <h4 class="card-text"><i class="fas fa-paint-brush"></i> {{ $phone->color}}</h4>
                                            
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
        

</div>

@endsection