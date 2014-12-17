@extends('html.home_html')
@section('navigation')
    <ul class="nav nav-tabs" role="tablist">
        <li class="link-home"><a href="home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        @if( Auth::user()->role == 'Admin')
            <li class="link-home"><a href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
        @if( Auth::user()->role == 'Stagiair')
            <li class="link-home"><a href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
        <li class="link-home active"><a href="logs"><span class="glyphicon glyphicon-list"></span> Logs</a></li>
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
    <div style="margin-bottom: 150px;" ng-app="logApp" ng-controller="weekController">
        <div style="width: 125px" class="input-group pull-right">
            <input ng-value="weekNumber" style="height: 36px;" type="number" class="form-control">
            <span class="input-group-addon"> <button ng-click="getWeekNumber()" class="btn btn-primary btn-xs">Week
                </button></span>
        </div>
        <div style="width: 125px" class="input-group pull-right">
            <input style="height: 36px;" type="date" class="form-control">
            <span class="input-group-addon"> <button class="btn btn-primary btn-xs">Date</button></span>
        </div>
        <table class="table table-striped">
            <h2>Weeks {{Input::get('week')}}</h2>
            <thead>
            <tr>
                <th><span class="glyphicon glyphicon-calendar"></span> Week number</th>
                <th><span class="glyphicon glyphicon-calendar"></span> Date Created</th>
                <th><span class="glyphicon glyphicon-calendar"></span> Date Comleted</th>
                <th><span class="glyphicon glyphicon-ok"></span> Completed</th>
                <th><span class="glyphicon glyphicon-ok"></span> All filed up</th>
                <th><span class="glyphicon glyphicon-folder-open"></span> Logs</th>
                <th><span class="glyphicon glyphicon-ok"></span> Complete</th>
                <th><span class="glyphicon glyphicon-remove"></span> Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="week in weeks | filter:searchWeek">
                <td><% week.week_number %></td>
                <td><% week.date_created %></td>
                <td ng-if="week.date_completed == '0000-00-00'">Not yet completed</td>
                <td ng-if="week.date_completed != '0000-00-00'"><% week.date_completed %></td>
                <td ng-if="week.completed == true">Completed</td>
                <td ng-if="week.completed == false">Not yet Completed</td>
                <td ng-if="week.all_filled_up == true">Yes</td>
                <td ng-if="week.all_filled_up == false">No</td>
                <td>
                    <button class="btn btn-primary btn-xs">Open</button>
                </td>
                <td ng-if="week.completed == true">
                    <button ng-click="completeWeek(week.id)" class="btn btn-primary btn-xs">Completed</button>
                </td>
                <td ng-if="week.completed == false">
                    <button ng-click="completeWeek(week.id)" class="btn btn-primary btn-xs">Complete</button>
                </td>
                <td>
                    <button ng-click="deleteWeek(week.id)" class="btn btn-primary btn-xs">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
        <button ng-click="createWeek()" class="btn btn-primary btn-xl pull-right">Create</button>
    </div>
@stop
