<div class="body">

    @foreach($spec as $device)

        <div class="row">

            <div class="col-md-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="background-color: white">
                            <img class="d-block" src="{{ $device->pic1 }}" alt="First slide" style="width: 60%; display:block; margin:auto;">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item" style="background-color: white;">
                            <img class="d-block" src="{{ $device->pic2 }}" alt="Second slide" style="width: 60%; display:block; margin:auto;">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item" style="background-color: white">
                            <img class="d-block" src="{{ $device->pic3 }}" alt="Third slide" style="width: 60%; display:block; margin:auto;">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                       data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-left" style="color: black"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                       data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-right" style="color: black"></i>
                    </a>
                </div>
                <ul class="nav nav-pills nav-stacked">
                </ul><br>
                <div class="input-group">
                    <span class="input-group-btn"></span>
                </div>
            </div>

            <div class="col-md-7">
                    <div class="row">
                        <div class="col-6">

                            <h5 class="card-text"><i class=""></i><b>Marca: </b> {{ $device->brand}} </h5>
                            <h5 class="card-text"><i class=""></i><b>Modello:</b> {{ $device->model}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Peso:</b> {{ $device->weight}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Memoria:</b> {{ $device->memory}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Sistema Operativo:</b> {{ $device->system}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Quantità:</b> {{ $device->qty}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Etichetta:</b> {{ $device->description}}</h5>


                        </div>
                        <br>
                        <div class="col-6">
                            <h5 class="card-text"><i class=""></i><b>Processore:</b> {{ $device->processor}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Dimensione Schermo:</b> {{ $device->screen}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Schermo:</b> {{ $device->display}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Risoluzione Schermo:</b> {{ $device->resolution}}</h5>
                            <h5 class="card-text"><i class=""></i><b>Fotocamera:</b> {{ $device->camera}}</h5>

                        </div>
                    </div>

                </div>

            <div class="col-md-2">



                <a href="/deleteDevice/{{$device->id}}"><button class="btn btn-danger btn-icon btn-round" type="button">
                        <i class="fas fa-times"></i>
                    </button></a>

                <a href="/editphone/{{$device->id}}"><button class="btn btn-info btn-icon btn-round" type="button">
                        <i class="fas fa-edit"></i>
                    </button></a>

            </div>



            </div>

        <hr>


    @endforeach

</div>