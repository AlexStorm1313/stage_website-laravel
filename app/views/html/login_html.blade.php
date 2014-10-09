<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In - Alex Brasser</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Lobster' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
        <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js') }}"></script>
        <script src="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}"></script>
  </head>
  <body>
   @yield('login')
  </body>
</html>