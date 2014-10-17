<!DOCTYPE html>
<html ng-app="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alex Brasser</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Lobster' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
  </head>
  <header>
  <div class="container">
    @yield('header')
    </div>
  </header>
  <body>
  <div ng-controller="PanelController as panel" class="container">
    @yield('navigation')
    @yield('content')
  </div>
  @yield('footer')
  <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js') }}"></script>
  <script src="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>
  </body>
</html>