<header class="">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC main logo" width="60rem">
            </div>
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item nav-link">Characters</li>
                    <li class="{{ ( Route::currentRouteName() == 'pages.comics') ? 'active' : '' }}">
                        <a href="{{ route('pages.comics') }}" class="nav-item nav-link">
                            Comics
                        </a>
                    </li>
                    <li class="nav-item nav-link">Movies</li>
                    <li class="nav-item nav-link">Tv</li>
                    <li class="nav-item nav-link">Games</li>
                    <li class="nav-item nav-link">Collectibles</li>
                    <li class="nav-item nav-link">Videos</li>
                    <li class="nav-item nav-link">Fans</li>
                    <li class="nav-item nav-link">News</li>
                    <li class="nav-item nav-link">Shop</li>
                </ul>
              </div>
              <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            </div>
        </nav>
    </div>
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" class="w-100">
</header>