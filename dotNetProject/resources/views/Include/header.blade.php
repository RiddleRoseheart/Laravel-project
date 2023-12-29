

    <!--BOOTSRTPS-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        <!-- the config will bring u to the map config and in the app file -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        @auth 
        <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

        @else
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('registration')}}">Registration</a>
        </li>
            
        @endauth
            
        </ul>

        <span class="navbar-text">
            @auth
            {{auth()->user()->name}} 
        @endauth
    </span> 
        </div>
    </div>
    </nav>


