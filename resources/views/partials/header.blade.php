<header class="header">
    <div class="header_top">
        <div class="header_top_container">
            <a href="/#">dc power visa<i class="fa-regular fa-registered"></i></a>
            <a href="/#">additional dc sites <i class="fa-solid fa-caret-down"></i></a>
        </div>
    </div>
    <div class="header_container">
        <div class="header_logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="DC LOGO">
        </div>
        <div class="header_nav">
            <nav>
                <ul>
                    <li class="{{Route::CurrentRouteName() == 'characters' ? 'active' : ''}}">
                        <a href="/#">Characters</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'comics' ? 'active' : ''}}">
                        <a href="{{Route('comics.index')}}">Comics</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'movies' ? 'active' : ''}}">
                        <a href="/#">Movies</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'tv' ? 'active' : ''}}">
                        <a href="/#">TV</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'games' ? 'active' : ''}}">
                        <a href="/#">Games</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'collectibles' ? 'active' : ''}}">
                        <a href="/#">Collectibles</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'videos' ? 'active' : ''}}">
                        <a href="/#">Videos</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'fans' ? 'active' : ''}}">
                        <a href="/#">Fans</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'news' ? 'active' : ''}}">
                        <a href="/#">News</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'shop' ? 'active' : ''}}">
                        <a href="/#">Shop <i class="fa-solid fa-caret-down"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header_search">
            <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</header>