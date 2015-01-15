angular.module('dayCtrl', [])

    // inject the Week service into our controller
    .controller('dayController', function ($scope, $http, Day) {
        $scope.dayData = {};
        $scope.loading = true;
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
        $scope.openWeekDaysFromWeeks = function (id) {
            $scope.loading = true;
            Day.openWeekDaysFromWeeks(id)
                .success(function (data) {
                    $scope.dumps = data;
                    $scope.loading = false;
                }
            )
        };

    });