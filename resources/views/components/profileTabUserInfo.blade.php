<div>
    <h3 class="title">{{Auth::user()->name}} {{Auth::user()->surname}}</h3>
    <p class="category">Nome</p>

    <h3 class="title">{{Auth::user()->email}}</h3>
    <p class="category">Email</p>

    <a href="logout">
        <button class="btn btn-danger">Logout</button>
    </a>
</div>