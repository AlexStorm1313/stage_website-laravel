var logs = angular.module('logs', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

logs.controller('LogsController', function($scope) {
    $scope.hello = 'world';
});