


<div class="col-md-12 col-sm-12 col-xs-12">

    <!-- carousel code -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner skyblue">

            <!-- first slide -->
            <div class="carousel-item active" style="background-image: url({{$slider->pic1}}); background-size: cover; background-position: 50% 50% ">
                <div class="carousel-caption d-md-block">
                    <h3 data-animation="animated bounceInRight" style="background-color: #345C7D">
                        This is the caption for slide 1
                    </h3>
                    <button class="btn btn-primary btn-lg" data-animation="animated zoomInUp">Button</button>
                </div>
            </div>

            <!-- second slide -->
            <div class="carousel-item skyblue" style="background-image: url({{$slider->pic2}}); background-size: cover; background-position: 50% 50% ">

                <div class="carousel-caption d-md-block" >
                    <h3 data-animation="animated bounceInUp" style="background-color: #345C7D">
                        This is the caption for slide 2
                    </h3>
                    <button class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Button</button>
                </div>
            </div>

            <!-- third slide -->
            <div class="carousel-item skyblue" style="background-image: url({{$slider->pic3}}); background-size: cover; background-position: 50% 50% ">

                <div class="carousel-caption d-md-block" >
                    <h3 data-animation="animated bounceInUp" style="background-color: #345C7D">
                        This is the caption for slide 2
                    </h3>
                    <button class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Button</button>
                </div>
            </div>
                <div class="carousel-caption d-md-block">
                    <h3 class="icon-container" data-animation="animated zoomInLeft">
                        <span class="fa fa-glass"></span>
                    </h3>
                    <h3 data-animation="animated flipInX">
                        This is the caption for slide 3
                    </h3>
                    <button class="btn btn-primary btn-lg" data-animation="animated lightSpeedIn">Button</button>
                </div>
            </div>
        </div>

        <!-- controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>



