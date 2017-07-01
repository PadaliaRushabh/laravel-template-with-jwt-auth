<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Base</title>
        <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        @yield('content')

        <script src="{{ URL::asset('js/main.js') }}"> </script>
        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
