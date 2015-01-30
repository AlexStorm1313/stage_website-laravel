<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Alex Brasser</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/phpmetrics.css') }}">
    <script type="text/javascript"
            src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript"
            src="{{ URL::asset('//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.8/angular.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/logApp.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/controllers/dayCtrl.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/controllers/weekCtrl.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/services/weekService.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/services/dayService.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/controllers/hourCtrl.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/services/hourService.js') }}"></script>
    <base href="/">
</head>
<header>
    <div class="container">
        <div class="animated fadeInDown jumbotron">
            <h1 class="animated fadeInUp">
                Welkom {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }}</h1>
            <p class="animated fadeInUp">U bent een {{ Auth::user()->role; }}</p>
            <div>Aantal Dagen die niet ingevuld zijn <div style="color: #ff0000">{{ Day::where('all_filled', '')->count() }}</div></div>
            <div>Aantal Uren gewerkt <div style="color: cyan">{{ Hour::where('the_log', '!=', '')->count() }}</div></div>
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
              var d = new Date();
              document.write(d.getFullYear())
          </script>. Site Created by <a href="http://www.alexbrasser.nl">Alex Brasser</a>. All Rights Reserved.
      </span>
    </div>
</div>

</body>
</html>