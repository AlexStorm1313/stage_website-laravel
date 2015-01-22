angular.module('dayCtrl', [])

// inject the Week service into our controller
    .controller('dayController', function ($scope, $element, $http, Day, Week) {
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

        $scope.openDayHours = function (id) {
            $element.next().controller('ngController').openDayHours(id);
        };

        this.openWeekDays = function (id) {
            $scope.loading = true;
            Week.openWeekDays(id)
                .success(function (data) {
                    $scope.openweekdays = data;
                    $scope.loading = true;
                });
        };
    });