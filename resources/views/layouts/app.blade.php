<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Klopapier Verfügbarkeit')</title>

        <script src="{{ asset('js/app.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @hasSection('meta-description')
            <meta name="description" value="@yield('meta-description')"/>
        @endif
    </head>
    <body>
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">Die Daten werden von <a href="https://dm.de" target="_blank">dm.de</a> abgerufen. Diese
                    Seite steht in keinem Zusammenhang mit der dm-drogerie markt GmbH + Co. KG.</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://github.com/MrKrisKrisu/toilet-paper-availability" target="_blank">Github</a>
                    </li>
                    <li class="list-inline-item"><a href="{{route('imprint')}}">Impressum</a></li>
                    <li class="list-inline-item"><a href="{{route('datenschutz')}}">Datenschutz</a></li>
                </ul>
            </footer>
        </div>
    </body>
</html>
