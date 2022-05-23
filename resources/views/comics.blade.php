<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
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
                    <a href="/characters">
                        <li>characters</li>
                    </a>
                    <a href="/comics">
                        <li>comics</li>
                    </a>
                    <a href="/movies">
                        <li>movies</li>
                    </a>
                    <a href="/tv">
                        <li>tv</li>
                    </a>
                    <a href="/games">
                        <li>games</li>
                    </a>
                    <a href="/collectibles">
                        <li>collectibles</li>
                    </a>
                    <a href="/videos">
                        <li>videos</li>
                    </a>
                    <a href="/fans">
                        <li>fans</li>
                    </a>
                    <a href="/news">
                        <li>news</li>
                    </a>
                    <a href="/shop">
                        <li>shop <span>&#9660;</span></li>
                    </a>
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </header>
    <main>
        <div class="banner"></div>
        <div class="comics">
            <div class="currentseries">
                <p>Current series</p>
            </div>
            <div class="comicscontainer">
                @foreach($comics as $elm)
                <p>{{ $elm['title'] }}</p>
                @endforeach
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>