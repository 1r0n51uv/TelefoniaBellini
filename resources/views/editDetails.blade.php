@extends('layouts.master')

@section('content')

    <div class="section">

        <div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="card col-md-7" style="background-color: #2A363b">
                        <div class="header text-center">
                            <h4 class="title title-up" style="color: white"><i class="fas fa-truck"></i> Informazioni di spedizione</h4>
                        </div>

                        <form action="/editDetails/{{ $details->id }}" method="post">
                            {{ csrf_field() }}

                            <div class="card-body">

                                <div class="row justify-content-center">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <span style="color: white">Indirizzo</span>
                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control" placeholder="{{ $details->address }}" name="address" >
                                            </div>

                                            <span style="color: white">Numero</span>
                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control" placeholder="{{ $details->number }}" name="number" >
                                            </div>
                                            <span style="color: white">Città</span>
                                            <div class="input-group form-group-no-border" >


                                                <input type="text" class="form-control" placeholder="{{ $details->city }}" name="city" >
                                            </div>
                                            <span style="color: white">Provincia</span>
                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control" placeholder="{{ $details->province }}" name="province" >
                                            </div>


                                        </div>


                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <span style="color: white">CAP</span>
                                            <div class="input-group form-group-no-border"  >

                                                <input type="number" class="form-control" placeholder="{{ $details->cap }}" name="cap" >
                                            </div>
                                            <span style="color: white">Telefono</span>
                                            <div class="input-group form-group-no-border" >

                                                <input type="number" class="form-control" placeholder="{{ $details->phone }}" name="phone" >
                                            </div>
                                            <span style="color: white">Note</span>
                                            <div class="input-group form-group-no-border" >

                                                <textarea type="text" class="form-control" placeholder="{{ $details->description }}" name="description"></textarea>
                                            </div>




                                        </div>


                                    </div>

                                </div>

                                <div class="row justify-content-center">

                                    <div class="col-md-6 text-center">

                                        <button type="submit" class="btn btn-info">Inserisci dati</button>

                                        <a href="/profile">
                                            <button class="btn btn-danger">Annulla</button>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </form>




                    </div>




                </div>



            </div>


        </div>


    </div>




@endsection