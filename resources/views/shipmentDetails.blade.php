@extends('layouts.master')

@section('content')


        <div class="section section-signup" style="background-image: url('/assets/image/shipment.png'); background-size: cover; background-position: top center; min-height: 700px;">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="card col-md-7" style="background-color: orange">
                        <div class="header text-center">
                            <h4 class="title title-up" style="color: black"><i class="fas fa-truck"></i> Informazioni di spedizione</h4>
                        </div>

                        <form action="{{ route('insertShipmentDetails') }}" method="post">
                            {{ csrf_field() }}

                            <div class="card-body">

                                <div class="row justify-content-center">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <span style="color: white">Indirizzo</span>
                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control"  name="address" required>
                                            </div>

                                            <span style="color: white">Numero</span>
                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control"  name="number" required>
                                            </div>
                                            <span style="color: white">Città</span>
                                            <div class="input-group form-group-no-border" >


                                                <input type="text" class="form-control"  name="city" required>
                                            </div>
                                            <span style="color: white">Provincia</span>
                                            <div class="input-group form-group-no-border" >

                                                <input type="text" class="form-control"  name="province" required>
                                            </div>


                                        </div>


                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <span style="color: white">CAP</span>
                                            <div class="input-group form-group-no-border"  >

                                                <input type="number" class="form-control"  name="cap" required >
                                            </div>
                                            <span style="color: white">Telefono</span>
                                            <div class="input-group form-group-no-border" >

                                                <input type="number" class="form-control"  name="phone" required >
                                            </div>
                                            <span style="color: white">Note</span>
                                            <div class="input-group form-group-no-border" >

                                                <textarea type="text" class="form-control"  name="description"></textarea>
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







@endsection