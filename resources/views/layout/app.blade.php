<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        <title>Game of Thrones</title>
    </head>
    <body>
        <header>
            <h1>Game of Thrones</h1>
            <nav>
                <ul>
                    <li><a href="{{route('homepage')}}">Personnages</a></li>
                    <li><a href="{{route('houses')}}">Maisons</a></li>
                </ul>
            </nav>
            <div class="separator"></div>
        </header>
        <main>
            <div class="wrapper">

            @yield('content')

            </div>
        </main>
    </body>
</html>
