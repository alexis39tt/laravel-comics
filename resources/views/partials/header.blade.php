<header>
        <div class="top">
            <p>DC POWER&#8480; VISA&#174;</p>
            <p>ADDITIONAL DC SITES &#9660;</p>
        </div>
        <div class="bottom">
            <div class="img">
                <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
            </div>
            <div class="links">
                <ul>
                    <a href="/characters" class="{{ Route::currentRouteName() == 'characters' ? 'active' : '' }}">
                        <li>characters</li>
                    </a>
                    <a href="/comics" class="{{ Route::currentRouteName() == 'comics' ? 'active' : '' }}">
                        <li>comics</li>
                    </a>
                    <a href="/movies" class="{{ Route::currentRouteName() == 'movies' ? 'active' : '' }}">
                        <li>movies</li>
                    </a>
                    <a href="/tv" class="{{ Route::currentRouteName() == 'tv' ? 'active' : '' }}">
                        <li>tv</li>
                    </a>
                    <a href="/games" class="{{ Route::currentRouteName() == 'games' ? 'active' : '' }}">
                        <li>games</li>
                    </a>
                    <a href="/collectibles" class="{{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}">
                        <li>collectibles</li>
                    </a>
                    <a href="/videos" class="{{ Route::currentRouteName() == 'videos' ? 'active' : '' }}">
                        <li>videos</li>
                    </a>
                    <a href="/fans" class="{{ Route::currentRouteName() == 'fans' ? 'active' : '' }}">
                        <li>fans</li>
                    </a>
                    <a href="/news" class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
                        <li>news</li>
                    </a>
                    <a href="/shop" class="{{ Route::currentRouteName() == 'shop' ? 'active' : '' }}">
                        <li>shop <span>&#9660;</span></li>
                    </a>
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </header>