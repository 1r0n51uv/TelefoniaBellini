@extends('layouts.master')

@section('content')



    <div class="section" style="margin-top: 1%">


        <div class="container-fluid">

            <div class="row">
                @include('components.homeSlider')
            </div>


            <div class="row justify-content-center">
                <div class="container">
                    @include('components.brandHome')
                </div>
            </div>

            @include('homeEvidence')


        </div>




    </div>












@endsection