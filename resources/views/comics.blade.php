<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Comics</title>
</head>

<body>
    @include('partials.header')
    <main>
        <div class="banner"></div>
        <div class="comics">
            <div class="currentseries">
                <p>Current series</p>
            </div>
            <div class="comicscontainer" >
                @foreach($comics as $key => $elm)
                <a href="{{ url('comics', ['id' => $key]) }}">
                <div class="comic">
                    <div class="img">
                        <img src="{{ $elm['thumb'] }}" alt="{{ $elm['title'] }}">
                    </div>
                    <div class="title">
                        <p>{{ $elm['title'] }}</p>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>

</html>