/**
 * Created by alexstorm13 on 26/11/14.
 */
angular.module('hourCtrl', [])

    // inject the Week service into our controller
    .controller('hourController', function ($scope, $http, Hour, Day) {
        $scope.hourData = {};
        $scope.loading = true;

        Hour.get()
            .success(function (data) {
                $scope.days = data;
                $scope.loading = false;
            });

        $scope.showDayHours = function (date_of_day) {
            $scope.loading = true;
            Hour.showDayHours(date_of_day)
                .success(function (data) {
                    $scope.dayhours = data;
                    $scope.loading = false;
                }
            )
        };
        $scope.updateLog = function (id, log) {
            $scope.loading = true;
            Hour.updateLog(id, log)
                .success(function (data) {
                    $scope.updatelog = data;
                    $scope.loading = false;
                }
            )
        };

        this.openDayHours = function (id) {
            $scope.loading = true;
            Day.openDayHours(id)
                .success(function (data) {
                    $scope.opendayhours = data;
                    $scope.loading = true;
                });
        };

    });