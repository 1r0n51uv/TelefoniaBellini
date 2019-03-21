@extends('layouts.master')

@section('content')



    <div class="section" style="margin-top: 1%">
        <div class="main">



            @include('components.homeSlider')
            <div class="col-md-12">
                <div class="row">



                    <div class="col-md-12">
                        <a href="/shopfilter/Apple"><div class="section section-images" style="background-image: url('/assets/image/i.png'); background-size: cover; margin-top: 1%; margin-bottom: 1%;">
                                <div class="container">
                                    <div class="row">

                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">
                        <a href="/shopfilter/Samsung"><div class="section section-images" style="background-image: url('/assets/image/splus.jpg'); background-size: cover; margin-top: 1%; margin-bottom: 1%;">
                                <div class="container">

                                    <div class="row">


                                    </div>

                                </div>

                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        <a href="/shopfilter/Huawei"><div class="section section-images" style="background-image: url('/assets/image/p20.png'); background-size: cover; margin-top: 1%; margin-bottom: 1%;">
                                <div class="container">
                                    <div class="row">

                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                </div>
            </div>


        </div>


    </div>












@endsection