<nav class="navbar navbar-expand-lg bg-info fixed-top">
    <div class="container">
            <div class="navbar-translate" >
                    <a class="navbar-brand" href="/index">Telefonia Bellini</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#example-navbar-info" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="example-navbar-info">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            
                                <input type="text" id="search" data-toggle="dropdown" placeholder="Search. . ." class="form-control form-control-success" style="margin-top: 2%; border-color: grey;" autocomplete="off">
                            
                            
                        <!-- search box container ends  -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <div id="txtHint" class="title-color" style="text-align:center;" ></div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index">
                                <i class="now-ui-icons objects_globe" title="Home"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shopping" title="Shop Now">
                                <i class="now-ui-icons shopping_shop"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="/cart">
                                    <i class="now-ui-icons shopping_cart-simple" title="Carousel"></i>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login" title="Il tuo profilo">

                                @if(isset(Auth::user()->name))
                                    <i class="now-ui-icons users_circle-08" {{Auth::user()->name}}></i>

                                @else
                                
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
