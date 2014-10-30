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
        <base href="/">
  </head>
  <header>
  <div class="container">
    <div class="animated fadeInDown jumbotron">
             <h1 class="animated fadeInUp">Welkom {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }}</h1>
             <p class="animated fadeInUp">U bent een {{ Auth::user()->role; }}</p>
       </div>
    </div>
  </header>
  <body>
  <div class="container">
  <div class="margin-bottom">
  @yield('navigation')
  @yield('content')
  </div>
  </div>
  <div class="footer navbar-fixed-bottom">
    <div class="container">
    <div class="message">
                 @yield('message')
              </div>
      <span class="navbar-text">
      Copyright &copy;
      <script type="text/javascript">
              var d = new Date()
              document.write(d.getFullYear())
      </script>. Site Designed by <a href="http://www.alexbrasser.nl">Alex Brasser</a>. All Rights Reserved.
      </span>
    </div>
  </div>
  <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/angular.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/route.js') }}"></script>
  </body>
</html>