<!DOCTYPE html>
<html>
      <head>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
            <link type="text/css" rel="stylesheet" href="{{asset('css/main.css')}}">
            <link type="text/css" rel="stylesheet" href="{{asset('css/login.css')}}">
            <title> @yield('title') </title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
             @yield('head')
      </head>
       <body>
             @include('inc._messages')
             @yield('content')
             @include('inc._footer')
             <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
             <script type="text/javascript" src="{{asset('js/myscript.js')}}"></script>
      </body>
</html>