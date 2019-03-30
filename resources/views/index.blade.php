@extends('layouts.master')

@section('content')



    <div class="section" style="margin-top: 1%">


        <div class="container-fluid">

            <div class="row">
                @include('components.homeSlider')
                @include('components.brandHome')
                @include('components.homeEvidence')
                @include('components.indexNews')
            </div>



        </div>




    </div>












@endsection