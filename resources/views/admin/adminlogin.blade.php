@extends('layouts.admin')

@section('content')


    <div class="section section-signup" style="background-image: url('assets/img/blurredimage-1.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
            <div class="row">
                <div class="card card-signup" data-background-color="black" style="margin-top:-3%">

                    <form class="form" method="POST" action="{{ route('adminlogin') }}">
                        {{ csrf_field() }}
                        <div class="header text-center">
                            <h4 class="title title-up">ADMINISTRATOR</h4>

                        </div>
                        <div class="card-body">



                            <div class="input-group form-group-no-border">
                            <span class="input-group-addon">
                                <i class="fas fa-user-tie"></i>
                            </span>
                                <input type="text" class="form-control" placeholder="Username" name="usr">
                            </div>

                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fas fa-unlock-alt"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="Password" name="password">

                            </div>



                            <!-- If you want to add a checkbox to this form, uncomment this code -->
                            <!-- <div class="checkbox">
                              <input id="checkboxSignup" type="checkbox">
                                  <label for="checkboxSignup">
                                  Unchecked
                                  </label>
                                </div> -->
                        </div>
                        <div class="footer text-center">


                            <button type="submit" class="btn btn-success btn-round btn-lg" style="background-color: whitesmoke; color: black;">Login</button>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

    @include('components.footer')




    @endsection