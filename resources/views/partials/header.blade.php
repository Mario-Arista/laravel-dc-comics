<header>
    <div class="blue-header-element">
        <div class="container">
            <div class="text">DC power &#8480; Visa &#174;</div>
            <div class="text">Additional DC Sites &#10507;</div>
        </div>
    </div>
    <nav>
        <div class="container">
            <a href="{{route('comics.index')}}">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
            </a>

            <ul>
                <li>
                    <a class="text-decoration-none text-dark" href="{{route('comics.index')}}">Home</a>
                </li>
                <li>Movies</li>
                <li>Tv</li>
                <li>Games</li>
                <li>Videos</li>
                <li class="active">
                    <a class="text-decoration-none" href="{{route('comics.create')}}">Crea Fumetto</a>
                </li>
            </ul>
            <div class="search-cont">
                <input class="header-search" type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </nav>
</header>