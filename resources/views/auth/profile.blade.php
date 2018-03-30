@extends('layouts.profile')


@section('content')

<div class="wrapper">
    <div class="page-header page-header-small" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg5.jpg');">
        </div>
        <div class="container">
            <div class="content-center">
                <div class="photo-container">
                    <img src="{{Auth::user()->fb_pic}}" alt="">
                </div>
                
                <h3 class="title">Il tuo profilo</h3>                
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">

            <h3 class="title">{{Auth::user()->name}} {{Auth::user()->surname}}</h3>
            <p class="category">Nome</p>

            <h3 class="title">{{Auth::user()->email}}</h3>
            <p class="category">Email</p>
        
        
        </div>
    </div>
    <footer class="footer footer-default">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                            MIT License
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, Designed by
                <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </div>
        </div>
    </footer>
</div>



@endsection