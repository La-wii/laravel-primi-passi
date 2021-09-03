<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>

    <header>
            <nav>
                <ul>
                    <li>
                        <a href="{{route ('homepage')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route ('about-us')}}">About us</a>
                    </li>
                    <li>
                        <a href="{{route ('contact')}}">Contatti</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>{{$title}}</h1>
            <p>{{$paragrafo}}</p>
        </main>

    </body>
</html>
