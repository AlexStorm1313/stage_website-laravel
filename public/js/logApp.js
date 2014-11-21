var logApp = angular.module('logApp', ['mainCtrl', 'weekService'], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});