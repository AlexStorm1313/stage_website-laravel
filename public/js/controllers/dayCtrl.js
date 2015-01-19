angular.module('dayCtrl', [])

// inject the Week service into our controller
    .controller('dayController', function ($scope, $http, Day, Data) {
        $scope.dayData = {};
        $scope.loading = true;
        $scope.Data = Data;

        Day.get()
            .success(function (data) {
                $scope.days = data;
                $scope.loading = false;
            });

        $scope.showWeekDays = function (week_number) {
            $scope.loading = true;
            Day.showWeekDays(week_number)
                .success(function (data) {
                    $scope.weekdays = data;
                    $scope.loading = false;
                }
            )
        };
    });