<nav class="navbar navbar-expand-lg bg-telbel fixed-top" >
    <div class="container">
        <div class="navbar-translate">
            <a href="/index" class="navbar-brand" style="font-size: 100%"><i class="fas fa-mobile" style="font-size: 200%"></i> Telefonia Bellini</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#example-navbar-info" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="example-navbar-info">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">

                    <input type="text" id="search" data-toggle="dropdown" placeholder="&#xF002 Ricerca.." class="form-control form-control-success" style="margin-top: 3%; border-color: white; font-family: FontAwesome, 'Arial';" autocomplete="off">


                    <!-- search box container ends  -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <div id="txtHint" class="title-color" style="text-align:center;" ></div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index">
                        <i class="now-ui-icons objects_globe" title="Home"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shopping" title="Shop Now">
                        <i class="now-ui-icons shopping_shop"></i>
                        Shop
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart">
                        <i class="now-ui-icons shopping_cart-simple" title="Carousel"></i>
                        Carrello
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login" title="Il tuo profilo">

                        @if(isset(Auth::user()->name))
                            <i class="now-ui-icons users_circle-08"></i>
                            {{Auth::user()->name}}
                        @else
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Login</p>

                        @endif



                    </a>
                </li>
            </ul>
        </div>


    </div>





</nav>







<!-- Risultati ricerca
<div class="section">
    <div id="txtHint" class="title-color" style="text-align:center;"></div>
</div>

-->
