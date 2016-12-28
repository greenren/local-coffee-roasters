<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <title>Local Coffee Roasters</title>
    </head>
    <body>
        @include('layouts.navbar')
        <div class="container">
            <div class="page-header">
                @yield('header')
            </div>

            @yield('content')

        </div>
        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </body>
</html>
