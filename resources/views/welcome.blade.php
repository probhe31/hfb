<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <script src="{{ URL::asset('Build/UnityLoader.js') }}"></script>

        <script>
          var gameInstance = UnityLoader.instantiate("gameContainer", "Build/web.json");
        </script>

    </head>
    <body>
         <div id="gameContainer" style="width: 640px; height: 576px; margin: auto"></div>
    </body>
</html>
