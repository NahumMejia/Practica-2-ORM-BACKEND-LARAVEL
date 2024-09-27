<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ $user->name }}</title>
        @vite("resources/css/app.css")
    </head>
    <body class="font-sans">
        <div class="selection:bg-[#FF2D20] selection:text-white">
            <div class="my-3 pt-3 shadow">
                <h1>{{ $user->name }}</h1>
                <h3>{{ $user->email }}</h3>
                <p>
                    <strong>Instagram</strong>
                    : {{ $user->profile->instagram }}
                    <br />
                    <strong>Github</strong>
                    : {{ $user->profile->github }}
                    <br />
                    <strong>Web</strong>
                    : {{ $user->profile->web }}
                </p>
            </div>
        </div>
    </body>
</html>
