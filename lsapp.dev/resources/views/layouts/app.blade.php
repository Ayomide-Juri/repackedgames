<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <script src="{{asset('js/app.js')}}"></script>


        <title>LSAPP.DEV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      
    </head>
    <body>
        
        @include('inc.navbar')
        <div class="container">
            @yield('content')  
             @include('inc.carousel')
             @include('inc.available_games')
        </div>
    </body>
</html>
