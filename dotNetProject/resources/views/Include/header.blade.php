<!--BOOTSTRAP-->

<nav style=" font-size:25px" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('about') }}" style=" font-size:30px !important;">Read With Nour</a>
        <!-- the config will bring u to the map config and in the app file -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth()
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('profile') }}">
                        @auth
                        {{ auth()->user()->name }}
                        @endauth
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>

                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registration') }}">Registration</a>
                </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
