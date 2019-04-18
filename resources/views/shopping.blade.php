@extends('layouts.master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section('content')



    <div class="section" style="background-image: url('/assets/img/blurredimage-1.jpg'); background-size: cover; " >

        <div class="row justify-content-center">
            <div class="container-fluid">

                <div class="col-sm-12">
                    <hr>

                    <div class="row justify-content-center" style="text-align: center">

                        <div class="row justify-content-center">
                            @include('components.brandHome')
                        </div>

                    </div>

                    <hr>

                    <div>

                        <div class="row justify-content-center" >
                            @foreach( $phones as $phone)

                                @include('components.singleProduct')

                            @endforeach
                        </div>

                    </div>

                    <div class="row justify-content-center">


                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary">
                                @if($paginate == true)

                                    {{ $phones->links() }}

                                @else

                                @endif
                            </ul>

                        </nav>


                    </div>


                </div>

            </div>
        </div>
    </div>



@endsection

