angular.module('mainCtrl', [])

    // inject the Week service into our controller
    .controller('weekController', function ($scope, $http, Week) {
        $scope.weekData = {};
        $scope.loading = true;

        Week.get()
            .success(function (data) {
                $scope.weeks = data;
                $scope.loading = false;
            });

        $scope.createWeek = function() {
            $scope.loading = true;
            Week.save($scope.weekData)
                .success(function(data) {
                    Week.get()
                        .success(function(getData) {
                            $scope.weeks = getData;
                            $scope.loading = false;
                        });

                })
                .error(function(data) {
                    console.log(data);
                });
        };

        $scope.completeWeek = function(id){
            $scope.loading = true;
            Week.complete(id)
                .success(function(data){
                    Week.get()
                        .success(function (data){
                            $scope.weeks = data;
                            $scope.loading = false;
                        });
                });
        };

        $scope.deleteWeek = function (id) {
            $scope.loading = true;
            Week.destroy(id)
                .success(function (data) {
                    Week.get()
                        .success(function (data) {
                            $scope.weeks = data;
                            $scope.loading = false;
                        });

                });
        };

    });