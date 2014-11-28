<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - Alex Brasser</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Lobster' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/landing.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
  </head>
  <body>
  @yield('content')
        <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js') }}"></script>
        <script src="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}"></script>
  </body>
</html>