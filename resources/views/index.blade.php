@extends('layouts.master')

@section('content')






    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="blue">
            <div class="page-header-image" data-parallax="true"
                 style="background-image: url('./assets/image/wall.jpg');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="./assets/img/now-logo.png" alt="">
                    <h1 class="h1">TelefoniaBellini.</h1>
                    <h3>""""""""""""".</h3>
                </div>
                <h6 class="category category-absolute">Designed by
                    <a href="pablo" target="_blank">
                        <img src="" class="invision-logo"/>
                    </a>. Coded by
                    <a href="pablo" target="_blank">
                        <img src="" class="creative-tim-logo"/>
                    </a>.</h6>
            </div>
        </div>
        <div class="main">
            <div class="section section-images"
                 style="background-image: url(/assets/img/blurredimage-1.jpg); background-size: cover; ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero-images-container">
                                <img src="assets/img/image1.png" alt="">
                            </div>
                            <div class="hero-images-container-1">
                                <img src="assets/img/image4.png" alt="">
                            </div>
                            <div class="hero-images-container-2">
                                <img src="assets/img/image6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-tabs">
                <div class="container" style="margin-left: 4%; margin-bottom: -3%; margin-top: -3%;">
                    <div class="row">
                        <div class="col-md-6">
                              <a href="/shop2">
                                  <div class="">
                                    <div class="text-center">
                                      <img src="/assets/img/i8.png" class="img-responsive">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="/shop2">
                                <div class="">
                                    <div class="">
                                        <img src="/assets/img/airp.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>









@endsection