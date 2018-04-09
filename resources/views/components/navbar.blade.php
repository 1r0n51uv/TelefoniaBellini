<nav class="navbar navbar-expand-lg bg-info fixed-top">
    <div class="container">
            <div class="navbar-translate">
                    <a class="navbar-brand" href="/index">Telefonia Bellini</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#example-navbar-info" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="example-navbar-info">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <input type="text" placeholder="Search. . ." class="form-control form-control-success" style="margin-top: 2%; border-color: grey;">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index">
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop2">
                                <p>Shop</p>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="/cart">
                                    <p>Carrello</p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">

                                @if(isset(Auth::user()->name))

                                <p>{{Auth::user()->name}}</p>

                                @else
                                
                                <p>Login</p>
                                
                                @endif             
                            
                            </a>
                        </li>
                    </ul>
                </div>
</nav>