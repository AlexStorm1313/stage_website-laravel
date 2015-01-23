@extends('html.home_html')
@section('navigation')
    <ul class="nav nav-tabs" role="tablist">
        <li class="link-home active"><a href="home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        @if( Auth::user()->role == 'Admin')
            <li class="link-home"><a href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
        @if( Auth::user()->role == 'Stagiair')
            <li class="link-home"><a href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
        <li class="link-home"><a href="logs"><span class="glyphicon glyphicon-list"></span> Logs</a></li>
        <li class="link-home"><a href="documents"><span class="glyphicon glyphicon-file"></span> Documents</a></li>
        <li class="active dropdown navbar-right link-login">
            <a class=dropdown-toggle" data-toggle="dropdown"><span
                        class="glyphicon glyphicon-user"></span> {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a><span class="glyphicon glyphicon-envelope"></span> {{ Auth::user()->email; }}</a></li>
                <li class="divider"></li>
                <li><a href="settings"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>
            </ul>
        </li>
    </ul>
@stop

@section('content')
    @if(Auth::user()->role === 'Admin' || Auth::user()->role === 'Stagebegeleider')
        lololollo
    @endif
    @if(Auth::user()->role == 'Stagebegeleider')
        <div class="container-small">
            <h2>Angry Bytes</h2>

            <div class="about-text">
                Angry Bytes heeft hun eigen CMS ABC Manager. Dit is een flexibel CMS gericht op het publiceren van
                content.
                Het CMS is geschreven in PHP met het Zend framework. Voor het frontend word gedeeltelijk Backbone.js
                gebruikt. ABC Manager is samen met Two Screen live de core business van het bedrijf.
                <div class="spacing"></div>
                Two Screen live is een
                applicatie gebouwd op ABC Manager om live content te pushen naar apparaten. Two Screen word bijvoorbeeld
                gebruikt bij de Top2000 quiz zodat mensen thuis live mee kunnen spelen met de quiz op tv.
                <div class="spacing"></div>
                Om deze software
                te beheren word het versie beheer systeem git-scm gebruikt en naar een Github remote gepushed. Angry
                Bytes
                maakt websites verschillende bedrijven, maar de meeste klanten zijn van de publieke omroep. Om ervoor te
                zorgen dat de programmeurs meegaan met de nieuwste ontwikkelingen volgen ze thuis studies en cursussen.
            </div>
        </div>
    @endif
@stop
