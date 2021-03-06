<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{asset('css/main.css')}}"  media="screen,projection"/>
        <title> U -- @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        @yield('head')
    </head>

    <body id="background">
             <main>
                 @include('inc._messages')
                 @yield('content')
             </main>
             <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
             <script type="text/javascript" src="{{asset('js/myscript.js')}}"></script>
    </body>
</html>