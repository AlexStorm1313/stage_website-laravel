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
    <div ng-app="logApp">
        <div style="margin-bottom: 150px;" ng-controller="weekController as weekCtrl">
            <table class="table table-striped">
                <h2>Weeks</h2>
                <thead>
                <tr>
                    <th><span class="glyphicon glyphicon-calendar"></span> Week number</th>
                    <th><span class="glyphicon glyphicon-calendar"></span> Date Created</th>
                    <th><span class="glyphicon glyphicon-calendar"></span> Date Comleted</th>
                    <th><span class="glyphicon glyphicon-ok"></span> Completed</th>
                    <th><span class="glyphicon glyphicon-ok"></span> All filed up</th>
                    <th><span class="glyphicon glyphicon-folder-open"></span> Show days</th>
                    <th><span class="glyphicon glyphicon-ok"></span> Complete</th>
                    <th><span class="glyphicon glyphicon-remove"></span> Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="week in weeks">
                    <td><% week.week_number %></td>
                    <td><% week.date_created | date:"dd-MM-yyyy" %></td>
                    <td ng-if="week.date_completed == '0000-00-00'">Not yet completed</td>
                    <td ng-if="week.date_completed != '0000-00-00'"><% week.date_completed %></td>
                    <td ng-if="week.completed == true">Completed</td>
                    <td ng-if="week.completed == false">Not yet Completed</td>
                    <td ng-if="week.all_filled_up == true">Yes</td>
                    <td ng-if="week.all_filled_up == false">No</td>
                    <td>
                        <button ng-click="openWeekDays(week.id)" class="btn btn-primary btn-xs">Open</button>
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

            <div ng-repeat="openweekday in openweekdays">
                <% openweekday.id %>
            </div>
            <button ng-click="createWeek()" class="btn btn-primary btn-xl pull-right">Create</button>
        </div>

        <div ng-controller="dayController">
            <div style="width: 250px" class="input-group pull-right">
                <input ng-model="week.number" style="height: 36px;" type="number" class="form-control">
            <span style="width: 75px;" class="input-group-addon"> <button ng-click="showWeekDays(week.number)"
                                                                          class="btn btn-primary btn-xs">Search
                </button></span>
            </div>
            <table class="table table-striped">
                <h2>Days of week <% week.number %></h2>
                <thead>
                <tr>
                    <th><span class="glyphicon glyphicon-calendar"></span> Date of day</th>
                    <th><span class="glyphicon glyphicon-filter"></span> All filled</th>
                    <th><span class="glyphicon glyphicon-folder-open"></span> Show hours</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="weekday in weekdays">
                    <td><% weekday.date_of_day | date:"dd-MM-yyyy" %></td>
                    <td><% weekday.all_filled %></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div ng-controller="hourController">
            <div>
                <div style="color: #ff0000; margin-top: 0px;" class="pull-right"><% dayhours.message %></div>
                <div style="float: right; width: 250px;" class="input-group pull-right"><input ng-model="date.of.day"
                                                                                 style="height: 36px;" type="text"
                                                                                 class="datepicker form-control"><span
                            style="margin-top:50px; width: 75px;" class="input-group-addon"> <button ng-click="showDayHours(date.of.day)"
                                                                                    class="btn btn-primary btn-xs">Date
                        </button></span>
                </div>

            </div>
            <script>
                $('.datepicker').datepicker({
                    format: 'dd-mm-yyyy',
                    todayBtn: true,
                    todayHighlight: true,
                    weekStart: 1,
                    autoclose: true
                });
            </script>
            <table class="table table-striped">
                <h2>Hours of Day <% date.of.day %></h2>
                <thead>
                <tr>
                    <th><span class="glyphicon glyphicon-calendar"></span> Hour of the day</th>
                    <th><span class="glyphicon glyphicon-book"></span> The Log</th>
                    <th><span class="glyphicon glyphicon-floppy-disk"></span> Save</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-if="dayhours !== null" ng-repeat="dayhour in dayhours">
                    <td><% dayhour.hour_of_day %></td>
                    <td><textarea ng-model="hour.log" style="height: 125px;margin-left: -250px; margin-right:-250px; width: 350px;" value="<% dayhour.the_log %>"></textarea></td>
                    <td> <button ng-click="updateLog(dayhour.id, hour.log)" class="btn btn-primary btn-xs">Save</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
