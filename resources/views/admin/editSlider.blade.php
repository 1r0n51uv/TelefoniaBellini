<div class="body">
    <div class="container">
        <h1>Modifica immagine dello slider</h1>
        <div class="row justify-content-center">

            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">

                        <img src="{{$slider->pic1}}" alt="">

                    </div>

                    <div class="card-footer">
                        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="image[]" class="form-control" required>
                                    <input type="text" name="picvalue" value="1" hidden>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Modifica</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">

                        <img src="{{$slider->pic2}}" alt="">

                    </div>

                    <div class="card-footer">
                        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="image[]" class="form-control" required>
                                    <input type="text" name="picvalue" value="2" hidden>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Modifica</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">

                        <img src="{{$slider->pic3}}" alt="">

                    </div>

                    <div class="card-footer">
                        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="image[]" class="form-control" required>
                                    <input type="text" name="picvalue" value="3" hidden>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Modifica</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>





