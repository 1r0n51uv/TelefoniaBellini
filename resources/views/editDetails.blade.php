@extends('layouts.master')

@section('content')

    <div class="section">

        <div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="card col-md-7" style="background-color: orange">
                        <div class="header text-center">
                            <h4 class="title title-up" style="color: black"><i class="fas fa-truck"></i> Informazioni di spedizione</h4>
                        </div>

                        <form action="{{ route('/updateDetails/' . $details->id ) }}" method="post">
                            {{ csrf_field() }}

                            <div class="card-body">

                                <div class="row justify-content-center">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control" placeholder="{{ $details->address }}" name="address" required>
                                            </div>

                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control" placeholder="{{ $details->number }}" name="number" required>
                                            </div>

                                            <div class="input-group form-group-no-border" >


                                                <input type="text" class="form-control" placeholder="{{ $details->city }}" name="city" required>
                                            </div>

                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control" placeholder="{{ $details->province }}" name="province" required>
                                            </div>


                                        </div>


                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <div class="input-group form-group-no-border"  >

                                                <input type="number" class="form-control" placeholder="{{ $details->cap }}" name="cap" required>
                                            </div>

                                            <div class="input-group form-group-no-border" >

                                                <input type="number" class="form-control" placeholder="{{ $details->phone }}" name="phone" required>
                                            </div>

                                            <div class="input-group form-group-no-border" >

                                                <textarea type="text" class="form-control" placeholder="{{ $details->description }}" name="description"></textarea>
                                            </div>

                                            <div class="input-group form-group-no-border" >

                                                <input type="number" class="form-control" placeholder="{{ $details->updated_at }}" name="updated_at" required>
                                            </div>

                                            <div class="input-group form-group-no-border" >

                                                <textarea type="text" class="form-control" placeholder="{{ $details->created_at }}" name="created_at"></textarea>
                                            </div>




                                        </div>


                                    </div>

                                </div>

                                <div class="row justify-content-center">

                                    <div class="col-md-6 text-center">

                                        <button type="submit" class="btn btn-info">Inserisci dati</button>

                                    </div>

                                </div>

                            </div>

                        </form>




                    </div>




                </div>



            </div>


        </div>


    </div>


    <script src="./assets/js/stripeui.js" type="text/javascript"></script>

@endsection