<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >
        <link rel="stylesheet" href="{!! asset('css/bootstrap-material-design.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/ripples.css') !!}">
        <link rel="stylesheet" type="text/css" href="css/style.css" >        
        
    </head>
    <body>
      @include('shared.navbar')
      @yield('content')
      
      
      <script src="{!! asset('js/jquery-3.2.1.min.js') !!}"></script>
      <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
      
      <script src="js/ripples.min.js"></script>
      <script src="js/material.min.js"></script>
      
      <script>
        $(document).ready(function() {
          // This command is used to initialize some elements and make them work properly
          $.material.init();
        });
      </script>

      
      
    </body>
</html>

